@extends('layout')
@section('title', "Home")


@section('css')

@endsection()


@section('body') 
    <div class="I-carousel">
            <div class=" owl-carousel"> 
                <div class="item">
                    <img src="{{ asset("assets/images/banner-top.png") }}" alt=""> 
                </div>
                <div class="item">
                    <img src="{{ asset("assets/images/banner-top-2.png") }}" alt=""> 
                </div> 
            </div>
        </div>
         <div class="I-product">
            <div class="wrapper">
                <div class="product-flex">
                    <div class="product-layout w-40">
                        <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg.svg") }}');">
                            <img src="{{ asset("assets/images/item-1.svg") }}" alt="">
                        </div>
                    </div>
                    <div class="product-layout content-layout w-60">
                        <div>
                            <h4 class="product-title">AUTOMOTIVE SENSOR</h4>
                            <p class="product-description">Solution to control and monitor AC loads</p>
                            <p class="product-description">Residual Current Sensor</p>
                        </div>
                        <a href="/automotive-sensor" class="product-more">More</a>
                    </div>
                </div>
            </div>
         </div>
         <div class="I-product" style="background-color: #E6F2FF;">
            <div class="wrapper">
                <div class="product-flex">
                    <div class="product-layout content-layout w-60"> 
                        <div>
                            <h4 class="product-title">CHARGING SOLUTION</h4>
                        <p class="product-description">ATM3009 is a compact solution for AC portable charger 3.5kW</p>
                        </div>
                        <a href="/charging-solution" class="product-more">More</a>
                    </div>
                    <div class="product-layout w-40">
                        <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}');">
                            <img src="{{ asset("assets/images/item-2.svg") }}" alt="">
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
                            <img src="{{ asset("assets/images/item-3.svg") }}" alt="">
                        </div>
                    </div> 
                    <div class="product-layout content-layout w-60">
                        <div>
                            <h4 class="product-title">MOTOR CONTROLLERS</h4>
                            <p class="product-description">ATMS’s motor controllers range could vary from 3000W – 10000W</p>
                        </div>  
                        <a href="/motor-controllers" class="product-more">More</a>
                    </div>
                </div>
            </div>
         </div>
         <div class="I-product" style="background-color: #E6F2FF;">
            <div class="wrapper">
                <div class="product-flex">
                    <div class="product-layout content-layout w-60"> 
                        <div>
                            <h4 class="product-title">BATTERY MANAGEMENT SYSTEM</h4>
                            <p class="product-description">
                                Cell Technology : Lithium ion NMC, NCA
                            </p>
                            <p class="product-description">
                                Voltage : 50.4V
                                
                            </p>
                            <p class="product-description">
                                Embedded capacity :
                                25.6Ah
                            </p>
                            <p class="product-description">
                                Useable Energy :
                                1144Wh
                            </p>
                        </div>
                        <a href="/battery-management" class="product-more">More</a>
                    </div>
                    <div class="product-layout w-40">
                        <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}');">
                            <img src="{{ asset("assets/images/item-4.svg") }}" alt="" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
         </div>
@endsection()

@section('js') 

@endsection()
