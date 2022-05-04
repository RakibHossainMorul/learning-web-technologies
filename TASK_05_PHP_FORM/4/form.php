<?php
	
	if(isset($_REQUEST['Submit'])){

        if(isset($_REQUEST['gender'])){

            if($_REQUEST['gender']=="Male"){
                $error="Valid Gender";
                $mGender= 'checked' ;
            }
            if($_REQUEST['gender']=="Female"){
                $error="Valid Gender";
                $fGender= 'checked' ;
            }
            if($_REQUEST['gender']=="Other"){
                $error=" Valid Gender";
                $oGender= 'checked' ;
            }

        }
        else{
            $error="Invalid Gender";
            
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Gender</title>
</head>
<body>
	<form method="Request" action="gender.php">
		<fieldset> 
		<h3>Gender</h3><br>
       <input type="radio" name="gender" value="" placeholder=""<?php print $mGender?>> Male
       <input type="radio" name="gender" value="" placeholder=""<?php print $fGender?>> Female
       <input type="radio" name="gender" value="" placeholder=""<?php print $oGender?>> Other </br>
	   <input type="submit"value="Submit">
	   <td><?=$error?></td>
       </fieldset> 
	</form>
</body>
</html>