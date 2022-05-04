<?php
	
	if(isset($_REQUEST['submit'])){
		
		$date_of_birth = $_REQUEST['date_of_birth'];

		if($date_of_birth == ""){
			echo "Invalid DOB!";
		}else{
			echo $date_of_birth;
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>DOB Form</title>
</head>
<body>
		<form method="Request" action="dob.php">

		<fieldset>
			<h3>Date Of Birth</h3>
			<input type="date" name="date_of_birth" value="" /><br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>