
<?php


echo "choose id to Delete ! ";

 include("pages.php"); 

mysql_connect("localhost" , "root" , "") or die("couldn,t connect ! ");
mysql_select_db("newdb");


//$result = mysql_query("SELECT * FROM users");

echo "<table width=\"90%\"align=center border=2 >";
echo " <tr>

     <td width=\"40%\" align=center bgcolor=\"ffff00\"> ID </td>
     <td width=\"40%\" align=center bgcolor=\"ffff00\"> Name </td>
     <td width=\"40%\" align=center bgcolor=\"ffff00\"> Email </td>
     <td width=\"40%\" align=center bgcolor=\"ffff00\"> Password </td>
     </tr>
     ";
 /* pagination */

 $per_page =6;
$pages_query= mysql_query(" SELECT COUNT('id') FROM users ");
$pages = ceil( mysql_result($pages_query, 0)/ $per_page ) ;

$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page -1 )* $per_page ;
$query = mysql_query("SELECT * FROM users LIMIT $start ,$per_page");


while ($row = mysql_fetch_array($query)) {
	# code...
 $id = $row['id'];
$name = $row['name'];

$email = $row['email'];

$password = $row['password'];

	echo "<tr><td align=center>
	 <a href=\"delete1.php?ids=$id&names=$name&emails=$email&passwords=$password\">$id </a></td>
	<td>$name </td><td>$email </td><td>$password </td></tr>";
}  
echo "</table>";
// pagination 


$prev = $page-1;
$next = $page +1;
if (!($page <=1)) {
	# code...
echo "<center>";
echo "<a href='delete.php?page=$prev'>prev</a> ";
}
if ($pages >= 1) {
	# code...

	for ($x=1 ;$x<= $pages; $x++) {
		# code...
    echo ($x == $page) ? '<b> <a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';

	}

	if (!($page >= $pages)) {
		# code...
	
	echo "<a href='delete.php?page=$next'>next</a> ";
}
echo "</center>";
}

//


mysql_close();





 ?>


<!-- footer -->
<div id="footer"> &copy  all right recerved 2017 <br/> Omar Gomaa </div>
</div>
