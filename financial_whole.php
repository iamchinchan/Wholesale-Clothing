<?php

$con = mysqli_connect("localhost", "root", "");
 
// Check connection
if($con == false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

mysqli_select_db($con,"project"); 
$sql="select D_o_purchase,profit from orders group by D_o_purchase"; 
$c = mysqli_query($con,$sql);  
//echo"<center>";
echo "<table border='1' style='border-collapse: collapse'>";  
echo "<th>DATE</th><th>PROFIT</th>";  
while ($row = mysqli_fetch_array($c,MYSQLI_ASSOC))
{
echo"<tr><td>".$row['D_o_purchase']."</td><td>".$row['profit']."</td></tr> <br><br>";
}
echo "</table>";

mysqli_close($con);  
?>   
