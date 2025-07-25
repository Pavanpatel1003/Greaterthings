<?php
  include("include/global.php");

session_start();
if (isset($_SESSION['LOGIN']['GRATERTHINGS'])) {
    header("Location: dashboard.php");
    exit;
}  

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    
     $member_name = $_REQUEST['member_name'];
     $member_password = md5($_REQUEST['member_password']);
     $sql = "SELECT * FROM admin WHERE adminEmail = ? AND adminPassword = ?";
    $stmt = $connect->prepare($sql);
    $stmt->execute([$member_name,$member_password]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['LOGIN']['GRATERTHINGS'] = $user;

        if (!empty($_POST["remember"])) {
            setcookie("member_login", $_POST["member_name"], time() + (10 * 365 * 24 * 60 * 60), "/");
            setcookie("member_password", $_POST["member_password"], time() + (10 * 365 * 24 * 60 * 60), "/");
        } else {
            if (isset($_COOKIE["member_login"])) {
                setcookie("member_login", "", time() - 3600, "/");
            }
            if (isset($_COOKIE["member_password"])) {
                setcookie("member_password", "", time() - 3600, "/");
            }
        }
         header("Location: index.php?msg=s");
         exit;
    } else {
        //$EnqMsg = '<div class="text-danger text-bold text-center">Password Incorrect with this email</div>';
         header("Location: index.php?msg=e");
         exit;
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Graterthings Administration">
    <meta name="keywords" content="Graterthings Administration">
    <meta name="author" content="Graterthings Administration">
     <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Graterthings Administration</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <style type="text/css">
      .swal2-container {
          position: fixed;
          top: 20px;
          left: 20px;
          width: auto; 
      }
      </style>
      
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="loader-wrapper">
    <div class="theme-loader">
        <div class="loader-p"></div>
    </div>
</div>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <form class="theme-form login-form" action="" method="post">
                        <h4 class="text-center py-3">Login</h4>
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-email"></i></span>
                                <input class="form-control" type="email" id="userEmail" placeholder="Test@gmail.com" name="member_name" required value="<?php echo $_COOKIE['member_login'] ?? ''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-lock"></i></span>
                                <input class="form-control" type="password" name="member_password" id="userPassword" placeholder="*********" value="<?php echo $_COOKIE['member_password'] ?? ''; ?>" required>
                                <div class="show-hide"><span class="show"></span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox" name="remember" <?php if (isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>
                                <label class="text-muted" for="checkbox1">Remember password</label>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/icons/feather-icon/feather.min.js"></script>
<script src="assets/js/icons/feather-icon/feather-icon.js"></script>
<script src="assets/js/sidebar-menu.js"></script>
<script src="assets/js/config.js"></script>
<script src="assets/js/bootstrap/popper.min.js"></script>
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script>

document.addEventListener('DOMContentLoaded', function() {
        // Get the 'msg' parameter from the URL
        const urlParams = new URLSearchParams(window.location.search);
        const msg = urlParams.get('msg');
 
        // Show SweetAlert message based on the 'msg' parameter
        if (msg === 's') {
            Swal.fire({
                title: 'Login!',
                text: 'You are successfully logged in',
                icon: 'success',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            }).then(() => {
                // Delay the redirection by 5000 seconds (5000 * 1000 milliseconds)
                setTimeout(function() {
                    window.location.href = "dashboard.php";
                }, 5000); // 5000 seconds delay
            });
            
        } else if (msg === 'e') {
        
            
            Swal.fire({
                title: 'Login failed !',
                text: 'The password you entered for email is incorrect. Please try again.',
                icon: 'error',
                toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 2000,
                  timerProgressBar: true,
                  didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer);
                      toast.addEventListener('mouseleave', Swal.resumeTimer);
                  }
            });
                // Delay the redirection by 5000 seconds (or adjust if necessary)
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 5000); // 5000 seconds in milliseconds
            
        }
    });







  



</script> 
</body>
</html>
