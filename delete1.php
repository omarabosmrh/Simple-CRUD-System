<?php

 include("pages.php"); 

mysql_connect("localhost" , "root" , "") or die("couldn,t connect ! ");
mysql_select_db("newdb");


$result = mysql_query("SELECT * FROM users WHERE id='".$_REQUEST['ids']."'");

echo "<table width=\"90%\"align=center border=2 >";
echo " <tr>

     <td width=\"40%\" align=center bgcolor=\"ffff00\"> ID </td>
     <td width=\"40%\" align=center bgcolor=\"ffff00\"> Name </td>
     <td width=\"40%\" align=center bgcolor=\"ffff00\"> Email </td>
     <td width=\"40%\" align=center bgcolor=\"ffff00\"> Password </td>
     </tr>
     ";

while ($row = mysql_fetch_array($result)) {
	# code...
 $id = $row['id'];
$name = $row['name'];

$email = $row['email'];

$password = $row['password'];

	echo "<tr><td align=center>
	 $id </td>
	<td>$name </td><td>$email </td><td>$password </td></tr>";
}  
echo "</table>";

mysql_close();

 ?>
<form  method="post" action="delete2.php">
     <p> Are You Sure Delete this User ?! </p>
<input type="submit" name="submit" value=" OK">
<input type="hidden" name="id" value=" <?php  echo $_REQUEST['ids'];   ?>">
</form>



<!-- footer -->
<div id="footer"> &copy  all right recerved 2017 <br/> Omar Gomaa </div>
</div>
