
@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<style type="text/css">
    .row{
        margin-top: 5%;
    }
</style>

    <section class="container">
        <div class="row">
            <div class="col-md-6 col-sm-14">
                <div class="">
                    <span class=""></i></span>

                    <div class="jumbotron">
                        <img src="{{asset('images/clipart5.png')}}" alt="subscribers">
                        <span>@lang('messages.subscriber')</span>
                        <span">{{$subscribers}}<small></small></span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-14">
                <div class="">
                    <div class="jumbotron">
                        <img src="{{asset('images/clipart3.png')}}" alt="photos">
                        <span class="i">@lang('messages.gallery')</span>
                        <span class="">{{$photos}}</span>
                    </div>
                </div>
                <!-- /.info-box -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-14">
                <div class="">
                    <span class=""></i></span>

                    <div class="jumbotron">
                        <img src="{{asset('images/clipart2.png')}}" alt="subscribers">
                        <span>@lang('messages.developped_by') : Ambaza-Marcellin</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-14">
                <div class="">
                    <div class="jumbotron">
                        <img src="{{asset('images/clipart1.png')}}" alt="photos">
                        <span class="i"></span>
                        <span class=""></span>
                    </div>
                </div>
                <!-- /.info-box -->
            </div>
        </div>
    </section>
@endsection
