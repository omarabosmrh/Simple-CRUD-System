<?php 



mysql_connect("localhost" , "root" , "") or die("couldn,t connect ! ");
mysql_select_db("newdb");
$per_page =6;

$pages_query= mysql_query(" SELECT COUNT('id') FROM users ");
$pages = ceil( mysql_result($pages_query, 0)/ $per_page ) ;

$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page -1 )* $per_page ;
$query = mysql_query("SELECT name FROM users LIMIT $start ,$per_page");

while ($query_row = mysql_fetch_assoc($query)) {
	# code...

	echo $query_row['name'].'<br/>' ;
}

$prev = $page-1;
$next = $page +1;
if (!($page <=1)) {
	# code...

echo "<a href='pagination.php?page=$prev'>prev</a> ";
}
if ($pages >= 1) {
	# code...

	for ($x=1 ;$x<= $pages; $x++) {
		# code...
    echo ($x == $page) ? '<b> <a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';

	}

	if (!($page >= $pages)) {
		# code...
	
	echo "<a href='pagination.php?page=$next'>next</a> ";
}

}

 
 ?>