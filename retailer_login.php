
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$id=111;
$status=0;
$user=$_POST['username'];
$pass=$_POST['password'];
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,'project');
$sql="select id,username,password from customers";
$c=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($c,MYSQLI_ASSOC))
{
	$id=$row['id'];
	$username=$row['username'];
	$password=$row['password'];
	if($user==$username && $pass==$password)
	{
		$status=1;
		break;
	}
}
if($status==0)
{
echo'<script type="text/javascript">alert("cannot find the retailer(user)")</script>';
header("refresh: 0;url=user_login.html");
}
else if($status==1)
{
	$_SESSION["carry_data"]=$id;
	header("refresh: 0;url=retailer_page.html");
}
mysqli_close($conn);
?>