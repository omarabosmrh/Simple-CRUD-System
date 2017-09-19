$mypic = $_FILES['upload']['name'];
$temp = $_FILES['upload']['tmp_name'];
$type = $_FILES['upload']['type'];

echo $mypic;
$name = $_POST['name'];

$email = $_POST['email'];

$Password = $_POST['Password'];

$cpassword = $_POST['cPassword'];


if ($name && $email && $Password && $cpassword ) {
	# code...
  if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
    # code...
  
  if (strlen($Password)>5) {
    # code...
  
      if ($Password == $cpassword ) {
   	# code...
   
         @mysql_connect("localhost" , "root" , "") or die("couldn,t connect ! ");
         mysql_select_db("newdb");

         $username =mysql_query("SELECT name FROM users WHERE name='$name'  ");
         $count = mysql_num_rows($username);
//


$remail =mysql_query("SELECT email FROM users WHERE email='$email'  ");
         $checkemail = mysql_num_rows($remail);
      
     if ($checkemail != "0") {
       # code...
        echo "this email has been used ! , try another email ! ";
         //
      }
    else {
             if ($count != 0) {
	                                    # code...
	                                 die("<b> ERROR !! .. username already exist , try another one ! ");
	                                 include("pages.php");
                              }

        else {

                    if ( ($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/png")){

                        move_uploaded_file($temp , "images/$mypic");
                       echo " pretty face ! <p> <img border ='1' width='70' height='70' src= 'images/$mypic'> <p>";  
          
                        // encrypt password
                        $passwordMd5 = md5($Password);
                      mysql_query("INSERT INTO  users (name , email , Password) VALUES ('$name' ,'$email' , '$passwordMd5' )");

                       $registered = mysql_affected_rows(); 

                       echo "$registered was inserted successfully ! ";
                       mysql_close();
            }

                      else {

                              echo "please choose pic  jpg or png or jpeg ";
  
   
                             }

           } 
    }
    }
                       else{
                         echo "password Doesn,t match ! "; }
                           }
                       else{

                            echo "please insert strong password great than 5 chars ! ";
                           }

   }
                        else{


                           echo "please type a valid email ! ";
                           }

  }
                          else { 
                            echo "you should complete the form ! ";
                             }