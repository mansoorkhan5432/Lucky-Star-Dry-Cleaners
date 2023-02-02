<?php

session_start();

$con = mysql_connect('localhost','root','');

mysqli_select_db($con,'luckystar');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];


$s = "select * from usertable where email = '$email' && password ='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
 header('location:home.php');
}
else {
  header('location:home.php');
}
 ?>