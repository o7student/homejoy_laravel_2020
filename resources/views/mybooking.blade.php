@extends('layout1')
@section('content')
<style>
    .table > thead > tr > th{
        color:white;
        background-color: #000;
    }
    .table > tbody > tr > td{
        color:#000;
    }
</style>
<section class="about py-lg-5 py-md-4 py-md-3 py-2" id="about">
    <div class="about py-lg-5 py-md-4 py-md-3 py-2">
        <div class="container">
            @if(session()->get('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
            @endif
            @if(session()->get('error'))
            <div class="alert alert-danger">{{session()->get('error')}}</div>
            @endif
            <h3 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">My Bookings</h3>
            <div class="row">
                <div class="col-md-12 com-sm-12 w3three_al1">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>#</th>
                            <th>Service</th>
                            <th>Service Charges</th>
                            <th>Vendor Name</th>
                            <th>Booking Name</th>
                            <th>Booking Address</th>
                            <th>Booking Date</th>
                            <th>Booking Time</th>
                            <th>Booking Status</th>
                        </thead>
                        <tbody>
                            @if(count($data)>0)
                            @foreach($data as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->vservice->service->name}}</td>
                                <td>&#8377;{{$d->vservice->charges}}</td>
                                <td>{{$d->vservice->vendor->name}}</td>
                                <td>{{$d->booking_name}}</td>
                                <td>{{$d->booking_address}}</td>
                                <td>{{$d->booking_date}}</td>
                                <td>{{$d->booking_time}}</td>
                                <td>{{$d->status}}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="9">No Booking Yet..!</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection