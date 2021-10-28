@extends('layouts.app')
@section('title','create encourage')
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                Create encourage
                <div class="box box-info">
                    <form novalidate id="entryForm" action="{{route('admin-encourage-store') }}" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="name">Name<span class="text-danger"></span></label>
                                        <input autofocus type="text" class="form-control" name="name" placeholder="name" required minlength="2" maxlength="255">
                                        <span class="fa fa-info form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="service_id">Service<span class="text-danger"></span></label>
                                        
                                        <select id="service_id" class="form-control" name="service_id">
                                            <option selected="selected">Select service</option>
                                              @foreach($services as $service)
                                                <option value="{{$service->id}}">{{$service->title}}</option>
                                              @endforeach
                                        </select>
                                        <span class="form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('service_id') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="description">Description<span class="text-danger"></span></label>
                                        <textarea class="form-control" name="description">Description</textarea>
                                        <span class="fa fa-info form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="image">Image<br><span class="text-black"></span></label>
                                        <input  type="file" class="form-control" accept=".jpeg, .jpg, .png" name="image" placeholder="image">
                                        <span class="glyphicon glyphicon-open-file form-control-feedback" style="top:30px;"></span>
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    </div>
                                </div>
                            </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Save</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
     </div>
 </div>
@endsection