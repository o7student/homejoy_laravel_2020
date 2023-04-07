@extends('layout1')
@section('content')
<section class="about py-lg-5 py-md-4 py-md-3 py-2" id="about">
    <div class="about py-lg-5 py-md-4 py-md-3 py-2">
        <div class="container">
            <h3 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Book Service</h3>
            <div class="row">
                <div class="col-md-12 com-sm-12 w3three_al1">
                    <form action="{{route('booking')}}" method="post" class="f-color">
                        @csrf
						<div class="form-group">
							<label for="contactusername">Name</label>
                            <input type="text" class="form-control" id="contactusername" required name="booking_name" value="{{Auth::user()->name}}">
                            <input type="hidden" name="vservice_id" value="{{$data}}"/>
						</div>
						<div class="form-group">
							<label for="contactemail">Email</label>
							<input type="email" class="form-control" id="contactemail" required name="booking_email" value="{{Auth::user()->email}}">
						</div>
						<div class="form-group">
							<label for="contactcomment">Address</label>
							<textarea class="form-control" rows="5" id="contactcomment" required name="booking_address">{{Auth::user()->address}}</textarea>
                        </div>
                        <div class="form-group">
							<label for="contactemail">Phone</label>
							<input type="number" class="form-control" id="contactphone" required name="booking_contact" value="{{Auth::user()->phone}}">
                        </div>
                        <div class="form-group">
							<label for="contactdescription">Description</label>
							<textarea class="form-control" rows="5" id="contactdescription" required name="booking_description"></textarea>
                        </div>
                        <div class="form-group">
							<label for="contactemail">Booking Date</label>
							<input type="date" class="form-control" id="contactdate" required name="booking_date" min="<?php echo date('Y-m-d');?>">
                        </div>
                        <div class="form-group">
							<label for="contactemail">Booking Date</label>
							<select class="form-control" id="contacttime" required name="booking_time">
                                <option>10:00 AM</option>
                                <option>11:00 AM</option>
                                <option>12:00 NOON</option>
                                <option>1:00 PM</option>
                                <option>2:00 PM</option>
                                <option>3:00 PM</option>
                                <option>4:00 PM</option>
                                <option>5:00 PM</option>
                                <option>6:00 PM</option>
                            </select>
                        </div>
						<button type="submit" class="btn btn-info btn-block">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection