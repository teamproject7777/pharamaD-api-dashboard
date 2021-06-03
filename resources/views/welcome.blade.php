<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>PharamD</title>
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- Bootstrap Core CSS -->
    
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/icons/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/icons/font-awesome/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/icons/font-awesome/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/material.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/spinners.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/colors/blue.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/dashboard/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/plugins/morrisjs/morris.css') }}" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
   
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated slideInUp">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated slideInUp" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/dashboard/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/dashboard/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/dashboard/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/dashboard/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                            <div class="dropdown-menu animated slideInUp">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="../assets/dashboard/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/dashboard/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/dashboard/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Collapsible Group Item #1
                                                </a>
                                              </h5> </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Collapsible Group Item #2
                                                </a>
                                              </h5> </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Collapsible Group Item #3
                                                </a>
                                              </h5> </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/dashboard/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../assets/dashboard/images/users/profile.png" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Mohammed Ali</h4>
                                                <p class="text-muted">moh@gmail.com</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Orders</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i>  Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/dashboard/images/users/profile.png" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5>Mohammed Ali</h5>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                        <a href="pages-login.html" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!-- text-->
                            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <!-- text-->
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">PharmaD</li>
                        <li> 
                        <a class="has-arrow waves-effect waves-dark" href="" aria-expanded="false">
                          <span class="hide-menu">Home 
                          
                          </span></a>
                            
                        </li>
                        
                        <li> 
                        <a class=" waves-effect waves-dark" href="/order" aria-expanded="false">
                        <span class="hide-menu">Orders</span>
                        </a>  
                        </li>

                        <li> 
                            <a class=" waves-effect waves-dark" href="/giveaway" aria-expanded="false">
                            <span class="hide-menu">GiveAway</span>
                            </a>  
                        </li>

                        <li> 
                            <a class=" waves-effect waves-dark" href="/patient" aria-expanded="false">
                            <span class="hide-menu">Patient</span>
                            </a>  
                        </li>
                        
                        <li> 
                            <a class=" waves-effect waves-dark" href="/periodical" aria-expanded="false">
                            <span class="hide-menu">Periodical Medicine</span>
                            </a>  
                        </li>

                        <li> 
                            <a class=" waves-effect waves-dark" href="#" aria-expanded="false">
                            <span class="hide-menu">Accounting </span>
                            </a>  
                        </li>

                        <li> 
                            <a class=" waves-effect waves-dark" href="#" aria-expanded="false">
                            <span class="hide-menu">Marketing </span>
                            </a>  
                        </li>

                        <li> 
                            <a class=" waves-effect waves-dark" href="#" aria-expanded="false">
                            <span class="hide-menu">Delivery </span>
                            </a>  
                        </li>

                        <li> 
                            <a class=" waves-effect waves-dark" href="#" aria-expanded="false">
                            <span class="hide-menu">rols & premisson </span>
                            </a>  
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                    <h3 class="">100</h3>
                                    <h6 class="card-subtitle">Total Users</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                    <h3 class="">546</h3>
                                    <h6 class="card-subtitle">Total Orders</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                                    <h3 class="">$1500</h3>
                                    <h6 class="card-subtitle"> Orders Value</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-buffer text-warning"></i></h2>
                                    <h3 class="">$30010</h3>
                                    <h6 class="card-subtitle">Total Delivery</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-buffer text-warning"></i></h2>
                                    <h3 class="">$30010</h3>
                                    <h6 class="card-subtitle">Delivery Value</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    
                    <!-- Column -->
                    
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <!-- <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title"><br/><small class="text-muted">Emplyee earning report</small></h4>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option selected="">July</option>
                                            <option value="1">Aug</option>
                                            <option value="2">Sept</option>
                                            <option value="3">Oct</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                           
                                 <!-- Row -->
                
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h4 class="card-title">Yearly Earning</h4>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                    <li>
                                                        <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Sales</h6> </li>
                                                    <li>
                                                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Earning ($)</h6> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div id="earning" style="height: 355px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">
                        <div class="card card-inverse card-info">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-light-bulb"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Sales Analytics</h3>
                                        <h6 class="card-subtitle">March  2017</h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 align-self-center">
                                        <h2 class="font-light text-white"><sup><small><i class="ti-arrow-up"></i></small></sup>35487</h2>
                                    </div>
                                    <div class="col-6 p-t-10 p-b-20 text-right">
                                        <div class="spark-count" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Bandwidth usage</h3>
                                        <h6 class="card-subtitle">March  2017</h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 align-self-center">
                                        <h2 class="font-light text-white">50 GB</h2>
                                    </div>
                                    <div class="col-6 p-t-10 p-b-20 text-right align-self-center">
                                        <div class="spark-count2" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Row -->
                
                <!-- Row -->
                
                <!-- Row -->
                <!-- Row -->
                
                </>
               
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/dashboard/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/dashboard/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/dashboard/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/dashboard/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/dashboard/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/dashboard/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/dashboard/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/dashboard/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2021 PharmaD dashboard
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{ asset('assets/dashboard/js/app.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/js/custom.min.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/plugins/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/plugins/bootstrap/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/plugins/bootstrap/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/js/jquery.slimscroll.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/js/waves.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/js/sidebarmenu.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/plugins/sparkline/jquery.sparkline.min.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/plugins/plugins/raphael/raphael-min.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/plugins/morrisjs/morris.min.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/plugins/styleswitcher/jQuery.style.switcher.js') }}" defer></script>
    <script src="{{ asset('assets/dashboard/js/dashboard1.js') }}" defer></script>
    
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
</body>

</html>