<?php 

$host="localhost";
$user="root";
$password="";
$db="lab9";


$con = mysqli_connect($host,$user,$password,$db);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
 
  $email=$_POST['email'];
  $psw=md5($_POST['password']);
  $name1 = "admin@egdroids.com"; 
$name2 = md5("123456"); 

  $query=mysqli_query($con,"select * from user where email='".$email."'AND passwrd='".$psw."' limit 1");  
  $numrows=mysqli_num_rows($query);  


  $querypd1=mysqli_query($con,"SELECT * FROM products WHERE pid = 1 "); 
  $flag1 = mysqli_fetch_assoc($querypd1);
  
  $pdname1=$flag1['pname']; 
  $price1= $flag1['price']; 
###########2
  $querypd2=mysqli_query($con,"SELECT * FROM products WHERE pid = 2 "); 
  $flag2 = mysqli_fetch_assoc($querypd2);

  $pdname2=$flag2['pname']; 
  $price2= $flag2['price']; 
############3
  $querypd3=mysqli_query($con,"SELECT * FROM products WHERE pid = 3 "); 
  $flag3 = mysqli_fetch_assoc($querypd3);

  $pdname3=$flag3['pname']; 
  $price3= $flag3['price']; 
################4
  $querypd4=mysqli_query($con,"SELECT * FROM products WHERE pid = 4 "); 
  $flag4 = mysqli_fetch_assoc($querypd4);
  
  $pdname4=$flag4['pname']; 
  $price4= $flag4['price']; 
#############5
  $querypd5=mysqli_query($con,"SELECT * FROM products WHERE pid = 5 "); 
  $flag5 = mysqli_fetch_assoc($querypd5);
  
  $pdname5=$flag5['pname']; 
  $price5= $flag5['price']; 
#############6
  $querypd6=mysqli_query($con,"SELECT * FROM products WHERE pid = 6 "); 
  $flag6 = mysqli_fetch_assoc($querypd6);
  
  $pdname6=$flag6['pname']; 
  $price6= $flag6['price']; 


  if($numrows!=0)  
  {  
  while($row=mysqli_fetch_assoc($query))  
  {  
  $dbusername=$row['email'];  
  $dbpassword=$row['passwrd']; 
  $id=$row['id'];
  $name=$row['username'];


  }  

 if($email == $dbusername && $psw == $dbpassword)  
  {  
  session_start();  
  $_SESSION['last_time']=time();  

  $_SESSION['sess_user']=$email;  
  $_SESSION['sess_id'] =$id;
  $_SESSION['sess_name'] =$name;

  $_SESSION['pname1']=$pdname1;
  $_SESSION['price1']=$price1;

  $_SESSION['pname2']=$pdname2;
  $_SESSION['price2']=$price2;

  $_SESSION['pname3']=$pdname3;
  $_SESSION['price3']=$price3;

  $_SESSION['pname4']=$pdname4;
  $_SESSION['price4']=$price4;

  $_SESSION['pname5']=$pdname5;
  $_SESSION['price5']=$price5;

  $_SESSION['pname6']=$pdname6;
  $_SESSION['price6']=$price6;


  if ($email==$name1 && $psw==$name2){
 
    header("Location:controlpanel.php");  
  }
  else
  /* Redirect browser */  
  header("Location: loggedin.php");  
  }  
  } else {  
    header("Location:invalid login.html");
  
  }  

 
  mysqli_close($con);
?>
