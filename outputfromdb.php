<?php 


include("pages.php");


mysql_connect("localhost" , "root" , "") or die("couldn,t connect ! ");
mysql_select_db("newdb");


$result = mysql_query("SELECT * FROM users");


while ($row = mysql_fetch_array($result)) {
	# code...



	echo $row['name']."  ". $row['email']."  ".$row['password'];
	echo "<br/>";
}

mysql_close();





 ?>

 
<!-- footer -->
<div id="footer"> &copy  all right recerved 2017 <br/> Omar Gomaa </div>
</div>
