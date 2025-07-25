 <?php


  include("include/global.php");

  

  if($_POST['action'] == "Update" && $_POST['titles']  != "Featured"){


    if($_POST['table'] == "banner"){
      $status = 'bannerStatus='.$_POST['status'];
      $id = 'bannerID='.$_POST['id'];

   }else{
    $status = substr($_POST['table'].'Status='.$_POST['status'],0,100);
  
     $id = substr($_POST['table'].'ID='.$_POST['id'],0,100);
   }

  	 
  	    
  	 $sql="update ".$_POST['table']." set ".$status."  where ".$id."";
      $connect->query($sql);
 
  	
  
  }else if($_POST['action'] == "Update" && $_POST['titles']  == "Featured"){
      
        $status = substr($_POST['table'].'ISFeatured='.$_POST['status'],0,100);
        $id = substr($_POST['table'].'ID='.$_POST['id'],0,100);
        
        $sql="update ".$_POST['table']." set ".$status."  where ".$id."";
        $connect->query($sql);  
      
      
  }else if($_POST['action'] == "Delete"){
    
    $Nid = $_POST['table'].'ID';
    $id = $_POST['id'];
    
    $sql12 = "DELETE FROM " . $_POST['table'] . " WHERE $Nid = :id";
    $stmt = $connect->prepare($sql12);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute();
    
    if($_REQUEST['picname'] !="")
    {
        unlink($_REQUEST['picname']);
    }
     
  }





?>