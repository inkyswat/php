

<?php

function pre($value) {
	echo "<pre>";
		print_r($value);
	echo "</pre>";	
}	

function linebreak($linestobreak) {
	for ($i = 0; $i < $linestobreak; $i++) {
		echo "<br>";
	}
}
?>