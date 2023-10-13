@extends('layout')
@section('title', "Home")


@section('css')

@endsection()


@section('body') 
    <div class="I-about">
            <div class="about-top"  style="background-image: url('{{ asset("assets/images/about-banner.svg") }}');">
                <div class="about-title">Contact</div>
            </div>
            <div class="wrapper"> 
                <div class="info-wrapper">
                    <div class="info-item">
                        <div class="info-block">
                            <div>
                                <div class="info-image">
                                    <img src="{{ asset("assets/images/bx_mail-send.svg") }}" alt="">
                                </div>

                                <div class="info-detail">
                                    Frya@atms.com.tw
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="info-item">
                        <div class="info-block">
                            <div>
                                <div class="info-image">
                                    <img src="{{ asset("assets/images/ep_map-location.svg") }}" alt="">
                                </div> 
                                <div class="info-detail">
                                    12 F., No. 957, Zhongzheng Rd.,Zhonghe Dist., NewTaipei City 235601, Taiwan (R.O.C.)
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <img src="{{ asset("assets/images/about-map.svg") }}" alt="">
        </div>
@endsection()

@section('js') 

@endsection()
