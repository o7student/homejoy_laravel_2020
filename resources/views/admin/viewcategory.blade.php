@extends('admin.layout')
@section('content')
<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        @if(session()->get('success'))
                            <div class="alert alert-success">{{session()->get('success')}}</div>
                            @endif
                            @if(session()->get('error'))
                            <div class="alert alert-danger">{{session()->get('error')}}</div>
                            @endif
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">View Category</h4>
                                    <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped" id="dataTables-example">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Picture</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $d)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$d->name}}</td>
                                                <td>{{$d->description}}</td>
                                                <td>{{$d->status}}</td>
                                                <td><img src="{{URL::asset('storage/images/'.$d->pic)}}" class="img img-fluid" style="height:100px;"/></td>
                                                <td><a href="{{route('admin/editcategory',$d->id)}}" class="btn btn-success">Update</a><a href="{{route('admin/deletecategory',$d->id)}}" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            @endforeach                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection