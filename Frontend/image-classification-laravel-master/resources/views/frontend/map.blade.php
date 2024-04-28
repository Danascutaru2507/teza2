@extends('frontend.layouts.master')
@section('body')
    <section class="blog-sec maps-sec">
        <div class="container">
            <div class="blog-main">
                <h1>Maps</h1>
                <div class="blog-content-main maps-content">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787411.4756565485!2d28.390007299999997!3d46.97973345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c3628b769a1%3A0x258119acdf53accb!2sMoldova!5e0!3m2!1sen!2s!4v1711139273752!5m2!1sen!2s" width="100%" height="744" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    <iframe src="https://www.google.com/maps/d/embed?mid=1FErAcDqrVAX9Z8mXyVESUY_0WBitcsgm&ehbc=2E312F"
                            width="640" height="480"></iframe>
                </div>
            </div>
            <img class="top_swipe_abd" src="{{asset('assets/images/top_left_bc.png')}}">
            <img class="bottom_right_bc swipe_right_abd" src="{{asset('assets/images/Vector-92.png')}}">
            <img class="bottom_left_bc swipe_left_abd" src="{{asset('assets/images/Vector-91.png')}}">
        </div>
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
