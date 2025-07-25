<?php 

include("include/global.php");



 if($_REQUEST['firstname'] !="" && $_REQUEST['lastname'] !="" && $_REQUEST['email'] !="" && $_REQUEST['message'] !=""){

            $insert = "INSERT INTO enquiry SET 
                fname     = '" . addslashes(ucwords($_REQUEST['firstname'])) . "',
                lname     = '" . addslashes(ucwords($_REQUEST['lastname'])) . "',
                email     = '" . addslashes($_REQUEST['email']) . "',
                phoneno   = '" . addslashes($_REQUEST['phone']) . "',
                message   = '" . addslashes($_REQUEST['message']) . "'";
            

            if($connect->query($insert)) {
            $response = ["success" => true, "message" => "Your Enquiry has been sent successfully."];
            } else {
            $response = ["success" => false, "message" => "Enquiry submission failed"];
            }
    
    
                    echo json_encode($response);
    }else{
                    $response = ["success" => false, "message" => "All field is required !"];
                    echo json_encode($response);
    
    
    }











?>