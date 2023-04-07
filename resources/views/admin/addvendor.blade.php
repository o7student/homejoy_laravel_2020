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
                                    <h4 class="card-title">Add Vendor</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('admin/addvendor')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" placeholder="Name" required name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" placeholder="Email" required name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Password" required name="password">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="number" class="form-control" placeholder="Phone" required name="phone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control" placeholder="Address" required name="address"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Picture</label>
                                                    <input type="file" class="form-control" placeholder="Name" required name="pic">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Document Type</label>
                                                    <select class="form-control" required name="document_type">
                                                        <option>Adhar Card</option>
                                                        <option>Passport</option>
                                                        <option>Driving Licence</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Document Number</label>
                                                    <input type="text" class="form-control" placeholder="Document Number" required name="document_number">
                                                </div>
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