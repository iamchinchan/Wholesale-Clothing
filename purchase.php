<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$id=$_SESSION['carry_data'];
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,'project');
$order_no=0;
$result=mysqli_query($conn,"SELECT * FROM orders");
$num_rows = mysqli_num_rows($result);
$order_no=211+$num_rows;
$amount_paid=$_POST['paid'];
$c=mysqli_query($conn,$sql);
$bill=mysqli_query("select sum(Amount) from cart where D_O_purchase=SYSDATE()");
$amount_due=$bill-$amount_paid;
$revenue=mysqli_query("select sum(rev_amount) from cart where D_O_purchase=SYSDATE()");
$DOP=SYSDATE();
$profit=$bill-$revenue;
$sql="insert into orders values($id,$order_no,$bill,$amount_paid,$amount_due,$revenue,$DOP,$profit)";

$result2=mysqli_query($conn,"select quantity,I_no from cart where ID=$id AND D_O_purchase=$DOP");
while ($row = mysqli_fetch_array($result),MYSQLI_ASSOC)
{
	UPDATE goods 
	set quantity=quantity-$row['quantity']
	I_no=$row['I_no'];
}
mysqli_query($conn,$sql);
mysqli_close($conn);
?>