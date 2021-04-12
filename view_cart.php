<?php

$con = mysqli_connect("localhost", "root", "", "");
 
// Check connection
if($con === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

mysqli_select_db("project");  
$result = mysqli_query("select ID,Quantity,Price,Amount,D_o_purchase from cart where D_o_purchase= ");  
echo "<table border='1' style='border-collapse: collapse'>";  
echo "<th>ID</th><th>Quantity</th><th>Price</th><th>Amount</th><th>D.O_purchase</th>";  
while ($row = mysqli_fetch_array($result),mysqli_assoc)   
{  
echo"<tr><td>".$row['ID']."</td><td>".$row['Quantity']."</td><td>".$row['Price']."</td><td>".$row['Amount']."</td><td>".$row['D.O_purchase']."<td></tr><br>";
}
echo "</table>";
$result2 = mysqli_query("select sum(Amount) from cart where D_o_purchase= "); 
<br>
echo "Total_bill:".$result2;
<br>
<form name="form5" action="purchase.php" method="POST">
AMOUNT TO BE PAID:<input type="int" name="paid">
<input type="submit" value="Submit">
</form>
<br>mysqli_close($con);  
?>   
