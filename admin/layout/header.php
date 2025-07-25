<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Graterthings Administration">
    <meta name="keywords" content="Graterthings Administration">
    <meta name="author" content="Graterthings Administration">
     <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title><?php echo $page; ?></title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">


    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="assets/css/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/timepicker.css">
<link rel="stylesheet" type="text/css" href="assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="assets/css/whether-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/css/select2.css">
        
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!--mn bootstrap for loader-->
<!--<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<link rel="canonical" href="https://getbootstrap.com/docs/4.3/components/spinners/">

  </head>
  <body>
    <!-- Loader starts-->
    <!--<div class="loader-wrapper">-->
    <!--  <div class="theme-loader">    -->
    <!--    <div class="loader-p"></div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0"> 
          <div class="main-header-left">
              <div class="logo-wrapper"><a href="dashboard.php">
            <img class="img-fluid img-fluid1" src="../assets/images/GraterThings.png" alt="">
                  
            </a></div>
            <div class="dark-logo-wrapper"><a href="dashboard.php">
             <img class="img-fluid img-fluid1" src="../assets/images/GraterThings.png" alt=""> 
            
            </a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
             
              <!--<li class="onhover-dropdown">-->
              <!--  <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>-->
              <!--  <ul class="notification-dropdown onhover-show-div">-->
              <!--    <li>-->
              <!--      <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>-->
              <!--    </li>-->
              <!--    <li class="noti-primary">-->
              <!--      <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>-->
              <!--        <div class="media-body">-->
              <!--          <p>Delivery processing </p><span>10 minutes ago</span>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </li>-->
              <!--    <li class="noti-secondary">-->
              <!--      <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>-->
              <!--        <div class="media-body">-->
              <!--          <p>Order Complete</p><span>1 hour ago</span>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </li>-->
              <!--    <li class="noti-success">-->
              <!--      <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>-->
              <!--        <div class="media-body">-->
              <!--          <p>Tickets Generated</p><span>3 hour ago</span>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </li>-->
              <!--    <li class="noti-danger">-->
              <!--      <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>-->
              <!--        <div class="media-body">-->
              <!--          <p>Delivery Complete</p><span>6 hour ago</span>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </li>-->
              <!--  </ul>-->
              <!--</li>-->
              
               <li>
<!--                 <div class="mode"><i class="fa fa-moon-o"></i></div>
 -->            <!--<div id="darkbutton" class="darkmode mode"><i class="fa fa-moon-o" aria-hidden="true"></i></div>-->

              </li>
              
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="logout.php" title="Admin"><i data-feather="log-out"></i>Log out</a></button>
                
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          
          <nav class="set-navs">
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div></li>

             
                   <li class="dropdown"><a class="<?php if($page == "Dashboard"){echo "Actives";}else{echo "";} ?> nav-link menu-title" href="dashboard.php"><i data-feather="home"></i><span>Dashboard </span></a></li>
                   
              
                 
                    <li class="dropdown"><a class="<?php if($page == "Enquiry"){echo "Actives";}else{echo "";} ?> nav-link menu-title" href="enquiry-list.php"><i data-feather="navigation"></i><span>Enquiry Master </span></a></li>
                      
  
                      
                       <br> <br> <br> <br> <br> <br> <br> <br> <br>
                      
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
              
            </div>
          </nav>
        </header>