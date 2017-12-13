
<?php
 ob_start();
 session_start();
   
    include 'comments.link.php';    
    include 'dbConnect.php';
    include '../Account/Header.php';
   
   
    
    
    date_default_timezone_set('Europe/Ireland');
    
   
?>

<!DOCTYPE html>
<html>
<head>
    <title>Clothes Review </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
     <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    
    
    <h1><center> Clothes Review</center></h1>
</head>

<body>
    <!-- Navigation -->
   <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Review/review.php">Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shops.php">Shops</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <?php
           if($_SESSION['signed_in'])
           {
             echo '<li class="welcomeMessage" style="color: white; padding-top: 15px;">Welcome ' . $_SESSION['userName'] . '</li>';
             echo '<li><a href="Account/Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li></ul>';
           }
           else 
           {
             echo '<li><a href="Account/Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
             echo '<li><a href="Account/Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
           }       
        ?>
      </ul>
        </div>
      </div>
    </nav> -->
    
    
    
<div align="center">

<?php
echo "<form method='POST' action='".setComments($conn)."'>
     <div align='enter'>
        <div class='row'>
            <div class='col-md-4' style='float: none';
                 margin: 0 auto'>
                    <div class='form-group'>
                        <label> List of Shops</label>
                        <select class='form-control' name='sPic'>
                            <option value='H&M'> H&M</option>
                            <option value='Shop name: Bershka'> Bershka</option>
                            <option value='Shop name: JD sports'> JD sports</option>
                            <option value='Shop name: Best'>Best menswear</option>
                            <option value='Shop name: Mothercare'>Mothercare</option>
                            <option value='Shop name: Topshop'>Topshop</option>
                        </select>
                    </div>
            </div>
        </div>
    </div>
    </br>
    <div align='enter'>
        <div class='row'>
            <div class='col-md-4' style='float: none';
                 margin: 0 auto'>
                    <div class='form-group'>
                        <label> Clothes category List</label>
                        <select class='form-control' name='mPic'>
                            <option value='Women'> Women</option>
                            <option value='Men'>Men</option>
                            <option value='Kids'>Kids</option>
                        </select>
                    </div>
            </div>
        </div>
    </div>
    
    <input type='hidden' name='uid' value='Anonymous'>
    </br>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    </br>
    <textarea name='message'></textarea>
    </br>
    <button type='submit' name='commentSubmit'> Submit Review </button>
</form>";
getComments($conn);

$sPic = $_POST['sPic'];
$mPic = $_POST['mPic'];

?>
</div>
</body>
</html>





