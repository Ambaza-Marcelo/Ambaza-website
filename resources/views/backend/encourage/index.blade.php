@extends('layouts.app')
@section('title','encourage list')
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="box-header">
                        <h3 class="box-title">All </h3>
                        <div class="">
                            <a class="btn btn-info btn-sm" href="{{route('admin-encourage-create') }}">Add New</a>
                        </div>
                    </div>
                    <div class="">
                        <table id="" class="table table-bordered table-striped list_view_table">
                            <thead>
                            <tr>
                                <th width="10%">#</th>
                                <th width="20%">image</th>
                                <th width="15%">Name</th>
                                <th width="15%">Service</th>
                                <th width="10%">Description</th>
                                <th width="10%">Action</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                           
                                @foreach($encourages as $encourage)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <img class="img-responsive" style="max-height: 100px;" src="{{ asset('storage/encourages')}}/{{ $encourage->image }}" alt="">
                                    </td>
                                    <td>{{ $encourage->name }}</td>
                                    <td>{{ $encourage->service->title }}</td>
                                    <td>{{ $encourage->description }}</td>
                                    <td>
                                        <div style="display: flex;">
                                        <div class="btn-group">
                                            <a title="Edit" href="{{route('admin-encourage-edit',$encourage->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>

                                            </a>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="btn-group">
                                            <form class="myAction" method="POST" action="{{route('admin-encourage-destroy',$encourage->id)}}" onclick="return confirm('voulez-vous vraiment supprimer ?')">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                    <i class="fa fa-fw fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    
                                </tr>
                            @endforeach
                            

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection

