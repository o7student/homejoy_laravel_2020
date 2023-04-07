<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('temp/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('temp/assets/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Home Joy | Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" />
    <!-- CSS Files -->
    <link href="{{asset('temp/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('temp/assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('temp/assets/css/demo.css')}}" rel="stylesheet" />
	<!-- TABLE STYLES-->
    <link href="{{asset('temp/assets/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{asset('temp/assets/img/sidebar-5.jpg')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Home Joy
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin')}}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-notes"></i>
                                    <span class="no-icon">Category</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('admin/addcategory')}}">Add </a>
                                    <a class="dropdown-item" href="{{route('admin/viewcategory')}}">View</a>
                                </ul>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-notes"></i>
                                    <span class="no-icon">Service</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('admin/addservice')}}">Add </a>
                                    <a class="dropdown-item" href="{{route('admin/viewservice')}}">View</a>
                                </ul>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-notes"></i>
                                    <span class="no-icon">Vendor</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('admin/addvendor')}}">Add </a>
                                    <a class="dropdown-item" href="{{route('admin/viewvendor')}}">View</a>
                                    <a class="dropdown-item" href="{{route('admin/registervendor')}}">Register Request</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                        <a class="nav-link" href="{{route('admin/viewuser')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-notes"></i>
                                    <span class="no-icon">Bookings</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('admin/allbooking')}}">All </a>
                                    <a class="dropdown-item" href="{{route('admin/pendingbooking')}}">Pending</a>
                                    <a class="dropdown-item" href="{{route('admin/acceptedbooking')}}">Accepted</a>
                                    <a class="dropdown-item" href="{{route('admin/completedbooking')}}">Completed</a>
                                </ul>
                            </li>
                    <li>
                        <a class="nav-link" href="{{route('admin/cancelledbooking')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Cancelled Bookings</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('admin/viewfeedback')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Feedback</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('admin/viewcontact')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Contact</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a class="nav-link" href="./typography.html">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./icons.html">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li> -->
                    <!-- <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin/logout')}}">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
@yield('content')
</div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{asset('temp/assets/img/sidebar-1.jpg')}}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{asset('temp/assets/img/sidebar-3.jpg')}}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg')}}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{asset('temp/assets/img/sidebar-5.jpg')}}" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="{{asset('temp/assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('temp/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('temp/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('temp/assets/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('temp/assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('temp/assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{asset('temp/assets/js/light-bootstrap-dashboard.js')}}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('temp/assets/js/demo.js')}}"></script>
<script type="text/javascript">
    // $(document).ready(function() {
    //     // Javascript method's body can be found in assets/js/demos.js
    //     demo.initDashboardPageCharts();

    //     demo.showNotification();

    // });
</script>
<!-- DATA TABLE SCRIPTS -->
    <script src="{{asset('temp/assets/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('temp/assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
</html>
