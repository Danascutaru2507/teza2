@extends('frontend.layouts.master')
@section('body')
    <section class="blog-sec">
        <div class="container">
            <div class="blog-main">
                <h1>Blog</h1>
                <div class="blog-content-main">
                    <div class="blog-top-content">
                        <h2>Recycle Event</h2>
                        <div class="owl-carousel owl-theme blog-slider">
                            @forelse($events as $event)
                                <div class="item">
                                    <div class="globel-box-main">
                                        <div class="date-image">
                                            <h4>{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</h4>
                                            <img style="height: 50px; width: 50px; border-radius: 50%;"
                                                 src="{{ asset('storage/images/events/' . $event->image) }}">
                                        </div>
                                        <div class="title-btn">
                                            <h3>{{ $event->name }}</h3>
                                            <a href="#">On MAPS</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p style="color: red">No Record found. please add Events and Blog form Admin panel</p>
                            @endforelse

                        </div>
                    </div>
                    @if($latestBlog)
                        <div class="blog-bottom-content">
                            <h2>{{$latestBlog->heading}}</h2>
                            {!! $latestBlog->body !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <img class="top_swipe_abd" src="{{asset('assets/images/top_left_bc.png')}}">
        <img class="bottom_right_bc swipe_right_abd" src="{{asset('assets/images/Vector-92.png')}}">
        <img class="bottom_left_bc swipe_left_abd" src="{{asset('assets/images/Vector-91.png')}}">
    </section>
@endsection
@section('js')
    <script>
        $('.blog-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            items: 2,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 2,
                    nav: true,
                    loop: false
                }
            }
        })
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
