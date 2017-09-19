<?php 



 include("pages.php"); 

mysql_connect("localhost" , "root" , "") or die("couldn,t connect ! ");
mysql_select_db("newdb");


$result = mysql_query("DELETE FROM users WHERE id='".$_REQUEST['id']."'");

echo "The User has been Deleted Successfully !";


mysql_close();
 

 ?>



<!-- footer -->
<div id="footer"> &copy  all right recerved 2017 <br/> Omar Gomaa </div>
</div>
