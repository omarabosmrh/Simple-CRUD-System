
<?php   include ("pages.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<body>
<center>
<form method="GET" action="search.php">
	<input type="text" name="search"/>
	<input type="submit" name="submit" value="Search in DB  " />
</form>
</center>
<hr/>


<?php 

if (isset($_REQUEST['submit'])) {
	# code...
$search =$_GET['search'];
// built in function take input as sentense 
$terms = explode(" ", $search);
$query =" SELECT * FROM users WHERE   ";
// we use for each to make dynamic array 
$i =0;
foreach ($terms as $each) {
	# code...

	$i++;
	if ($i==1) {
		# code...
		$query .= "concat_ws('',name,email) LIKE '%$each%' ";	}
else{
$query .= "OR concat_ws('',name,email) LIKE '%$each%' ";

}

}

mysql_connect("localhost" , "root" , "") or die("couldn,t connect ! ");
mysql_select_db("newdb");

$query = mysql_query($query);
$num = mysql_num_rows($query);

if ($num > 0 && $search !="") {
	# code... 

	echo " $num result (s) found <b> $search </b> <br/>";
 // this loop to make arry to result   , seperate result to id , name ,,,, etc in search engine ! 
	while ($row = mysql_fetch_assoc($query)) {
		# code...

		$id = $row['id'];
    	$name = $row['name'];
    	$email = $row['email'];
    	$password = $row['password'];
    	
       echo "$name <br/> $email <br/>";
       
      

    	}
}
else {


	echo "not found any result ! ";
}

}
else{
	# code...

  echo" type any word to search please !";
}
?>
</form>
</body>
</html>