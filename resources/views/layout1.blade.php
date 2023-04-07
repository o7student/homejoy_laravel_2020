<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Home Joy </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Home Joy a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="{{asset('distt/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('distt/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('distt/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('distt/css/style_common.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('distt/css/style1.css')}}" />
<link href="{{asset('distt/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
<link href="{{asset('distt/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="{{asset('distt/css/flexslider.css')}}" type="text/css" media="all">
<link href="{{asset('distt/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<header>
	<!-- header -->
	<div class="header-w3l">
	
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="{{route('/')}}">Home Joy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('/')}}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About</a>
      </li>
	  <!-- <li class="nav-item">
        <a class="nav-link" href="">Services</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Service
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(count($category)>0)
          @foreach($category as $c)
          <a class="dropdown-item" href="{{route('service',$c->id)}}">{{$c->name}}</a>
          @endforeach
          @else
          <a class="dropdown-item" href="#">No Record Found.!</a>
          @endif
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('contact')}}">Contact</a>
      </li>

<!-- <li class="w3">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#myModal">Login</a>
                        </li> -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                          <a class="nav-link " href="{{route('feedback')}}">Feedback</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('mybooking')}}">My Booking</a>
                                    <a class="dropdown-item" href="{{route('myfeedback')}}">My Feedbacks</a>
                                    <a class="dropdown-item" href="{{route('update')}}">Update Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

    </ul>
 
</nav>

	<!-- //header -->

	<!-- banner -->
	<!-- banner-slider -->
	<div class="w3l_banner_info">
		<div class="slider1">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider1-img">
							<div class="slider_banner_info">
							
								
							</div>
						</div>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-slider -->
</div>
</header>
@yield('content')
<!-- Footer-->
<section class="footer">
<div class="container">
<h3>Home Joy</h3>
     <div class="wrapper">
<ul class="social-icons icon-circle icon-zoom list-unstyled list-inline"> 
<li> <a href="#"><i class="fab fa-facebook-f"></i></a></li> 
<li> <a href="#"><i class="fab fa-twitter"></i></a></li> 
<li> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
</div>
<div class="copyright">
			<p>© 2018 Home Joy. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
			
		</div>
	</div>
</section>
<!-- /Footer-->
    <!-- bootstrap-pop-up for login and register -->
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Home Joy
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="loginf_module">
                            <div class="module form-module">
                                <div class="toggle">
                                    <i class="fa fa-times fa-pencil"></i>
                                    <div class="tooltip">Register</div>
                                </div>
                                <div class="form">
                                    <h3>Login to your account</h3>
                                    <form action="#" method="post">
                                        <input type="text" name="Username" placeholder="Username" required="">
                                        <input type="password" name="Password" placeholder="Password" required="">
                                        <input type="submit" value="Login">
                                    </form>
                                    <div class="cta">
                                        <a href="#">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="form">
                                    <h3>Create a new account</h3>
                                    <form action="#" method="post">
                                        <input type="text" name="Username" placeholder="Username" required="">
                                        <input type="password" name="Password" placeholder="Password" required="">
                                        <input type="email" name="Email" placeholder="Email address" required="">
                                        <input type="text" name="Phone" placeholder="Phone Number" required="">
                                        <input type="submit" value="Register">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //bootstrap-pop-up for login and register-->

<script  src="{{asset('distt/js/jquery.min.v3.js')}}"></script>
<script type="text/javascript" src="{{asset('distt/js/jquery-1.7.1.min.js')}}"></script> <!-- Team -->
<script  src="{{asset('distt/js/bootstrap.min.js')}}"></script>
<script  src="{{asset('distt/js/move-top.js')}}"></script>
<script  src="{{asset('distt/js/easing.js')}}"></script>
<script  src="{{asset('distt/js/SmoothScroll.min.js')}}"></script>	
<script src="{{asset('distt/js/easy-responsive-tabs.js')}}"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
	<!--team-->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:4,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="{{asset('distt/js/jquery.flexisel.js')}}"></script>
					
<!--team-->
   <!-- sign in and signup pop up toggle script -->
    <script>
        $('.toggle').click(function () {
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms  
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
    <!-- sign in and signup pop up toggle script -->
	
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script type="text/javascript">
	$(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->

<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
     <script src="{{asset('distt/js/jquery-1.7.2.js')}}"></script>
    <script src="{{asset('distt/js/jquery.quicksand.js')}}"></script>
    <script src="{{asset('distt/js/script.js')}}"></script>
    <script src="{{asset('distt/js/jquery.prettyPhoto.js')}}"></script>
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>
</html>