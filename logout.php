<?php
require_once('header.php') ;
session_destroy();

echo "<script>window.open('$root','_self')</script>";
require_once('footer.php');
?>