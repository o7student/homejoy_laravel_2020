@extends('admin.layout')
@section('content')
<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            @if(session()->get('success'))
                            <div class="alert alert-success">{{session()->get('success')}}</div>
                            @endif
                            @if(session()->get('error'))
                            <div class="alert alert-danger">{{session()->get('error')}}</div>
                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Category</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('admin/editcategory',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" placeholder="Name" required name="name" value="{{$data->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" placeholder="Description" required name="description">{{$data->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Picture</label>
                                                    <input type="file" class="form-control" name="pic">
                                                    <img src="{{URL::asset('storage/images/'.$data->pic)}}" style="height:100px;" class="img img-fluid"/>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <select name="status" class="form-control">
                                                        <option selected>{{$data->status}}</option>
                                                        <option>ACTIVE</option>
                                                        <option>DISABLE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection