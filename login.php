<?php 

session_start();
if ($_POST) {
    
$_SESSION['email'] = $_POST['email'];
$_SESSION['Password'] =md5( $_POST['Password']);
 if ( $_SESSION['email'] && $_SESSION['Password'] )  {
 
$link = mysqli_connect('localhost','root',''); 
if (!$link) { 
    die('Could not connect to MySQL: ' . mysqli_error()); 
       } 
   echo 'Connection OK'; mysqli_close($link); 

   // mysql_connect("localhost" , "root" , "") or die("couldn,t connect ! ");
    mysql_select_db("newdb");
    $query = mysql_query(" SELECT * FROM users WHERE  email='".$_SESSION['email']." ' ");
    $numrows = mysql_num_rows($query); 
      if ($numrows != 0) {
      	while ($row =mysql_fetch_assoc($query)) {
     		$dbemail =$row ['email'];
     		$dbpassword=$row['password'];
     	
            }
     	      if ($_SESSION['email'] == $dbemail) {
     		      if ($_SESSION['Password'] == $dbpassword) {
     			     echo "you are loged in ";

     			     header("location: pages.php");
     		         }
                        else {
                         echo " your password is wrong ";

                             }
               }
                

                 else {
                 	echo " your email is wrong ";
                     }
     }

     else {

     	echo " your email is not registered yet ! ";
          }

 }
    else {
	
	echo "type correct email  and password please ";
       
        }

} 
else{
    echo "access denied";
    exit;
 }

 ?>