<!DOCTYPE html>
<html>
<body>
<?php

	function display_odd_number() {
		echo "Display All Odd Numbers Between 10 to 100: </br>";
		for ($s=10; $s<=100; $s++) {
			if ($s%2 != 0) {
				echo $s."</br>";
			}
		}
	}

	display_odd_number();

?>
</body>
</html>
