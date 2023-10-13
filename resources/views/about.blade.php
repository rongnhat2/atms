@extends('layout')
@section('title', "Home")


@section('css')

@endsection()


@section('body') 
    <div class="I-about">
            <div class="about-top"  style="background-image: url('{{ asset("assets/images/about-banner.svg") }}');">
                <div class="about-title">ABOUT US</div>
            </div>
            <div class="wrapper">
                <div class="about-wrapper">
                    <p class="about-description">
                        Established in 2010, AMBO Technologies sells electronic equipment and electronic components. We also provide OEM and ODM services for Viet Nam as long as global companies. We have strong knowledge about designing industrial automation, automotive, telecommunication, and power electronics products.</p>
                    <p class="about-description">We have strong partnerships with various electronics component distributors and mechanical engineering service companies. Our mission is to help our clients to design and manufacture the best electronic products. ATMS was spun off from AMBO's R&D department in 2023. </p>
                </div>
            </div>
            <img src="{{ asset("assets/images/about-map.svg") }}" alt="">
        </div>
@endsection()

@section('js') 

@endsection()
