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
                                    <h4 class="card-title">View Feedback</h4>
                                    <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped" id="dataTables-example">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $d)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$d->user->name}}</td>
                                                <td>{{$d->user->email}}</td>
                                                <td>{{$d->user->address}}</td>
                                                <td>{{$d->user->phone}}</td>
                                                <td>{{$d->subject}}</td>
                                                <td>{{$d->message}}</td>
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