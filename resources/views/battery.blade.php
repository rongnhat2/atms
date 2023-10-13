@extends('layout')
@section('title', "Home")


@section('css')

@endsection()


@section('body') 
    <div class="I-dashboard" style="background-image: url('{{ asset("assets/images/battery-bg.png") }}');">
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
                        <img src="{{ asset("assets/images/battery-1.png") }}" alt="">
                    </div>
                </div>
                <div class="product-layout content-layout w-60">
                    <h4 class="product-title">BATTERY MANAGEMENT SYSTEM</h4>
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
                    <h4 class="product-title">BATTERY MANAGEMENT SYSTEM</h4>
                    <p class="product-name">FEATURES</p>
                    <p class="product-description">
                        Cell TechnologyLithium ion NMC, NCA
                    </p>
                    <p class="product-description">
                        <span class="item-title">Voltage :</span>
                        <span class="item-detail">50.4V </span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Embedded capacity :</span>
                        <span class="item-detail">25.6Ah</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Useable Energy :</span>
                        <span class="item-detail">1144Wh</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Working voltage :</span>
                        <span class="item-detail">42-57.75V</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">CAN Communication :</span>
                        <span class="item-detail">ISO11898-2:2016 Protection: Short circuit, Overtemperature.</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Working Temperature :</span>
                        <span class="item-detail">Discharge -10O/60OC / Charge OO / 45OC</span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Relay Standard :</span>
                        <span class="item-detail">UN 38.3, IEC 62133, UL 1642 </span>
                    </p>
                    <p class="product-description">
                        <span class="item-title">Water Resistant :</span>
                        <span class="item-detail">IP67</span>
                    </p> 
                </div>
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}');">
                        <img src="{{ asset("assets/images/battery-1.png") }}" alt="">
                    </div> 
                </div>
            </div>
        </div>
    </div> 
@endsection()

@section('js') 

@endsection()
