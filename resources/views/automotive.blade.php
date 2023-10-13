@extends('layout')
@section('title', "Home")


@section('css')

@endsection()


@section('body') 
    <div class="I-dashboard" style="background-image: url('{{ asset("assets/images/banner-top.png") }}');">
        <div class="wrapper">
            <div class="dashboard-wrapper">
                <div class="dashboard-content">
                    <h1 class="page-title">AUTOMOTIVE SENSOR</h1>
                    <p class="page-description">Solution to control and monitor AC loads Residual Current Sensor</p>
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
                        <img src="{{ asset("assets/images/atm1301.svg") }}" alt="">
                    </div>
                </div>
                <div class="product-layout content-layout w-60">
                    <h4 class="product-title">ATM 1301</h4>
                    <p class="product-name">OVERVIEW</p>
                    <p class="product-description">ATM1301 is a compact solution to control and monitor AC loads</p>
                    <p class="product-description">ATM1301 can monitor voltage, current, power, and delivered energy of the loads</p>
                    <p class="product-description">Increase the longevity of relays by using the zero-cross method</p>
                    <p class="product-description">Supports various types of protection</p>
                </div>
            </div>
        </div>
    </div>
    <div class="I-product" style="background-color: #E6F2FF;">
        <div class="wrapper">
            <div class="product-flex">
                <div class="product-layout content-layout w-60"> 
                    <h4 class="product-title">ATM 1301</h4>
                    <p class="product-name">FEATURES</p>
                    <p class="product-description">
                        <span class="item-title">Topology :</span>
                        <span class="item-detail">4 independent loads or 3 phase</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Accuracy :</span>
                        <span class="item-detail">1% for voltage, current, power, 2% for energy</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Max current :</span>
                        <span class="item-detail">40A</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Operating voltage :</span>
                        <span class="item-detail">2.7V-3.6V</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Power consumption :</span>
                        <span class="item-detail">25mA</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Baudrate :</span>
                        <span class="item-detail">19200</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Protocol :</span>
                        <span class="item-detail">AT commands Zero-cross detection</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Relay types :</span>
                        <span class="item-detail">latching, non-latching AC frequency measurement </span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Protection :</span>
                        <span class="item-detail">overload, overvoltage, undervoltage, lost load, short load </span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Dimentions (W x L x H ):</span>
                        <span class="item-detail">13.20 x 22.30 x 3.80 (mm)</span>
                    </p>
                </div>
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}');">
                        <img src="{{ asset("assets/images/SAC-3 1.png") }}" alt="">
                    </div>
                    <div class="product-image-bg" >
                        <img src="{{ asset("assets/images/charg2802 2.png") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="I-product">
        <div class="wrapper">
            <div class="product-flex">
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg.svg") }}');">
                        <img src="{{ asset("assets/images/atm2802.png") }}" alt="">
                    </div>
                </div>
                <div class="product-layout content-layout w-60">
                    <h4 class="product-title">ATM 2802</h4>
                    <p class="product-name">OVERVIEW</p>
                    <p class="product-description">ATM2802 is a high-sensitivity AC and DC leakage current sensor.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="I-product" style="background-color: #E6F2FF;">
        <div class="wrapper">
            <div class="product-flex"> 
                <div class="product-layout content-layout w-60"> 
                    <h4 class="product-title">ATM 2802</h4>
                    <p class="product-name">FEATURES</p>
                    <p class="product-description">
                        Fluxgate-based current sensor
                    </p>
                    <p class="product-description">
                        <span class="item-title">Operating voltage :</span>
                        <span class="item-detail">5V</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Output voltage :</span>
                        <span class="item-detail">3.3V</span>
                    </p>
                    <p class="product-description">
                        Detect both AC and DC current
                    </p>
                    <p class="product-description">
                        Self-test mode
                    </p>
                    <p class="product-description">
                        <span class="item-title">Compliant :</span>
                        <span class="item-detail">RoHS, UL 2231-2, IEC62752:2016</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Dimentions (W x L x H ): </span>
                        <span class="item-detail">15.00 x 24.80 x 25.80 (mm)</span>
                    </p> 
                </div>
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}');">
                        <img src="{{ asset("assets/images/SAC-3 1.png") }}" alt="">
                    </div>
                    <div class="product-image-bg" >
                        <img src="{{ asset("assets/images/img-safe 2.png") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('js') 

@endsection()
