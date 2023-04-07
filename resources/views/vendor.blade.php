@extends('layout1')
@section('content')
<section class="about py-lg-5 py-md-4 py-md-3 py-2" id="about">
    <div class="about py-lg-5 py-md-4 py-md-3 py-2">
        <div class="container">
            <h3 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Choose A Vendor</h3>
            <div class="row">
                <!-- <div class="col-md-12 com-sm-12 w3three_al1"> -->
                    <!-- <h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Take A Look About Our Company</h4> -->
                    <!-- <p class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <a href="#">Read More</a> -->
                    @if(count($data)>0)
                    @foreach($data as $d)
                    <div class="col-md-4 col-sm-12 w3_ban1">
                        <div class="card" >
                            <img class="card-img-top" src="{{URL::asset('storage/images/'.$d->vendor->pic)}}" alt="{{$d->vendor->name}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$d->vendor->name}}</h5>
                                <p class="card-text">{{$d->description}}</p>
                                <p class="card-text">&#8377;{{$d->charges}}</p>
                                <a href="{{route('dobooking',$d->id)}}" class="btn btn-primary">Book</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">No Record Found..!!</h4>
                    @endif
                <!-- </div> -->
            </div>
        </div>
    </div>
</section> 
@endsection