@extends('frontend.layouts.master')
@section('body')
    <section class="main_section intro_page">
        <div class="container">
            <div class="row">
                <div class="intro_inner_content">
                    <div class="main_heading">
                        <h1>Contribuie la un viitor mai bun, perfecționează-ți abilitățile <span>de reciclare!</span></h1>
                    </div>
                    <div class="intro_slider">
                        <div class="intro_slider_inner">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="carousel_img">
                                        <img class="carousel_bc_img" src="{{asset('assets/images/carousel_bc.png')}}">
                                        <img class="slider_inner_img" src="{{asset('assets/images/carousel-1.pn')}}g"
                                             style="top: 94px;">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel_img">
                                        <img class="carousel_bc_img" src="{{asset('assets/images/carousel_bc.png')}}">
                                        <img class="slider_inner_img" src="{{asset('assets/images/carousel-2.png')}}">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel_img">
                                        <img class="carousel_bc_img" src="{{asset('assets/images/carousel_bc.png')}}">
                                        <img class="slider_inner_img" src="{{asset('assets/images/carousel-3.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next_button">
                        <a href="{{route('upload')}}">
                            <img src="{{asset('assets/images/arrow-right-circle.png')}}">
                        </a>
                    </div>

                </div>
            </div>
            <img class="top_left_bc swipe_top_abd" src="{{asset('assets/images/top_left_bc.png')}}">
            <img class="bottom_right_bc swipe_right_abd" src="{{asset('assets/images/bottom_right_bc.png')}}">
            <img class="bottom_left_bc" src="{{asset('assets/images/bottom_left_bc.png')}}">
        </div>
    </section>
@endsection
@section('js')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            items:1,
            dots:true,
        })
        $(document).ready(function() {
            var swipeRightImages = document.querySelectorAll('.swipe_right_abd');
            var swipeTopImages = document.querySelectorAll('.swipe_top_abd');
            var carouselImages = document.querySelectorAll('.carousel_bc_img');
            var bottom_left_bc = document.querySelectorAll('.bottom_left_bc');

            function animateSwipeRightImages(images) {
                images.forEach(function(image) {
                    setTimeout(function() {
                        $('.bottom_left_bc').css('opacity','1');
                        image.style.opacity = '1'; // Fade in effect
                        image.style.transform = 'translateX(0)'; // Move to original position
                    }, 200); // Delay the animation by 200 milliseconds
                });
            }

            function animateTopSwipeImages(images) {
                images.forEach(function(image) {
                    setTimeout(function() {
                        image.style.opacity = '1'; // Fade in effect
                        image.style.transform = 'translateY(0)'; // Move to original position
                    }, 200); // Delay the animation by 200 milliseconds
                });
            }

            function animateCarouselImages(images) {
                images.forEach(function(image) {
                    setTimeout(function() {
                        image.style.opacity = '1';
                        image.style.transform = 'translate(0, 16px)';
                    }, 200);
                });
            }

            animateSwipeRightImages(swipeRightImages);
            animateTopSwipeImages(swipeTopImages); // Changed from topSwipeImages to swipeTopImages
            animateCarouselImages(carouselImages);
        });
    </script>
@endsection
