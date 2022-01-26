<?php   
  
session_start();  

$host="localhost";
$user="root";
$password="";
$db="lab9";


$con = mysqli_connect($host,$user,$password,$db);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
 $query=mysqli_query($con,"select * from user where id='".$_SESSION['sess_id']."'");  
  $numrows=mysqli_num_rows($query);  



  if($numrows!=0)  
  {  
  while($row=mysqli_fetch_assoc($query))  
  {  
  $dbusername=$row['username'];
  $dbemail=$row['email'];

  $dbpassword=$row['passwrd']; 
  $id=$row['id'];
    
  }  
  }

if(!isset($_SESSION["sess_id"])){  
    header("location:login.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>
<style> 
 input[type=submit] {
  background-color: #9803fc;
  border: none;
  color: white;
  font-size: large;
  padding: 16px 32px;
  text-decoration:solid;

  cursor: pointer;
  margin-top: 6.5%;
  margin-left: 46%;
}
</style>
<title>Account Settings</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 90px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
              
          
    </style>  
</head>  
<body style="
    background-image: url('images/settingsbg.jpg');
    background-repeat: no-repeat;
    background-size: cover;">  
    <nav style="position:sticky; top:50px; font-size:x-large;  " >
    <div">
  
     
        <span ></span>
      </button>
      <div >
       
   
        <ul style="  list-style-type: none;
        margin: 0;
        padding: 0;
      
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.664); text-align: center;">
          <li style="  
          display:inline-block;
       
          text-align: center;
        
          text-decoration: none;">
          <h2 style="color: white;">Egy <em style="color: orangered;" >Droids</em></h2>
        </li>
        
            <li style="  
           
            display:inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;">
            <a id="x" style="color:gold" href="loggedin.php">Home</a>
          </li>
          <li style="  display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;">
            <a style="color:gold" href="productsloggedin.php">Our Products</a>
          </li>
          <li   style="  display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;">
            <a style="color:gold" href="aboutloggedin.php">About Us</a>
          </li">
          <li style="   display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;">
            <a style="color:gold" href="contactloggedin.php">Contact Us</a>
          </li >
          </li>
          <li style="   display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;"> 
            <a style="color:gold" href="home.php">Log Out</a>
          </li>
              
          
        </ul>
      </div>
    </div>
  </nav>
      <br><br>
<h2 style="color:orange; font-size:x-large; margin-left:70%;" > <?=$dbusername?>'s  Settings</h2>     
 

<form action="member.php" method="post">
    <input type="submit" name="someAction" value="Delete User" />
    
   
</form>
<form style="margin-left:55px" action="Selfupdate.php">
    <input type="submit" name="Modify" value="Modify" />

   
</form>
<form style="margin-left:55px;"  action="loggedin.php">
    <input type="submit" name="back" value="Back" />

   
</form>
<?php

// ####################################################################Delete function ########################################
    function func()
    {
        $link = mysqli_connect("localhost", "root", "", "lab9");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
    $sql = "DELETE FROM user WHERE id='".$_SESSION["sess_id"]."'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 //########################################
mysqli_close($link);
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        func();
        header("location:login.html");
    }
?>
</body>  
</html>  
<?php  
}  
?>  