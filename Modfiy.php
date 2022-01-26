<?php   
  
session_start();  
if(!isset($_SESSION["sess_user"])){  
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
    margin-bottom: 100px;  
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
    background-image: url('https://i.pinimg.com/originals/47/0a/19/470a19a36904fe200610cc1f41eb00d9.jpg');
    background-repeat: no-repeat;
    background-size: cover;">  
   
      
<center><h2 style="color:white; font-size:x-large" > <?=$_SESSION['sess_user'];?>'s Account Settings</h2>   </center>    
 

<form action="member.php" method="post">
    <input type="submit" name="someAction" value="Delete User" />
    
   
</form>
<form style="margin-left:55px" action="loggedin.php">
    <input type="submit" name="Modify" value="Modify" />

   
</form>
<form style="margin-left:55px" action="loggedin.php">
    <input type="submit" name="back" value="Back" />

   
</form>
<?php
  
    function func()
    {
        $link = mysqli_connect("localhost", "root", "", "lab8");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
    $sql = "DELETE FROM user WHERE email='".$_SESSION["sess_id"]."'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        func();
    }
?>
</body>  
</html>  
<?php  
}  
?>  