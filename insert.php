<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
{
die("failed");	
}
mysqli_select_db($conn,'project');
$id=0;
$result=mysqli_query($conn,"SELECT * FROM customers");
$num_rows = mysqli_num_rows($result);
$id=111+$num_rows;
$name =$_POST["cust_name"];
$cont=$_POST["contact"];
$addr=$_POST["add"];
$email=$_POST["email"];
$username=$_POST["username"];
$pass=$_POST["password"];

$sql = "insert into customers values('$id','$name','$cont','$addr','$email','$username','$pass')";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("refresh: 0;url=home_page.html");
?>
