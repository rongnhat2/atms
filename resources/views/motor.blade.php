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
                    <h4 class="product-title">MOTOR CONTROLLERS</h4>
                    <p class="product-name">OVERVIEW</p>
                    <p class="product-description">ATMS’s motor controllers range could vary from 3000W – 10000W</p>
                </div>
            </div>
        </div>
    </div>
    <div class="I-product" style="background-color: #E6F2FF;">
        <div class="wrapper"> 
            <div class="product-flex">
                <div class="product-layout content-layout w-60"> 
                    <h4 class="product-title">MOTOR CONTROLLERS</h4>
                    <p class="product-name">FEATURES</p>
                    <p class="product-description">
                        Protocol IEC 61851-1 
                    </p>
                    <p class="product-description">
                        <span class="item-title">Power :</span>
                        <span class="item-detail">3000W - 10000W</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Voltage :</span>
                        <span class="item-detail">42-58VDC</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Motor :</span>
                        <span class="item-detail">PMSM</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Chipset :</span>
                        <span class="item-detail">Infineon XMC1404</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Algorithm :</span>
                        <span class="item-detail">Encoder Sin/Cos, Hall, Temperature feedback</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">CAN Communication :</span>
                        <span class="item-detail">CAN 2.0A</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Protection :</span>
                        <span class="item-detail">Short circuit, Overtemperature.</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Working Temperature :</span>
                        <span class="item-detail">-20OC - 80OC</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Water Resistant :</span>
                        <span class="item-detail">IP67</span>
                    </p>
                </div>
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}');">
                        <img src="{{ asset("assets/images/motor-2.png") }}" alt="">
                    </div>
                    <div class="product-image-bg" >
                        <img src="{{ asset("assets/images/motor-3.png") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('js') 

@endsection()
