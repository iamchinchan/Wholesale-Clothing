<?php

$con = mysqli_connect("localhost", "root", "");
 
// Check connection
if($con == false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

mysqli_select_db($con,"project");
$sql="select ID,NAME,SUM(Amount_due) AS TOTAL_AMOUNT_PENDING From orders NATURAL JOIN customers Group By ID";
$c=mysqli_query($con,$sql);
echo "<table border='1' style='border-collapse: collapse'>";  
echo "<th>ID</th><th>NAME</th><th>AMOUNT PENDING</th>";  
//echo"<h2>ID        TOTAL_AMOUNT_PENDING</h2><br>";

while($row = mysqli_fetch_array($c,MYSQLI_ASSOC))
{
echo "<tr><td>".$row['ID']."<td>".$row['NAME']."<td>".$row['TOTAL_AMOUNT_PENDING']."</td></tr> <br>";
}
echo "</table>";

mysqli_close($con);
?>