@extends('vendor.layout')
@section('content')
<div class="container-fluid">
                    <div class="row">
                        
                            <div class="col-md-5 alert alert-danger m-2">
                                <h4>Total Category</h4>
                                <h1>{{$category}}</h1>
                            </div>
                            <div class="col-md-5 alert alert-warning m-2">
                                <h4>Total Services</h4>
                                <h1>{{$service}}</h1>
                            </div>
                            <div class="col-md-5 alert alert-success m-2">
                                <h4>Total Vendors</h4>
                                <h1>{{$vendor}}</h1>
                            </div>
                            <div class="col-md-5 alert alert-info m-2">
                                <h4>Total Users</h4>
                                <h1>{{$user}}</h1>
                            </div>
                        
                        
                    </div>
                </div>
@endsection