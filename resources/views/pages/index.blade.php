@extends('layouts.app')
@section('content')
    <!-- =========================== SLIDER BEGIN  =========================== -->
    <div class="owl-carousel owl-theme">
        <!-- first slide -->
        <div class="item " >
            <img src="{{asset('images/d.jpg')}}">
            <div class="bottom-left">

                <div class="slidertextone" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">
                    Powerful
                </div>
                <div class="slidertexttwo" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                    Sermons
                </div>
            </div>
        </div>
        <!-- second slide-->
        <div class="item">
            <img src="{{asset('images/d.jpg')}}">
            <div class="bottom-left">
                <div class="slidertextone" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">
                    Heart of
                </div>
                <div class="slidertexttwo" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                    Worship
                </div>
            </div>
        </div>
        <!-- third slide -->
        <div class="item">
            <img src="{{asset('images/d.jpg')}}">
            <div class="bottom-left">
                <div class="slidertextone" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">
                    Blast Youth
                </div>
                <div class="slidertexttwo" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                     Ministry
                </div>
            </div>
        </div>
        <!-- fourth slide -->
        <div class="item">
            <img src="{{asset('images/d.jpg')}}">
            <div class="bottom-left">
                <div class="slidertextone" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">
                    Dynamic Children
                </div>
                <div class="slidertexttwo" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                                 Ministry
                </div>
            </div>
        </div>
    </div>
    <!-- =========================== SLIDER END  =========================== -->


    <!-- =========================== SERVICES BEGIN  =========================== -->
<div class="bannertitle">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Our Services</h3>
        </div>
    </div>
</div>

    <section class="services">

    <div class="container">

        <div class="row ">
                <div class="col-md-6 ">
                    <h4 class="text-center">Sunday services</h4>
                    <ul>
                        <li>Prayer Service : 7:00am - 8:00am</li>
                        <li>The Journey : 8:00am - 8:50am</li>
                        <li>Family Service : 9:00am - 12:00pm</li>
                        <li>Oasis of Grace Childrens Church : 9:00am - 12:00pm</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center">Other services</h4>
                    <ul>
                        <li>Blast Youth Service : Every fortnight 3:30pm - 6:00pm</li>
                        <li>Prayer BootCamp : Wednesdays 5:30pm - 7:30pm</li>
                        <li>Ladies Prayer Meeting: Tuesdays 5:00pm - 6:00pm</li>
                        <li>Throne Room Experience(TRE): &nbsp;<br> 2nd Friday of the month 6:00pm - 8:00pm</li>
                    </ul>
                </div>
    </div>
    </div>
    </section>
    <!-- =========================== SERVICES END  =========================== -->


    <!-- =========================== UPCOMING EVENTS BEGIN  =========================== -->
    <div class="bannertitle">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Events</h3>
            </div>
        </div>
    </div>
    <section class="events">
        <div class="container">

            <div class="row ">
                <div class="col-md-12">
                    <div>
                        <p> Will be uploaded soon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== UPCOMING EVENTS END  =========================== -->

    <!-- =========================== LOCATION GOOGLE MAPS BEGIN  =========================== -->
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.639785944462!2d35.297056!3d0
            .51051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x901065d104b128fe!2sHouse+Of+Grace!5e0!3m2!1sen!2ske
            !4v1537967383843" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- =========================== LOCATION GOOGLE MAPS END  =========================== -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function (){
            // Declare Carousel jquery object
            var owl = $('.owl-carousel');
            // Carousel initialization
            owl.owlCarousel({
                loop: true,
                // margin:0,
                navSpeed:500,
                nav:false,
                autoplay: true,
                rewind: true,
                dots: false,
                items: 1});

            // add animate.css class(es) to the elements to be animated
            function setAnimation ( _elem, _InOut ) {
                // Store all animationend event name in a string.
                // cf animate.css documentation
                var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

                _elem.each ( function () {
                    var $elem = $(this);
                    var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

                    $elem.addClass($animationType).one(animationEndEvent, function () {
                        $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                    });
                });
            }

// Fired before current slide change
            owl.on('change.owl.carousel', function(event) {
                var $currentItem = $('.owl-item', owl).eq(event.item.index);
                var $elemsToanim = $currentItem.find("[data-animation-out]");
                setAnimation ($elemsToanim, 'out');
            });

// Fired after current slide has been changed
            var round = 0;
            owl.on('changed.owl.carousel', function(event) {

                var $currentItem = $('.owl-item', owl).eq(event.item.index);
                var $elemsToanim = $currentItem.find("[data-animation-in]");

                setAnimation ($elemsToanim, 'in');
            })

            owl.on('translated.owl.carousel', function(event) {
                // console.log (event.item.index, event.page.count);

                if (event.item.index == (event.page.count - 1))  {
                    if (round < 1) {
                        round++;
                        // console.log (round);
                    } else {
                        owl.trigger('stop.owl.autoplay');
                        var owlData = owl.data('owl.carousel');
                        owlData.settings.autoplay = false; //don't know if both are necessary
                        owlData.options.autoplay = false;
                        owl.trigger('refresh.owl.carousel');
                    }
                }
            });

        });
    </script>
@endsection