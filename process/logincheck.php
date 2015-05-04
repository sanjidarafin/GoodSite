<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<div align="center">
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/connection.php');
if (isset($_POST['login'])) {
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $pass = md5(mysqli_real_escape_string($conn, $_POST['pass']));
    
    $sel_customer = "select * from customer where email='$email' AND password='$pass';";
    
    $run_customer = mysqli_query($conn, $sel_customer);
    
    $check_customer = mysqli_num_rows($run_customer);
    
    if ($check_customer > 0) {        
        $_SESSION['user_email'] = $email;
           echo "<script>window.open('$root','_self')</script>";
    }
    
    else {
        echo "<script>alert('Email OR password is not correct, Try again!')</script>";
    }
    
}
?>
  </div>
  <?php
require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');
  ?>