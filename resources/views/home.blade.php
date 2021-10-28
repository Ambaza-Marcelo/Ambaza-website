@extends('layouts.app')

@section('content')
<style>
    .badge-download {
        background-color: transparent !important;
        color: #464443 !important;
    }
    .list-group-item-text{
      font-size: 12px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default" style="border-top: 0px;">
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="col-sm-16">
                            <div class="panel panel-default" style="background-color: rgba(242,245,245,0.8);">
                                <div class="panel-body">
                                    <h3>@lang('Welcome to Ambaza website') </h3>
                                </div>
                            </div>
                            
                        </div>
                    @if(Auth::user()->role == 'admin')
                    <div class="row">

                        <div class="col-md-6 col-sm-14">
                            <div class="">
                                <div class="jumbotron">
                                    <a href="{{url('register/technician')}}">
                                    <img src="{{asset('cliparts/9000.jpg')}}" height="100" alt="photos">
                                    <span class="i">Techniciens</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
