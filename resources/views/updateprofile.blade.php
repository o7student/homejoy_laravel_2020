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
            <h3 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Update Profile</h3>
            <div class="row">
                <div class="col-md-12 com-sm-12 w3three_al1">
                    <form action="{{route('update',Auth::user()->id)}}" method="post" class="f-color">
                        @csrf
                        @method('PATCH')
						<div class="form-group">
							<label for="contactusername">Name</label>
                            <input type="text" class="form-control" id="contactusername" required value="{{Auth::user()->name}}" readonly>
						</div>
						<div class="form-group">
							<label for="contactemail">Email</label>
							<input type="email" class="form-control" id="contactemail" required value="{{Auth::user()->email}}" name="email">
                        </div>
                        <div class="form-group">
							<label for="contactemail">Password</label>
                            <input type="password" class="form-control" id="contactemail"  name="password">
                            <p>If you dont want to change password then leave empty.</p>
                        </div>
                        <div class="form-group">
							<label for="contactemail">Phone</label>
							<input type="number" class="form-control" id="contactemail" required value="{{Auth::user()->phone}}" name="phone">
						</div>
						
							<div class="form-group">
								<label for="contactcomment">Address</label>
								<textarea class="form-control" rows="5" id="contactcomment" required name="address">{{Auth::user()->address}}</textarea>
							</div>
						<button type="submit" class="btn btn-info btn-block">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection