
<!DOCTYPE html>
<html>
<head>
	<title>..:: kodutööd ::..</title>
	
<link href="https://fonts.googleapis.com/css?family=Hi+Melody" rel="stylesheet">
<!---->
	<link rel="stylesheet" type="text/css" href="gfx/main.css">
	<link rel="stylesheet" type="text/css" href="gfx/styles.css">
</head>
<body>

<div class="wrapper">
	<div class="header">
		<div class="container header-container">
			<div class="row header__row">
				<div class="col-4 logo-col">
					<figure class="main-logo__frame">
						<img class="main-logo" src="gfx/php.png">
					</figure>
				</div>
				<div class="col-8 header-right-col">
					<h1 class="header__heading">Veebirakendused</h1>
					<h2 class="header__text">2018</h2>
					<h3 class="header__text">Siit leiab kodutööd, mis on aine raames olnud vaja teha</h3>
					<p class="header__quote"><em>“PHP as an object oriented programming language should be judged by how well it does the job, not on a preconceived notion of what a scripting language should or shouldn't do.”</em></p>
					<p class="header__quote"><em>― Peter Lavin, Object-Oriented PHP: Concepts, Techniques, and Code</em></p>
				</div>
			</div>
		</div>
	</div>
	<div class="main-content">
			<h2>Esimene kodutöö</h2>
<?php 
	include "helper.php";
	include "fns_and_classes.php";
			echo '
			$sisend = array("a","4/g","b"," ",",","c",
				array(1,2,3,"si","*\',"),"d","e",1,"“","1",2,"2","3","3",5,3.5,"2,5","ab,5","ba;4",0)
			'; // backslash on siin, et ülakoma saaks esitada veebis


			linebreak(1);
			echo "välja vaja sorteerida array elemendid, stringid laiali lammutada ja kõik andmetüübid eraldi alam array'desse";

			$sisend = array("a","4/g","b"," ",",","c",
				array(1,2,3,array(1,2,3,4),"si","*',"),"d","e",1,"“","1",2,"2","3","3",5,3.5,"2,5","ab,5","ba;4",0);

			$sorteeritud = array (
				'strings' => "",
				'integers' => "",
				'float_numbers' => "",
				'special_chars' => ""
			);

			linebreak(3);
			echo "kammime array läbi ja otsime mis seal on:";
			linebreak(1);

			$array_working = new array_tools;
//			$picked_arrays = $array_working->{'pick_arrays'}($sisend);
			$picked_strings = $array_working->{'pick_strings'}($sisend);
			pre($picked_strings);
//			$picked_strings = pick_strings($sisend);


			 ?>
		</div>	 
</div>
</body>
</html>