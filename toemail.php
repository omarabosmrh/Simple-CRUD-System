

<form method="post" action="">
    
    <table border="1" width="25%">


    	<tr>
    		<tr><td width="10" > TO : </td> <input type="text" name="to" size="20" value=" <?php echo $_REQUEST['emails']; ?>"/> </td> </tr>
    		<tr><td width="10" > Subject : </td> <input type="text" name="subject" size="20" /> </td> </tr>
    		<tr>
    			<td width="10" > Message : </td> <textarea name="message" cols="30" rows="3"/></textarea> </td>
        </tr>
    </table>
    <p> <input type="submit" name="submit" value ="send email"/> <p>

</form>


<?php 


if (isset($_REQUEST['submit'])) {
	# code...

	$to =$_REQUEST['to'];
	$subject =$_REQUEST['subject'];
	$body =$_REQUEST['message'];
    

    $from ="omarabosmrh@gmail.com";
    $headers="From : $from";

    if ($to && $subject && $body) {
    	# code...

     mail($to, $subject, $body,$headers);

     echo "your mail has been sent successfully ";

     header("Refresh:3; url=http://www.fb.com");
    }

    else {

    	echo "please insert fucken inputs";
    }


}



?>