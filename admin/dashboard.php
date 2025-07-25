 <?php 
  
 $page = "Dashboard";
session_start();
  if(!isset($_SESSION['LOGIN']['GRATERTHINGS']))
  {
   header("location:index.php");
  }

  include("include/global.php");
  
  $today = date('Y-m-d');


 include("layout/header.php");

  ?>
 
 <div class="page-body">
             <div class="container-fluid">
              <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}" data-bs-original-title="" title="">Home</a></li> -->
                    <!-- <li class="breadcrumb-item">@yield('page_title')</li> -->
                    
                  </ol>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="dashboard.php" data-bs-original-title="" title="">Home</a></li>
                    <li class="breadcrumb-item"> <?php echo $page; ?> List</li>

                  </ol>
                </div>
              </div>
            </div>
          </div>
             
             <div class="container-fluid" >

                  <!--<div class="card-body">-->
               <div class="row d-none">
              
               <div class="col-sm-6 col-xl-3 col-lg-6">
                            <a href="booking-list.php?t=today">

                <div class="card o-hidden border-0">
                  <div class="bg-success b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="bold"></i></div>
                      <div class="media-body"><br><br><span class="m-0">Today Booking </span>
                        <h4 class="mb-0 counter"><?php echo $totalT; ?></h4><i class="icon-bg" data-feather="bold"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div> 
              
              
                   <div class="col-sm-6 col-xl-3 col-lg-6">
                  <a href="trainer-approved-list.php">
                <div class="card o-hidden border-0">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                      <div class="media-body"><br><br><span class="m-0">Total Approved Trainer</span>
                        <h4 class="mb-0 counter"><?php echo $contact; ?></h4><i class="icon-bg" data-feather="user-plus"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div> 

               <div class="col-sm-6 col-xl-3 col-lg-6">
                                <a href="user-list.php">

                <div class="card o-hidden border-0">
                  <div class="bg-info b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="users"></i></div>
                      <div class="media-body"><br><br><span class="m-0">Total User</span>
                        <h4 class="mb-0 counter"><?php echo $sbook; ?></h4><i class="icon-bg" data-feather="users"></i>
                      </div>
                    </div>
                  </div>
                </div>
                 </a>
              </div> 

               
                <div class="col-sm-6 col-xl-3 col-lg-6">
                            <a href="session-list.php">
                <div class="card o-hidden border-0">
                  <div class="bg-warning b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="video"></i></div>
                      <div class="media-body"><br><br> <span class="m-0">Total Session </span>
                        <h4 class="mb-0 counter"><?php echo $cbook; ?></h4><i class="icon-bg" data-feather="video"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div> 
              
           
                  </div>

                    <div class="row d-none"> 
                      <div class="col-sm-6 col-xl-3 col-lg-6">
                            <a href="session-list.php?t=today">
                <div class="card o-hidden border-0">
                  <div class="bg-warning b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="video"></i></div>
                      <div class="media-body"><br><br> <span class="m-0">Today Session </span>
                        <h4 class="mb-0 counter"><?php echo $tbook; ?></h4><i class="icon-bg" data-feather="video"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div> 
              
              
               <div class="col-sm-6 col-xl-3 col-lg-6">
                                <a href="gymtv-list.php">

                <div class="card o-hidden border-0">
                  <div class="bg-info b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="tv"></i></div>
                      <div class="media-body"><br><br><span class="m-0">Total Gym tv</span>
                        <h4 class="mb-0 counter"><?php echo $gbook; ?></h4><i class="icon-bg" data-feather="tv"></i>
                      </div>
                    </div>
                  </div>
                </div>
                 </a>
              </div> 
                    
                    
                       <div class="col-sm-6 col-xl-3 col-lg-6">
                  <a href="heats-list.php">
                <div class="card o-hidden border-0">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="list"></i></div>
                      <div class="media-body"><br><br><span class="m-0">Total Healthy Eats</span>
                        <h4 class="mb-0 counter"><?php echo $hbook; ?></h4><i class="icon-bg" data-feather="list"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div> 
              
                <div class="col-sm-6 col-xl-3 col-lg-6">
                            <a href="booking-list.php">

                <div class="card o-hidden border-0">
                  <div class="bg-success b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="bold"></i></div>
                      <div class="media-body"><br><br><span class="m-0">Total Booking </span>
                        <h4 class="mb-0 counter"><?php echo $pbook; ?></h4><i class="icon-bg" data-feather="bold"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div> 
              
                    
                    </div>
                 <div class="row"> 
     <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                  <div class="cal-date-widget card-body">
                    <div class="row">
                      <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                        <div class="cal-info text-center">
                          <div>
                            <h2><?php echo date('d'); ?></h2>
                            <div class="d-inline-block"><span class="b-r-dark pe-3"><?php echo date('F'); ?></span><span class="ps-3"><?php echo date('Y'); ?></span></div>
                            <p class="f-16">Endura Fitness Admin Panel</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                        <div class="cal-datepicker">
                          <div class="datepicker-here float-sm-end" data-language="en"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
                  </div>
                  
                   
                  </div>
                </div>
             
  <style>
      .static-top-widget span {
    font-weight: 500;
    font-size: 12px !important;
}
  </style>

        
 <?php include("layout/footer.php"); ?>
