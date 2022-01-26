<!DOCTYPE html>
<html lang="en">

  <head>
   
  <?php

session_start();

   $name=$_SESSION['sess_name'];
   if ($name==NULL){
    header("Location:home.php");
  }
  
?>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Products</title>

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
                <a class="nav-link" id="x" href="loggedin.php">Home</a>
              </li>
              <li class="nav-item active ">
                <a class="nav-link" href="productsloggedin.php">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutloggedin.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactloggedin.php">Contact Us</a>
              </li>
              </li>
              <li class="nav-item">
              <a class="nav-link" onclick="myFunction()">Log Out</a>
              </li><script>
    function myFunction() {
     localStorage.clear();
     window.location.replace("home.php");
    }
    </script>
              </li>
                  <li class="nav-item" >
                      
                  <a class="nav-link" href="member.php" ><strong style="color:red"> Welcome, <?=$_SESSION['sess_name'];?> </a>
              </li>
              <li class="cart" style="margin-top: 11px;">
                <a href="cart.html">

                    <ion-icon name="basket" style="color:orangered"></ion-icon><span style="color:orangered"> 0
                </a>


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
                <a class="add-cart cart1" href="#" style="color:orangered">Add to Cart </a>
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
              <a class="add-cart cart2" href="#"style="color:orangered">Add to Cart </a>
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
              <a class="add-cart cart3" href="#" style="color:orangered">Add to Cart </a>
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
              <a class="add-cart cart4" href="#"style="color:orangered">Add to Cart </a>
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
              <a class="add-cart cart4" href="#"style="color:orangered">Add to Cart </a>
</center>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                      <center><a href="#"><img src="assets/images/product_06.jpg" alt="" style="width: 76%" height="76% " ></a></center> 
              <div class="down-content">
                <a href="#"><h4> <?=$_SESSION['pname4'];?></h4></a><br>
                <h6><?=$_SESSION['price4'];?></h6>
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
              <center>
              <a class="add-cart cart4" href="#"style="color:orangered">Add to Cart </a>
              </center>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        
        </div>
      </div>
    </div>

    



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


   
<script src='https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js' > </script>
<script>



let carts = document.querySelectorAll('.add-cart');
//let no=document.getElementById('no');

let product = [{

    name: 'Hanson Robotics Soph',
    tag: 'robo1',
    price: <?=$_SESSION['price1'];?>,
    inCart:0

},
{

    name: 'Eufy Robot Humanoid',
    tag: 'robo2',
    price: <?=$_SESSION['price2'];?>,
    inCart:0

},
{

    name: 'Pet care device',
    tag: 'robo3',
    price:<?=$_SESSION['price3'];?>,
    inCart:0

},
{

    name: 'Robot Toy',
    tag: 'robo4',
    price: <?=$_SESSION['price5'];?>,
    inCart:0

},
{

    name: 'RoboVac 15T',
    tag: 'robo5',
    price: <?=$_SESSION['price6'];?>,
    inCart:0

},
{

    name: 'Collar for Pet Doors',
    tag: 'robo6',
    price: <?=$_SESSION['price4'];?>,
    inCart:0

}
]
for(let i =0 ; i<carts.length;i++)
{
    carts[i].addEventListener('click',() =>{
        cartNumbers(product[i]);
        totalCost(product[i]);

    }
    )
}

function onLoadCartNumbers() {

    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){

        document.querySelector('.cart span').textContent = productNumbers;

    }

}

function cartNumbers(product) {

    
    let productNumbers = localStorage.getItem('cartNumbers');


    productNumbers = parseInt(productNumbers);

    if(productNumbers)

    {localStorage.setItem('cartNumbers',productNumbers+1);
    document.querySelector('.cart span').textContent = productNumbers+1;
}
     
    else
    {localStorage.setItem('cartNumbers',1);
    document.querySelector('.cart span').textContent = 1;

    }
    setItems(product);

}
function setItems(product){

    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    console.log("My cartItems are", cartItems);

    if(cartItems != null)
    {   
        if(cartItems[product.tag] == undefined){
            cartItems ={
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart +=1; 
    }else{

        product.inCart =1;
        cartItems = {
           [product.tag]: product
   


    }
   
    }
   
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
 let cartCost = localStorage.getItem('totalCost');
 
 
 if(cartCost !=null){
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost",cartCost + product.price);

 }else{

    localStorage.setItem("totalCost",product.price);
 }

 
}
function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');
    console.log(cartItems);
    if(cartItems && productContainer ){
        productContainer.innerHTML = '';
            Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            
          
            <div class="product-title">
           <ion-icon name="close-circle"></ion-icon>
            
            ${item.name}
            </div>
            <div class="price">
            $${item.price} 
            </div>
            <div class="quantity">
            
            ${item.inCart}
           
   
            </div>
            <div class="total">
                ${item.inCart * item.price}

            </div>
            `
        });

        productContainer.innerHTML += `
        <div class="basketTotalContainer">
        <h4 class="basketTotalTitle">
        Cart Total Cost
        </h4>
        <h4 class="basketTotal">$${cartCost}</h4>
        `

    }
    
    
}
onLoadCartNumbers();
 // just to stop rest cart to 0 on refresh page


</script>
  </body>

</html>
