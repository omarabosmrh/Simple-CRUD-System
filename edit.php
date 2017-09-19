
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
	<center>
<h3> Edit User : <?php echo $_REQUEST['names']; ?> </h3>
<form  method="post" action="change.php">

	<table border="0" width="60%">
		<tr> 
			<td width="30%">Name : </td> 
		    <td>
		     <input type="text" name="newname" value="<?php  echo $_REQUEST['names'] ; ?>">
		    </td>
	    </tr>
		
		<tr> 
			<td width="30%">Email : </td> 
		    <td>
		     <input type="text" name="newemail" value="<?php  echo $_REQUEST['emails'] ; ?>">
		    </td>
	    </tr>
		
		<tr> 
			<td width="30%">Password : </td> 
		    <td>
		     <input type="text" name="newpassword" value="<?php  echo $_REQUEST['passwords'] ; ?>">
		    </td>
	    </tr>
     
	</table>

     <input type="submit" name="savechanges" value="Update Info"/>
     <input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];  ?>"/>




	



</form>

</center>


<!-- footer -->
<div id="footer"> &copy  all right recerved 2017 <br/> Omar Gomaa </div>
</div>


</body>
</html>



