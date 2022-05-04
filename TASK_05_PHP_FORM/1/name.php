<?php
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];

		if($username == ""){
			echo "Wrong User Name";
		}else{
			echo $username;
		}

	}
?>