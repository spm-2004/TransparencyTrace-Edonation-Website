<?php
$con = mysqli_connect('localhost', 'root','','euserdata');
if ($con) {
    echo "Registration Successful";
} else {
    echo "Sorry,Registration Unsuccessful";
}
mysqli_select_db($con, 'euserdata');

$email = $_POST['email'];
$password = $_POST['password'];
$user = $_POST['user'];
$mobile = $_POST['mobile'];

$query = "insert into userinfodata  (email, password, user, mobile)  
values ('$email','$password','$user','$mobile')";

mysqli_query($con ,$query);
header('location:Lhome.php');
