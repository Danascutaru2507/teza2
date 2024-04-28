@extends('frontend.layouts.master')
@section('body')
    <section class="blog-sec contact-sec">
        <div class="container">
            <div class="blog-main">
                <h1>Contact</h1>
                <div class="blog-content-main contact-content-main">
                    <!-- <div class="contact-links">
                        <ul>
                            <li>
                                <a href="mailto:justrecycle@gmail.com"><img src="assets/images/email-icon.png"> <label>justrecycle@gmail.com</label></a>
                            </li>
                            <li>
                                <a href="tel:+123333333"><img src="assets/images/TelephoneFill.png"> <label>+123 333 333</label></a>
                            </li>
                            <li>
                                <a href="tel:+123333333"><img src="assets/images/location-icon.png"> <label>str. Studentilor 1</label></a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- <div class="contact-form">
                        <form id="contact-us-form">
                            <div class="form-field">
                                <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="nume / prenume" required="">
                                <span class="error" aria-live="polite"></span>
                            </div>
                            <div class="form-field">
                                <input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="email" required="">
                                <span class="error" aria-live="polite"></span>
                            </div>
                            <div class="form-field">
                                <input type="text" class="form-control" name="contact-subject" id="contact-subject" placeholder="mesajul" required="">
                                <span class="error" aria-live="polite"></span>
                            </div>
                            <div class="contact-us-btn">
                                <button class="formSubmitBtn g-recaptcha" data-sitekey="6Ld3PIwoAAAAAOX8hzoGb3Cp66qke65bvSsocU4I" data-callback="onSubmit" data-action="quote_email"><img src="assets/images/telegram.png"><label>Trimite</label> </button>
                            </div>
                        </form>
                    </div> -->
                    <div class="social-links">
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <img src="{{asset('assets/images/instagram-03.png')}}">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/en/" target="_blank">
                                    <img src="{{asset('assets/images/tik-tok.png')}}">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <img src="{{asset('assets/images/facebook-1.png')}}">
                                </a>
                            </li>
                            <li>
                                <a href="https://play.google.com/store/apps/details?id=org.telegram.messenger&hl=en_IN"
                                   target="_blank">
                                    <img src="{{asset('assets/images/telegram-1.png')}}">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <img class="top_left_bc" src="{{asset('assets/images/Vector-93.png')}}">
            <img class="bottom_right_bc swipe_right_abd" src="{{asset('assets/images/Vector-92.png')}}">
            <img class="bottom_left_bc swipe_left_abd" src="{{asset('assets/images/Vector-91.png')}}">
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            var topSwipeImages = document.querySelectorAll('.top_swipe_abd');
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

            function animateTopSwipeImages(images) {
                images.forEach(function (image) {
                    setTimeout(function () {
                        image.style.opacity = '1'; // Fade in effect
                        image.style.transform = 'translateY(-70%)'; // Move to original position
                    }, 200); // Delay the animation by 200 milliseconds
                });
            }

            animateSwipeRightImages(swipeRightImages);
            animateSwipeLeftImages(swipeLeftImages);
            animateTopSwipeImages(topSwipeImages);
        });
    </script>
@endsection
