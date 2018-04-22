<?php 
/*
======================================
functions/classes
======================================
*/
class array_tools { 
//    public $aMemberVar = 'aMemberVar Member Variable'; 
    //public $pick_arrays = 'pick_arrays'; 
    
	// nopime sisendist välja array'd ja paneme nad eraldi array'sse
	function pick_arrays($input) {
		$array_counter = 0;
		$picked_arrays = array();
		$picked_array = array();
		foreach ($input as $value) {
			if (is_array($value)) {
				$picked_arrays[$array_counter] = $value;
				$array_counter++;
				$picked_array = $value;
			}
		}
		// kui sisendis pole array'sid tagastab false =>
		// võimaldab saadud array'st kontrollida lisa array'de olemasolu
		if ($array_counter == 0) {
			return false;
		// kui sisendis on 1 array tagastab selle array					
		} elseif ($array_counter == 1) {
			return $picked_array;
		// kui aga on rohkem tagastab array'de kogumi
		} else {
			return $picked_arrays;
		}
	}

	// nopime välja stringid, et neid uurida saaks
	function pick_strings($input) { 
		$array_counter = 0;
		$picked_strings = array();
		foreach ($input as $value) {
			if(is_string($value)) {
				$picked_strings[$array_counter] = $value;	
				$array_counter++;					
			}
		}
		return $picked_strings;
	}

	// selgitame välja ülejäänud andmetüübid ja lükkame vastavatesse array'desse
	function other_types() {
	}



} 

?>
