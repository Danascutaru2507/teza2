import base64
import logging
import re
import traceback
from sys import exc_info

import torch
from PIL import Image
from flask import Flask, jsonify, request
from flask_cors import CORS
from transformers import AutoModelForImageClassification, AutoImageProcessor

logging.basicConfig(level=logging.INFO)
logger = logging.getLogger(__name__)

repo_name = "yangy50/garbage-classification"
label2id = {
    "cardboard": 0,
    "glass": 1,
    "metal": 2,
    "paper": 3,
    "plastic": 4,
    "trash": 5
}
id2label = {value: key for key, value in label2id.items()}
model = AutoModelForImageClassification.from_pretrained(
    repo_name,
    label2id=label2id,
    id2label=id2label,
    ignore_mismatched_sizes=True,
)
inference_model = model
image_processor = AutoImageProcessor.from_pretrained(repo_name)

app = Flask(__name__)
CORS(app)


@app.route('/predict', methods=['POST'])
def predict():
    try:
        if 'image' not in request.files:
            return jsonify({"error": "No file part"}), 400

        img = request.files['image']
        if img.filename == '':
            return jsonify({"error": "No selected file"}), 400
        img = Image.open(img.stream)
        img_str = base64.b64encode(img.tobytes()).decode('utf-8')
        encoding = image_processor(img.convert("RGB"), return_tensors="pt")
        with torch.no_grad():
            outputs = inference_model(**encoding)
            logits = outputs.logits
            probabilities = torch.softmax(logits, dim=-1)
            predicted_class_idx = logits.argmax(-1).item()
            predicted_class = inference_model.config.id2label[predicted_class_idx]
            if predicted_class == "trash":
                predicted_class = "Organic"
            predicted_class_probability = probabilities[0, predicted_class_idx].item()
            pattern = fr'\{{{predicted_class}\}}\s+(.*?)\{{/{predicted_class}\}}'
            with open('static.txt', 'r') as file:
                f = file.read()
                matches = re.findall(pattern, f, re.DOTALL)
            if matches:
                text = " ".join(matches)
            else:
                text = "No matching text found"
            return jsonify(
                {
                    'statusCode': 200,
                    'body': {"class": predicted_class.capitalize(),
                             "probability": round(predicted_class_probability * 100),
                             "text": text,
                             "image": img_str}, })
    except AssertionError:
        logger.error(traceback.format_exc())
        return {
            'statusCode': 400,
            'body': {
                'error': f"{exc_info()[1]}"
            }
        }

    except:
        logger.error(traceback.format_exc())
        return {
            'statusCode': 500,
            'body': {
                'error': f"{str(exc_info()[0]).split('class')[1].split('>')[0].strip()}: {exc_info()[1]}"
            }
        }


if __name__ == "__main__":
    app.run(debug=True, host='0.0.0.0', port=6000)
