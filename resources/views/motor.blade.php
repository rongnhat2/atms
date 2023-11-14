@extends('layout')
@section('title', "Home")


@section('css')

@endsection()


@section('body') 
    <div class="I-dashboard" style="background-image: url('{{ asset("assets/images/motor-bg.png") }}');">
        <div class="wrapper">
            <div class="dashboard-wrapper">
                <div class="dashboard-content"> 
                    <h1 class="page-title">MOTOR CONTROLLERS</h1>
                    <p class="page-description">ATMS’s motor controllers range could vary from 3000W – 10000W</p>
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
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg.svg") }}');">
                        <img src="{{ asset("assets/images/motor-1.png") }}" alt="">
                    </div>
                </div>
                <div class="product-layout content-layout w-60">
                    <div>
                        <h4 class="product-title">MOTOR CONTROLLERS</h4>
                        <p class="product-name">OVERVIEW</p>
                        <p class="product-description">ATMS’s motor controllers range could vary from 3000W – 10000W</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="I-product" style="background-color: #E6F2FF;">
        <div class="wrapper"> 
            <div class="product-flex">
                <div class="product-layout content-layout w-60"> 
                    <div>
                        <h4 class="product-title">MOTOR CONTROLLERS</h4>
                        <p class="product-name">FEATURES</p>
                        <p class="product-description">
                            Protocol IEC 61851-1 
                        </p>
                        <p class="product-description">
                            Power :
                            3000W - 10000W
                        </p>
                        <p class="product-description">
                            Voltage :
                            42-58VDC
                        </p>
                        <p class="product-description">
                            Motor :
                            PMSM
                        </p>
                        <p class="product-description">
                            Chipset :
                            Infineon XMC1404
                        </p>
                        <p class="product-description">
                            Algorithm :
                            Encoder Sin/Cos, Hall, Temperature feedback
                        </p>
                        <p class="product-description">
                            CAN Communication :
                            CAN 2.0A
                        </p>
                        <p class="product-description">
                            Protection :
                            Short circuit, Overtemperature.
                        </p>
                        <p class="product-description">
                            Working Temperature :
                            -20°C - 80°C
                        </p>
                        <p class="product-description">
                            Water Resistant :
                            IP67
                        </p>
                    </div>  
                </div>
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}'); margin: 0 0 10px 0;">
                        <img src="{{ asset("assets/images/motor-2.png") }}" alt="" style="width: 70%;">
                    </div>
                    <div class="product-image-bg" style="background-color: #fff !important;">
                        <img src="{{ asset("assets/images/motor-3.png") }}" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('js') 

@endsection()
