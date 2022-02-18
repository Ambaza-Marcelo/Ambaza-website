@extends('layouts.app')
@section('title','update encourage')
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                Update encourage
                <div class="box box-info">
                    <form novalidate id="entryForm" action="{{route('admin-encourage-update',$encourage->id) }}" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="name">Name<span class="text-danger"></span></label>
                                        <input autofocus type="text" class="form-control" name="name" value="{{$encourage->name}}" required minlength="2" maxlength="255">
                                        <span class="fa fa-info form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="description">Description<span class="text-danger"></span></label>
                                                <textarea class="form-control" name="description">{{$encourage->description}}</textarea>
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
                            <button type="submit" class="btn btn-info">Update</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
     </div>
 </div>
@endsection