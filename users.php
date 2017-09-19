
<?php 


session_start();
if (! isset($_SESSION['email'])) {
	# code...

	echo "access denied ";
	exit;
}

else
 {

  
  echo $_SESSION['name']."'s seesion <br/> <a href='logout.php'> logout </a>";
  include ("pages.php");

 }


?>
