<?php 

include ("pages.php");

$id=$_REQUEST['id'];
$newname = $_REQUEST['newname'];
$newemail = $_REQUEST['newemail'];
$newpassword = $_REQUEST['newpassword'];

mysql_connect("localhost","root","") or die("can not connect ! ");
mysql_select_db("newdb");
mysql_query("UPDATE users SET name='$newname',email='$newemail' ,password='$newpassword' WHERE id='$id'");

echo "your values have ben updated successfully ! ";


mysql_close();

 ?>


<!-- footer -->
<div id="footer"> &copy  all right recerved 2017 <br/> Omar Gomaa </div>
</div>
