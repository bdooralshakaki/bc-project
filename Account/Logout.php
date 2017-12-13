
<?php
 session_start();
 session_destroy();
 include '../Database/Dbconnect.php';

 header("Location: ../index.php");
 exit();

 
 ?>