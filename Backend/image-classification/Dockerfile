FROM python:3.9

ENV TF_CPP_MIN_LOG_LEVEL=2 \
    APP_HOME=/app

RUN apt-get update && apt-get install -y --no-install-recommends \
    git-lfs \
    && rm -rf /var/lib/apt/lists/*

WORKDIR $APP_HOME

COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY . .
RUN git clone https://huggingface.co/yangy50/garbage-classification yangy50/garbage-classification
EXPOSE 6000
CMD ["python", "-u", "app.py"]
