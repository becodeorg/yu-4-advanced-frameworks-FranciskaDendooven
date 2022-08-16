@extends('components/layout')
@section('content')
<div class="body-content">
    <span>@auth()
        <a href="{{ route('logout') }}">logout</a>
        @endauth
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('calender') }}">Book Appointment</a>
    </span>

    <section class="">
            <img class="mySlides" src="/img/biomech_fly.png" alt="...">

            <img class="mySlides" src="/img/bird.jpg" alt="...">

            <img class="mySlides" src="/img/lines.jpg" alt="...">

            <img class="mySlides" src="/img/anckle.jpg" alt="...">

            <img class="mySlides" src="/img/skulls.jpg" alt="...">

            <img class="mySlides" src="/img/back.jpg" alt="...">

    </section>

    <a id="home" href="{{ route('home') }}">Home</a>

</div><!--end of body-content-->
@endsection