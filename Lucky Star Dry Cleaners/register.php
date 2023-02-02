<?php

session_start();
header('location:login.php');
$con = mysql_connect('localhost','root','');

mysqli_select_db($con,'luckystar');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];


$s = "select * from usertable where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo "email already taken";
}
else {
  $reg= "insert into usertable( name, email, password) values ('$name' , '$email', $pass')";
mysqli_query($con,$reg);
echo "Registration Successful";
}
 ?>