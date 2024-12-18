<?php
$con =mysqli_connect('localhost','root','','euserdata');
if($con){
   echo "Registration successful";
}
else{
    echo "Registration unsucessful";
}
mysqli_select_db($con,'euserdata');

$email= $_POST['email'];
$password = $_POST['password'];
$user =$_POST['user'];
$mobile =$_POST['mobile'];
$address =$_POST['address'];
$address2= $_POST['address2'];
$city =$_POST['city'];
$state =$_POST['state'];
$pin =$_POST['pin'];

$query = "insert into socialinfo  (email,password,user,mobile,address,address2,city,state,pin)
values ('$email','$password','$user','$mobile','$address','$address2','$city','$state','$pin')";

mysqli_query($con,$query);
header('location:Lhome.php');