<?php
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['email'];

		if($email == " "){
			echo "invalid email!";
		}else{
			echo $email;
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Email</title>
</head>
<body>
	<form method="REQUEST" action="email.php">
		<fieldset>
			<h3>Email</h3> 
		<input type="email" name="email" value="" /><br>
		<input type="submit" name="submit" value="Submit">
	</fieldset>
	</form>
</body>
</html>