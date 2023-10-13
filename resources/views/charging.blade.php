@extends('layout')
@section('title', "Home")


@section('css')

@endsection()


@section('body') 
    <div class="I-dashboard" style="background-image: url('{{ asset("assets/images/Untitled-1ssgxgx 1.png") }}');">
        <div class="wrapper">
            <div class="dashboard-wrapper">
                <div class="dashboard-content"> 
                    <h1 class="page-title">CHARGING SOLUTIONS</h1>
                    <p class="page-description">ATM3009 is a compact solution for AC portable charger 3.5kW</p>
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
                        <img src="{{ asset("assets/images/atm3009.png") }}" alt="">
                    </div>
                </div>
                <div class="product-layout content-layout w-60">
                    <h4 class="product-title">ATM 3009</h4>
                    <p class="product-name">OVERVIEW</p>
                    <p class="product-description">ATM3009 is a complete solution for a EV charging mode 2 (IEC 61851-1).</p>
                    <p class="product-description">ATM3009 provide full support for the protection mechanisms specified in IEC 62752:2016</p>
                </div>
            </div>
        </div>
    </div>
    <div class="I-product" style="background-color: #E6F2FF;">
        <div class="wrapper"> 
            <div class="product-flex">
                <div class="product-layout content-layout w-60"> 
                    <h4 class="product-title">ATM 3009</h4>
                    <p class="product-name">FEATURES</p>
                    <p class="product-description">
                        Protocol IEC 61851-1 
                    </p>
                    <p class="product-description">
                        <span class="item-title">Protection :</span>
                        <span class="item-detail">over/under voltage, AC/DC residual current (combine with ATM2802), high/low frequency, over curent, short circuit, PE fault, over temperature, relay welding. </span>
                    </p>
                    <p class="product-description">
                        Power-on Self-test
                    </p>
                    <p class="product-description">
                        <span class="item-title">Configurable max current :</span>
                        <span class="item-detail">6A/8A/10A/16A </span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Dimentions (W x L x H ) :</span>
                        <span class="item-detail">13.20 x 22.30 x 3.80 (mm)</span>
                    </p> 
                </div>
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}');">
                        <img src="{{ asset("assets/images/3009-2.png") }}" alt="">
                    </div>
                    <div class="product-image-bg" >
                        <img src="{{ asset("assets/images/3009-3.png") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('js') 

@endsection()
