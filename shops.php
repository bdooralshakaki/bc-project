<?php
    ob_start();
    session_start();
    
     include 'Database/Dbconnect.php';

?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clothes Shop Review</title>

    <!-- Bootstrap core CSS -->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Custom styles for this template -->
    <!--<link href="css/shop-homepage.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
 
    

  </head>

  <body>

    <!-- Navigation -->
  <!--  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Clothes shop Review </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
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

    <!-- Page Content -->
    <div class="container">
        </br>
        <h1> Shops in Ireland </h1>
        </br>
    <div class="row">
         <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="https://www.bershka.com/ie/woman-c1010193132.html"><img class="card-img-top" src="img/Bershka.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="https://www.bershka.com/ie/woman-c1010193132.html">Bershka</a>
                  </h4>
                  <p class="card-text">Bershka is a retailer and part of the Spanish Inditex group. The company was created in April 1998 as a new store and fashion concept!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="http://www2.hm.com/en_ie/index.html"><img class="card-img-top" src="img/Hm.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="http://www2.hm.com/en_ie/index.html"> H&M</a>
                  </h4>
                  <p class="card-text">H & M Hennes & Mauritz AB is a Swedish multinational clothing-retail company.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="http://eu.topshop.com/?geoip=home"><img class="card-img-top" src="img/topshop.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="http://eu.topshop.com/?geoip=home">Topshop</a>
                  </h4>
                  <p class="card-text">Topshop is a British multinational fashion retailer of clothing, shoes, make-up and accessories.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="https://www.bestmenswear.ie/"><img class="card-img-top" src="img/best.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="https://www.bestmenswear.ie/">Best</a>
                  </h4>
                  <p class="card-text">Best Menswear is Ireland’s largest independent menswear retailer, specialising in selling men’s fashion and business suiting. With eleven stores nationwide and employing over 150 people Best Menswear has a strong heritage and expertise in formal menswear.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="https://www.jdsports.ie/"><img class="card-img-top" src="img/jd.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="https://www.jdsports.ie/">JD sports</a>
                  </h4>
                  <p class="card-text">JD Sports Fashion plc, more commonly known as just JD, is a sports-fashion retail company based in Bury, Greater Manchester, England with shops throughout the United Kingdom</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="https://www.mothercare.ie/"><img class="card-img-top" src="img/mothercare.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="https://www.mothercare.ie/">Mothercare</a>
                  </h4>
                  <p class="card-text">Mothercare plc is a British retailer which specialises in products for expectant mothers and in general merchandise for children up to 6 years old.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div> 
            </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>