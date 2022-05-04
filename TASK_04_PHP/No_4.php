<!DOCTYPE html>
<html>
<body>
<?php

	function largest_number($number_1, $number_2, $number_3) {
		if ($number_1 > $number_2) {
			if ($number_1 > $number_3) {
				echo $number_1." is largest ";
			} else {
				echo $number_3." is largest ";
			}
		} else if ($number_2 > $number_3) {
				echo $number_2." is largest ";
			} else {
				echo $number_3." is largest ";
			}
	}

	largest_number(30,20,10);

?>
</body>
</html>
