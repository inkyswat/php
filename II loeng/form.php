<?php 
	include "helper.php";
	$host = "localhost";
	include "config.php"; // siit tulevad $db_user etc.
	$db_name = "oliverroots";

	$link = mysqli_connect($host,$db_user,$db_pass,$db_name) or die("<br>ei saanud ühendust => ".mysqli_error());

//pre($link);
//pre($_GET);

//pre($_SERVER); // näitab infot  mida server sisaldab


$first_select = "SELECT * FROM users";
$query_results = mysqli_query($link, $first_select);

echo '
<form>
	<table>
';
while ($result = mysqli_fetch_assoc($query_results)) {
	echo '
		<tr>
		<td>
			<input type="text" placeholder="Eesnimi" value="'.$result["firstname"].'"name="'.$result["id"].'[firstname]">
			<input type="text" placeholder="Perenimi" value="'.$result["lastname"].'"name="'.$result["id"].'[lastname]">
			<input type="text" placeholder="Vanus" value="'.$result["age"].'"name="'.$result["id"].'[age]">
		</td>	
	</tr>


	';
}
echo '
	<tr>
		<td>
			<input type="submit" name="action[add]" value="Salvesta">
			<input type="submit" name="action[update]" value="Uuenda">
			<input type="submit" name="action[rm]" value="Kustuta">
		</td>
	</tr>


	</table>
</form>

';


$form_data = $_GET;
/*
foreach ($form_data as $user_id => $user_data) {
	if($user_id == "action"){
		echo "Olen tegeveus: ".$user_data;
	} else {
		echo "<br> Kasutaja (ID: ". $user_id.") ".$user_data["firstname"]." ".$user_data["lastname"];
	}

}
*/
// UPDATE `users` SET `id`=[value-1],`firstname`=[value-2],`lastname`=[value-3],`age`=[value-4] WHERE 1

if (isset($form_data["action"]["update"])) {
pre($form_data);
unset($form_data["action"]); // viskab array'st action'i välja, et seda pole vaja
	foreach ($form_data as $user_id => $user_data) {
$update_sql = "UPDATE `users`
				SET `firstname` = '".$user_data["firstname"]."', 
					`lastname` = '".$user_data["lastname"]."',
					`age` = '".$user_data["age"]."'
				WHERE id='".$user_id."'";	// oluline on aru saada, et jutumärgid
			echo "<br>".$update_sql; // debugi jaoks kuvan loetavalt välja
			mysqli_query($link, $update_sql);	
	} 
}	
$first_select = "SELECT * FROM users";
$query_results = mysqli_query($link, $first_select);

?>


