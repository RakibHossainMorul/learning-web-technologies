<!DOCTYPE html>
<html>
<body>
<?php


	function number_check($number) {
		if ($number%2 == 0) {
			echo $number." Even number";
		} else {
			echo $number." Odd number";
		}
	}

	number_check(20);

?>
</body>
</html>
