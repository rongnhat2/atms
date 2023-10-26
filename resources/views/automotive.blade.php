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
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg.svg") }}'); height: 480px">
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
                    <a href="/ATM1301_Datasheet.pdf" class="product-download"><span>Data sheet</span> <img src="{{ asset("assets/images/download.png") }}" alt=""></a>
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
                        Topology :
                        4 independent loads or 3 phase
                    </p>
                    <p class="product-description">
                        Accuracy :
                        1% for voltage, current, power, 2% for energy
                    </p>
                    <p class="product-description">
                        Max current :
                        40A
                    </p>
                    <p class="product-description">
                        Operating voltage :
                        2.7V-3.6V
                    </p>
                    <p class="product-description">
                        Power consumption :
                        25mA
                    </p>
                    <p class="product-description">
                        Baudrate :
                        19200
                    </p>
                    <p class="product-description">
                        Protocol :
                        AT commands Zero-cross detection
                    </p>
                    <p class="product-description">
                        Relay types :
                        latching, non-latching AC frequency measurement 
                    </p>
                    <p class="product-description">
                        Protection :
                        overload, overvoltage, undervoltage, lost load, short load 
                    </p>
                    <p class="product-description">
                        Dimentions (W x L x H ):
                        13.20 x 22.30 x 3.80 (mm)
                    </p>
                </div>
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}'); margin: 0 0 48px 0;">
                        <img src="{{ asset("assets/images/SAC-3 1.png") }}" style="width: 90%;" alt="">
                    </div>
                    <div class="product-image-bg" >
                        <img src="{{ asset("assets/images/charg2802 2.png") }}" style="width: 90%;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="I-product">
        <div class="wrapper">
            <div class="product-flex">
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg.svg") }}'); height: 500px;">
                        <img src="{{ asset("assets/images/atm2802.png") }}" alt="">
                    </div>
                </div>
                <div class="product-layout content-layout w-60">
                    <div>
                        <h4 class="product-title">ATM 2802</h4>
                        <p class="product-name">OVERVIEW</p>
                        <p class="product-description">ATM2802 is a high-sensitivity AC and DC leakage current sensor.</p>
                    </div>  
                    <a href="/ATM2802-H_Datasheet.pdf" class="product-download"><span>Data sheet</span> <img src="{{ asset("assets/images/download.png") }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="I-product" style="background-color: #E6F2FF;">
        <div class="wrapper">
            <div class="product-flex"> 
                <div class="product-layout content-layout w-60"> 
                    <div>
                        
                    <h4 class="product-title">ATM 2802</h4>
                    <p class="product-name">FEATURES</p>
                    <p class="product-description">
                        Fluxgate-based current sensor
                    </p>
                    <p class="product-description">
                        Operating voltage :
                        5V
                    </p>
                    <p class="product-description">
                        Output voltage :
                        3.3V
                    </p>
                    <p class="product-description">
                        Detect both AC and DC current
                    </p>
                    <p class="product-description">
                        Self-test mode
                    </p>
                    <p class="product-description">
                        Compliant :
                        RoHS, UL 2231-2, IEC62752:2016
                    </p>
                    <p class="product-description">
                        Dimentions (W x L x H ): 
                        15.00 x 24.80 x 25.80 (mm)
                    </p> 
                    </div>
                </div>
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}'); margin: 0 0 10px 0;">
                        <img src="{{ asset("assets/images/SAC-3 1.png") }}" alt="" style="width: 90%;">
                    </div>
                    <div class="product-image-bg" >
                        <img src="{{ asset("assets/images/img-safe 2.png") }}" alt="" style="width: 90%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('js') 

@endsection()
