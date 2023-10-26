@extends('layout')
@section('title', "Home")


@section('css')

@endsection()


@section('body') 
    <div class="I-dashboard" style="background-image: url('{{ asset("assets/images/battery-bg.png") }}');">
        <div class="wrapper">
            <div class="dashboard-wrapper">
                <div class="dashboard-content">
                    <h1 class="page-title">BATTERY MANAGEMENT SYSTEM</h1>
                    <p class="page-description">For all electric vehicle applications</p>
                </div>
                <div class="dashboard-content">
                    
                </div>
            </div>
        </div> 
    </div>
    <div class="I-product">
        <div class="wrapper">
            <div class="product-flex">
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg.svg") }}'); height: 600px;">
                        <img src="{{ asset("assets/images/battery-1.png") }}" alt="">
                    </div>
                </div>
                <div class="product-layout content-layout w-60">
                    <div>
                        <h4 class="product-title">BATTERY MANAGEMENT SYSTEM</h4>
                    <p class="product-name">OVERVIEW</p>
                    <p class="product-description">Our BMS is optimized to deliver maximum range with a solid-state design that provides high current/power and reduces overall system costs. </p>
                    <p class="product-description">Our BMS solutions architecture is highly flexible, configurable, and scalable as per our customer’s requirements. </p>
                    <p class="product-description">We utilize our proprietary BMS algorithms and software to achieve higher battery optimization with reduced development costs for both our low-voltage (LV) and high-voltage(HV) BMS.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="I-product" style="background-color: #E6F2FF;">
        <div class="wrapper">
            <div class="product-flex">
                <div class="product-layout content-layout w-60"> 
                    <h4 class="product-title">BATTERY MANAGEMENT SYSTEM</h4>
                    <p class="product-name">FEATURES</p>
                    <p class="product-description">
                        Cell Technology:
                        Lithium ion NMC, NCA
                    </p>
                    <p class="product-description">
                        Voltage :
                        50.4V 
                    </p>
                    <p class="product-description">
                        Embedded capacity :
                        25.6Ah
                    </p>
                    <p class="product-description">
                        Useable Energy :
                        1144Wh
                    </p>
                    <p class="product-description">
                        Working voltage :
                        42-57.75V
                    </p>
                    <p class="product-description">
                        CAN Communication :
                        ISO11898-2:2016 Protection: Short circuit, Overtemperature.
                    </p>
                    <p class="product-description">
                        Working Temperature :
                        Discharge -10O/60OC / Charge OO / 45OC
                    </p>
                    <p class="product-description">
                        Relay Standard :
                        UN 38.3, IEC 62133, UL 1642 
                    </p>
                    <p class="product-description">
                        Water Resistant :
                        IP67
                    </p> 
                </div>
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}'); height: 670px;">
                        <img src="{{ asset("assets/images/battery-1.png") }}" alt="" style="width: 90%;">
                    </div> 
                </div>
            </div>
        </div>
    </div> 
@endsection()

@section('js') 

@endsection()
