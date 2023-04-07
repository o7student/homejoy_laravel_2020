@extends('vendor.layout')
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
                                    <h4 class="card-title">View Vendor Service</h4>
                                    <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped" id="dataTables-example">
                                        <thead>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Service Name</th>
                                            <th>Description</th>
                                            <th>Charges</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $d)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$d->category->name}}</td>
                                                <td>{{$d->service->name}}</td>
                                                <td>{{$d->description}}</td>
                                                <td>&#8377;{{$d->charges}}</td>
                                                <td>{{$d->status}}</td>
                                                <td><a href="{{route('vendor/editvservice',$d->id)}}" class="btn btn-success">Update</a><a href="{{route('vendor/deletevservice',$d->id)}}" class="btn btn-danger">Delete</a></td>
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