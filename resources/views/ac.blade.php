@extends('layout')
@section('title', "AC-CONTROLLER")


@section('css')

@endsection()


@section('body') 
    <div class="I-dashboard" style="background-image: url('{{ asset("assets/images/Untitled-1ssgxgx 1.png") }}');">
        <div class="wrapper">
            <div class="dashboard-wrapper">
                <div class="dashboard-content">
                    <h1 class="page-title">AC-CONTROLLER</h1>
                    <p class="page-description">A simple and cost effective solution to build EV charging station</p>
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
                        <img src="{{ asset("assets/images/AC-KU4588_8 1.png") }}" alt="" style="width: 80%;">
                    </div>
                </div>
                <div class="product-layout content-layout w-60">
                    <div> 
                        <h4 class="product-title">AC-CONTROLLER</h4>
                        <p class="product-name">OVERVIEW</p>
                        <p class="product-description">ATMS0307C is a controller for single-phase AC charging. The module is compatible with IEC 61851 standard</p> 
                    </div>
                    <a href="/ATMS0307C_Datasheet.pdf" class="product-download"><span>Data sheet</span> <img src="{{ asset("assets/images/download.png") }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="I-product" style="background-color: #E6F2FF;">
        <div class="wrapper">
            <div class="product-flex">
                <div class="product-layout content-layout w-60"> 
                    <h4 class="product-title">AC-CONTROLLER</h4>
                    <p class="product-name">FEATURES</p>
                    <p class="product-description">
                        DIN rail compatible
                    </p>
                    <p class="product-description">
                        Included LED interface
                    </p>
                    <p class="product-description">
                        Configurable protection threshold 
                    </p>
                    <p class="product-description">
                        Extending contact life by zero-crossing method
                    </p>
                    <p class="product-description">
                        Under-voltage/Over-voltage protection 
                    </p>
                    <p class="product-description">
                        Under/Over input frequency 
                    </p>
                    <p class="product-description">
                        Overload protection 
                    </p>
                    <p class="product-description">
                        Residual current protection 
                    </p>
                    <p class="product-description">
                        PE lost protection 
                    </p>
                    <p class="product-description">
                        Wielding relay protection
                    </p>
                </div>
                <div class="product-layout w-40">
                    <div class="product-image-bg" style="background-image: url('{{ asset("assets/images/bg-2.svg") }}'); height: 670px;">
                        <img src="{{ asset("assets/images/AC-KU4588_8 3.png") }}" style="width: 70%;" alt="">
                    </div> 
                </div>
            </div>
        </div>
    </div> 
@endsection()

@section('js') 

@endsection()
