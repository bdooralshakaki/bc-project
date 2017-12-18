
<?php
 session_start();
 session_destroy();
 include '../Database/Dbconnect.php';

 header("Location: ../Clothes-shop-Review");
 exit();

 
 ?>