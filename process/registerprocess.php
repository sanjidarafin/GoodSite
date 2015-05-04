<div class="notification">
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/connection.php');
  $nameErr = $customer_name = $email = $address = $birthday = $pass =  $sex = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["customer_name"])) {
    echo  $nameErr = "Name is required<br>";
   } else {
$customer_name = $_POST["customer_name"] ;
   }
  
     if (empty($_POST["email"])) {
    echo  $nameErr = "email is required<br>";
   } else {
$email = $_POST["email"] ;
   }
  
     if (empty($_POST["address"])) {
  echo     $nameErr = "address is required<br>";
   } else {
 $address = $_POST["address"] ;
   }
  

  
  
     if (empty($_POST["pass"])) {
     echo $nameErr = "password is required<br>";
   } else {
$pass =md5( $_POST["pass"]);
   }
}

if(!$nameErr){
  $sql ="INSERT INTO `customer` (`customer_id`, `customer_name`, `email`, `address`, `password`) VALUES (NULL, '$customer_name', '$email', '$address', '$pass');";
    if($conn->query($sql) == TRUE)
    {
    echo "Registered successfully";
  }
  else
    {
    echo "something is wrong";

  }
}
  else{
     echo "Access Denied";
  }
require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');
  ?>
</div>