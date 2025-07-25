 <?php  
 
 $page = "Enquiry";
session_start();
  if(!isset($_SESSION['LOGIN']['GRATERTHINGS']))
  {
   header("location:index.php");
  }
  
    include("include/global.php");  

    
    $sql = $connect->query("SELECT * FROM  enquiry  ORDER BY id DESC");
    

    
    $n=1;
    while($rowRole =  $sql->fetch(PDO::FETCH_ASSOC))
    {
        
         
        $s=1;
        

       $List .='<tr>
                    <td>'.$n.'</td>
                    <td>'.$rowRole['fname'].' '.$rowRole['lname'].'</td>
                    <td>'.$rowRole['email'].'</td>
                    <td>'.$rowRole['phoneno'].'</td>
                    <td>'.$rowRole['message'].'</td>
                    
                    <td>'.date('d-m-Y h:i A',strtotime($rowRole['create_at'])).'</td>
                   
                </tr>';
          $n++;    
          
          
          $Slist ='';
    }  


    
     include("layout/header.php");
  


  ?>

 <div class="page-body">
             <div class="container-fluid">
              <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                  
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
             
             <div class="container-fluid">

              <div class="row">
          
              <div class="col-sm-12">
               <?php echo $msgs; ?>
                          
                <div class="card">
                 <div class="card-header">

                      <div class="header-top">
                          <h5 class="pull-left"><?php echo $page; ?> List</h5>
                          <div class="pull-right">
                          
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
              <table class="display dataTable" id="export-button">

                        <thead>
                          <tr>
                            <th>#ID</th>
                           
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Message</th>
                           
                            <th>Create Date</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                         
                         <?php echo $List; ?>
     
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
         
          
               
             </div>

           </div>

</script>        
 <?php include("layout/footer.php"); ?>
