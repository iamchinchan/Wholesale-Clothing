<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$con = mysqli_connect($servername,$username,$password);
/**if (!$con)
  {
echo "Error in DBConnect() = " . mssql_get_last_message();
  die('Could not connect: ' . mysql_error());
  }**/
mysqli_select_db($con,'project');
$id=$_SESSION['carry_data'];
$item=$_SESSION['item'];
/*
$name=$_GET['username'];
*/
$quantity=$_POST['quantity'];
               /* $Product_Id=$_GET['btn']; */
$sql = "SELECT Price_sold,Price_buyed FROM goods WHERE I_no= $item"; 
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);              
$price_b=$row['Price_buyed'];
$price_s = $row['Price_sold'];
echo $price_b;
echo $price_s;
$amount= $quantity* $price_s;
$rev_amount=  $price_b *$quantity;
$sql2="INSERT INTO cart VALUES ('$id','$item','$quantity','$price_s','$amount', SYSDATE(), '$rev_amount')";
mysqli_query($con,$sql2);
header("refresh: 0;url=retailer_page.html");
/*
if(!$c)
{
die("failed". mysql_error());
} */
mysqli_close($con);
?>
