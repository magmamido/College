<!DOCTYPE html>
<html lang="en">

  <head>
  <?php

session_start();


  
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>EgyDroids Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="home.php"><h2>Egy <em>Droids</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
                <li class="nav-item  ">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item active ">
                <a class="nav-link" href="products.php">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
                  <li class="nav-item">
                <a class="nav-link" href="register.html">Sign Up</a>
              </li>
          
            <li class="nav-item">
          <a class="nav-link" href="login.html">Log in</a>
        </li>
         
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>Egy Droids</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-4 col-md-4 all des">
                    <div class="product-item">
                   <center><a href="#"><img src="assets/images/product_01.jpg" alt="" style="width: 80%" height="80% " ></a></center> 
              <div class="down-content">
                  
                   
                       
                <a href="#"><h4><?=$_SESSION['pname1'];?> </h4></a>
                <h6>$<?=$_SESSION['price1'];?></h6>
                <p>comes with everything needed for scientific R&D and business applications.</p>
                
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
               
                <span>Reviews (24)</span>
</div>
                <center>
               
</center>
              
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <center> <a href="#"><img src="assets/images/product_02.jpg" alt="" style="width: 46.7%" height="46.7% " ></a></center>
              <div class="down-content">
                <a href="#"><h4><?=$_SESSION['pname2'];?> </h4></a>
                <h6>$<?=$_SESSION['price2'];?></h6>
                <p>Helps in work productivity</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>

                <span>Reviews (21)</span>
                
              </div>
              <center>
               
              </center>   
            </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <center> <a href="#"><img src="assets/images/product_03.jpg" alt="" style="width:80%" height="80% " ></a></center>
              <div class="down-content">
                <a href="#"><h4><?=$_SESSION['pname3'];?></h4></a>
                <h6>$<?=$_SESSION['price3'];?></h6>
                <p>Cleans and feeds pet</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (36)</span>
              </div>
<center>
         
</center>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                         <center><a href="#"><img src="assets/images/product_04.jpg" alt="" style="width: 80%" height="80% " ></a></center> 
              <div class="down-content">
                <a href="#"><h4><?=$_SESSION['pname5'];?></h4></a>
                <h6>$<?=$_SESSION['price5'];?></h6>
               <p>For Kids Entertainment </p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (48)</span>
              </div>
              <center>
     
              </center>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <center><a href="#"><img src="assets/images/product_05.jpg" alt="" style="width: 80%" height="80% " ></a></center> 
              <div class="down-content">
                <a href="#"><h4><?=$_SESSION['pname6'];?></h4></a>
                <h6>$<?=$_SESSION['price6'];?></h6>
                <p>Features a lean, self-charging robotic cleaning machine</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (16)</span>
              </div>
<center>
</center>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                      <center><a href="#"><img src="assets/images/product_06.jpg" alt="" style="width: 76%" height="76% " ></a></center> 
              <div class="down-content">
                <a href="#"><h4> <?=$_SESSION['pname4'];?></h4></a><br>
                <h6>$<?=$_SESSION['price4'];?></h6>
                <p></p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (32)</span>
              </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <ul class="pages">
              <li ><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                   
      if(! cleared[t.id]){                      
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
