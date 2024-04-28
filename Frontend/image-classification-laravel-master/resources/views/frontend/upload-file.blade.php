@extends('frontend.layouts.master')
@section('body')
    <section class="main_section upload_file_page">
        <div class="loader_wrap">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 style="margin:auto;display:block;" width="204px" height="204px" viewBox="0 0 100 100"
                 preserveAspectRatio="xMidYMid">
                <g transform="translate(50,50)">
                    <circle cx="0" cy="0" r="8.333333333333334" fill="none" stroke="#e15b64" stroke-width="6.1"
                            stroke-dasharray="26.179938779914945 26.179938779914945">
                        <animateTransform attributeName="transform" type="rotate" values="0 0 0;-360 0 0" times="0;1"
                                          dur="1.3513513513513513s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="0"
                                          repeatCount="indefinite"></animateTransform>
                    </circle>
                    <circle cx="0" cy="0" r="16.666666666666668" fill="none" stroke="#f47e60" stroke-width="6.1"
                            stroke-dasharray="52.35987755982989 52.35987755982989">
                        <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1"
                                          dur="1.3513513513513513s" calcMode="spline" keySplines="0.2 0 0.8 1"
                                          begin="-0.14054054054054055" repeatCount="indefinite"></animateTransform>
                    </circle>
                    <circle cx="0" cy="0" r="25" fill="none" stroke="#f8b26a" stroke-width="6.1"
                            stroke-dasharray="78.53981633974483 78.53981633974483">
                        <animateTransform attributeName="transform" type="rotate" values="0 0 0;-360 0 0" times="0;1"
                                          dur="1.3513513513513513s" calcMode="spline" keySplines="0.2 0 0.8 1"
                                          begin="-0.2810810810810811" repeatCount="indefinite"></animateTransform>
                    </circle>
                    <circle cx="0" cy="0" r="33.333333333333336" fill="none" stroke="#abbd81" stroke-width="6.1"
                            stroke-dasharray="104.71975511965978 104.71975511965978">
                        <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1"
                                          dur="1.3513513513513513s" calcMode="spline" keySplines="0.2 0 0.8 1"
                                          begin="-0.4216216216216216" repeatCount="indefinite"></animateTransform>
                    </circle>
                    <circle cx="0" cy="0" r="41.666666666666664" fill="none" stroke="#849b87" stroke-width="6.1"
                            stroke-dasharray="130.89969389957471 130.89969389957471">
                        <animateTransform attributeName="transform" type="rotate" values="0 0 0;-360 0 0" times="0;1"
                                          dur="1.3513513513513513s" calcMode="spline" keySplines="0.2 0 0.8 1"
                                          begin="-0.5621621621621622" repeatCount="indefinite"></animateTransform>
                    </circle>
                </g>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="intro_inner_content upload_file_inner">
                    <div class="upload_file_heading">
                        <h2>Încarcă un fișier</h2>
                        <p>Mărimea maximă : 50MB</p>
                    </div>
                    <div class="upload_file_box">
                        <div class="drop-area file_drop_drag" id="dropArea">
                            <input type="file" id="fileInput" class="file-input" multiple>
                            <div id="fileInfo"></div>
                            <label for="fileInput"><span>Alege</span> un fișier sau trage-l aici </label>
                        </div>
                    </div>
                    <div class="next_button">
                        <a href="{{route('home')}}">
                            <img src="{{asset('assets/images/arrow-left-circle.png')}}">
                        </a>
                    </div>
                </div>
            </div>
            <img class="top_left_bc" src="{{asset('assets/images/top_left_bc.png')}}">
            <img class="bottom_right_bc swipe_right_abd" src="{{asset('assets/images/bottom_right_bc.png')}}">
            <img class="bottom_left_bc swipe_left_abd" src="{{asset('assets/images/bottom_left_bc.png')}}">
        </div>
    </section>
    <div id="errorModal" class="modal_bs">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Eroare</h2>
            <div class="error_svg">
                <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M37.0833 7.41667C20.6989 7.41667 7.41667 20.6989 7.41667 37.0833C7.41667 53.4678 20.6989 66.75 37.0833 66.75C53.4678 66.75 66.75 53.4678 66.75 37.0833C66.75 20.6989 53.4678 7.41667 37.0833 7.41667ZM0 37.0833C0 16.6028 16.6028 0 37.0833 0C57.5639 0 74.1667 16.6028 74.1667 37.0833C74.1667 57.5639 57.5639 74.1667 37.0833 74.1667C16.6028 74.1667 0 57.5639 0 37.0833ZM37.0833 18.5417C39.1314 18.5417 40.7917 20.2019 40.7917 22.25V37.0833C40.7917 39.1314 39.1314 40.7917 37.0833 40.7917C35.0353 40.7917 33.375 39.1314 33.375 37.0833V22.25C33.375 20.2019 35.0353 18.5417 37.0833 18.5417Z" fill="#FA7070"/>
                    <path d="M40.7917 51.9166C40.7917 53.9646 39.1314 55.6249 37.0833 55.6249C35.0353 55.6249 33.375 53.9646 33.375 51.9166C33.375 49.8685 35.0353 48.2083 37.0833 48.2083C39.1314 48.2083 40.7917 49.8685 40.7917 51.9166Z" fill="#FA7070"/>
                </svg>
            </div>
            <p id="errorMessage">Nu sa detectat nici un obiect</p>
            <a href="JavaScript:;" class="scanBTN"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.8 2.3999H4.53333C3.35513 2.3999 2.4 3.35503 2.4 4.53324V8.7999M8.8 21.5999H4.53333C3.35513 21.5999 2.4 20.6448 2.4 19.4666V15.1999M15.2 2.3999H19.4667C20.6449 2.3999 21.6 3.35503 21.6 4.53324V8.7999M21.6 15.1999V19.4666C21.6 20.6448 20.6449 21.5999 19.4667 21.5999H15.2M2.4 12.0002H21.6" stroke="#FFFDF0" stroke-width="2" stroke-linecap="round"/>
</svg>
 Scan</a>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const base_api = 'https://h4kuhdbrkvc5t4jod2qyyk3kpm0emxcx.lambda-url.us-east-1.on.aws/';
        const dropArea = document.getElementById('dropArea');
        const fileInfo = document.getElementById('fileInfo');
        const errorPopup = document.getElementById('errorModal'); // Reference to the error popup modal

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, e => {
                e.preventDefault();
                e.stopPropagation();
            }, false);
        });

        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, () => dropArea.classList.add('active'), false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, () => dropArea.classList.remove('active'), false);
        });

        dropArea.addEventListener('drop', e => {
            e.preventDefault();
            e.stopPropagation();

            const files = e.dataTransfer.files || e.target.files;
            if (files.length > 0) {
                const fileNames = Array.from(files).map(file => file.name);
                fileInfo.textContent = `Selected file(s): ${fileNames.join(', ')}`;

                const file = files[0];
                uploadFile(file);
            }
        }, false);

        const fileInput = document.getElementById('fileInput');
        fileInput.addEventListener('change', () => {
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                fileInfo.textContent = `Selected file(s): ${file.name}`;
                uploadFile(file);
            }
        }, false);

        function uploadFile(file) {
            var reader = new FileReader();
            var resultRoute = "{{ route('result') }}";

            // Check file extension
            if (!['image/jpeg', 'image/jpg', 'image/png'].includes(file.type)) {
                displayError(`Sunt permise numai fișierele JPG, JPEG și PNG<br>Nu a fost detectat niciun obiect`);
                // Clear selected file input
                fileInput.value = ''; // Reset file input value
                return; // Stop further execution
            }

            // FileReader onload function, fired when file is read
            reader.onload = function (event) {
                var base64Image = event.target.result; // Get base64 string
                localStorage.setItem('uploaded_file', JSON.stringify(base64Image));

                // Remove data URI prefix if present
                var base64Data = base64Image.replace(/^data:image\/(png|jpeg);base64,/, '');

                // Create JSON object with the base64 image data
                var jsonData = {
                    image: base64Data
                };

                // Ajax settings
                var settings = {
                    "url": base_api,
                    "method": "POST",
                    "timeout": 50000, // Timeout set to 50 seconds
                    "contentType": "application/json",
                    "data": JSON.stringify(jsonData), // Send JSON data
                    beforeSend: function () {
                        $('.loader_wrap').fadeIn(); // Show loader
                        console.log('Request is about to be sent');
                    },
                    success: function (response) {
                        $('.loader_wrap').fadeOut(); // Hide loader
                        // Save response to local storage
                        localStorage.setItem('response', JSON.stringify(response));
                        // Redirect to results page
                        window.location.href = resultRoute;
                    },
                    error: function (xhr, status, error) {
                        $('.loader_wrap').fadeOut(); // Hide loader
                        console.error('Error:', error);
                        displayError(error);
                    }
                };

                // Send Ajax request
                $.ajax(settings);
            };

            // Read the file as data URL
            reader.readAsDataURL(file);
        }

        var modal = document.getElementById('errorModal');

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            jQuery('#errorModal').fadeOut();
        }

        
        window.onclick = function(event) {
            if (event.target == modal) {
                jQuery('#errorModal').fadeOut();
            }
        }

        function displayError(errorMessage) {
            jQuery('#errorMessage').html(errorMessage);
            jQuery('#errorModal').fadeIn();
        }

        $(document).ready(function () {
            var swipeRightImages = document.querySelectorAll('.swipe_right_abd');
            var swipeLeftImages = document.querySelectorAll('.swipe_left_abd');

            function animateSwipeRightImages(images) {
                images.forEach(function (image) {
                    setTimeout(function () {
                        image.style.opacity = '1'; // Fade in effect
                        image.style.transform = 'translateX(0)'; // Move to original position
                    }, 200); // Delay the animation by 200 milliseconds
                });
            }

            function animateSwipeLeftImages(images) {
                images.forEach(function (image) {
                    setTimeout(function () {
                        image.style.opacity = '1'; // Fade in effect
                        image.style.transform = 'translateX(0)'; // Move to original position
                    }, 200); // Delay the animation by 200 milliseconds
                });
            }

            animateSwipeRightImages(swipeRightImages);
            animateSwipeLeftImages(swipeLeftImages);
        });
    </script>
@endsection
