@extends('layout1')
@section('content')
<section class="contact  py-lg-5 py-md-4 py-md-3 py-2" id="contact">
	@if(session()->get('success'))
	<div class="alert alert-success">{{session()->get('success')}}</div>
	@endif
	@if(session()->get('error'))
	<div class="alert alert-danger">{{session()->get('error')}}</div>
	@endif
<h3 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Contact US</h3>
	<!-- contact -->
	<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
					    allowfullscreen></iframe>
	<section class="wthree-row py-5 w3-contact" id="contact">
		<div class="container py-md-5">
			<h4 class="w3ls-title text-center text-uppercase pb-md-5 pb-4">contact Form</h3>
			<div class="row contact-form ">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form action="{{route('contact')}}" method="post" class="f-color">
							@csrf
							<div class="form-group">
								<label for="contactusername">Name</label>
								<input type="text" class="form-control" id="contactusername" required name="name">
							</div>
							<div class="form-group">
								<label for="contactemail">Email</label>
								<input type="email" class="form-control" id="contactemail" required name="email">
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
					<!--  //contact form grid ends here -->
				</div>
				<!-- contact details -->
				<!-- contact map grid -->
				<div class="col-lg-6  mt-lg-0 mt-5 map contact-right">
					
					<div class="address mt-3">
						<h5 class="pb-3 text-capitalize">Contact info</h5>
						<address>
							<p class="c-txt">90 Street, City, State 34789.</p>
							<p>
								+10 234 5678</p>
							<p>
								<p>
									<a href="mailto:info@example.com">mail@abode.com</a>
								</p>
						</address>
					</div>
				</div>
				<!--//contact map grid ends here-->
			</div>
			<!-- //contact details container -->
		</div>
	</section>
	</section>
	<!-- //contact -->
@endsection