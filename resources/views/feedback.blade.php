@extends('layout1')
@section('content')
<section class="about py-lg-5 py-md-4 py-md-3 py-2" id="about">
@if(session()->get('success'))
	<div class="alert alert-success">{{session()->get('success')}}</div>
	@endif
	@if(session()->get('error'))
	<div class="alert alert-danger">{{session()->get('error')}}</div>
	@endif
    <div class="about py-lg-5 py-md-4 py-md-3 py-2">
        <div class="container">
            <h3 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">We Value Your Feedback</h3>
            <div class="row">
                <div class="col-md-12 com-sm-12 w3three_al1">
                    <form action="{{route('feedback')}}" method="post" class="f-color">
                        @csrf
						<div class="form-group">
							<label for="contactusername">Name</label>
                            <input type="text" class="form-control" id="contactusername" required value="{{Auth::user()->name}}" readonly>
						</div>
						<div class="form-group">
							<label for="contactemail">Email</label>
							<input type="email" class="form-control" id="contactemail" required readonly value="{{Auth::user()->email}}">
						</div>
						<div class="form-group">
								<label for="contactusername">Subject</label>
								<input type="text" class="form-control" id="contactusername" required name="subject">
							</div>
							<div class="form-group">
								<label for="contactcomment">Your Message</label>
								<textarea class="form-control" rows="5" id="contactcomment" required name="message"></textarea>
							</div>
						<button type="submit" class="btn btn-info btn-block">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection