<?php
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];

		if($username == " "){
			echo "Wrong User Name";
		}else{
			echo $username;
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="REQUEST" action="name.php">
		<fieldset>
			<h3>Name</h3> 
			<input type="name" name="name" value="" /></br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>