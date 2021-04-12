<?php

$con = mysqli_connect("localhost", "root", "");
mysql_select_db("project");  
$result = mysql_query("select D.O_purchase,profit from orders group by D.O_purchase");  
echo "<table border='1' style='border-collapse: collapse'>";  
echo "<th>DATE</th><th>PROFIT</th>";  
while ($row = mysqli_fetch_array($result),MYSQLI_ASSOC)   
{  
echo"<tr><td>".$row['D.O_purchase']."</td><td>".$row['profit']."</td></tr>";<br>}<br>
echo "</table>";
<br>mysql_close($con);  
?>   
mysql_close($conn);
?>