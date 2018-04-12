<?php
// muutuja
  $muutuja = 10;
  $state = true;
  $summa = 2 + 2;
  $sonum = "See on üks sõnum: ";

  $muutuja ++;
  echo $muutuja;
  echo "<br>";
  echo $sonum . "Tere!";
  $sonum .= " see on veel üks \" sõnum"; // saab liita kokku stringe
  echo "<br>";
  echo $sonum;
  echo "<br>";
  echo "<br>";

  $bool = false;
  $double = 2.45;
  $array = [
    "esimene",
    true,
    7,
    8.65
  ];
var_dump($array);

/*
&&  AND
||  OR
!   NOT
*/
echo "<br>";
if (!$bool) {
  echo "pole tõsi";
}

// ========================

// muutujate skoobid
/*
unset

*/

echo "<br>";

$lause = "See lause on kirjutatud arvutiga";
$length = strlen($lause);
echo $length;
$lause = strtoupper($lause);
echo $lause;
$asenda = "Mina olen esimene";
echo "<br>";
echo $asenda;
$asendatud = str_replace(" ", "", $asenda);
echo "<br>";
echo $asendatud;

$array_1 = [
  "sõna",
  2
];
$array_2 = [
  "esimene" => "number üks!",
  "teine" => 2.5,
  "massiiviindeks" => $array_1
];
echo "<br>";
echo $array_2["esimene"];
echo "<pre>"; // pre aitab kuvada massive paremini
echo "<br>";
  print_r($array_2);
echo "</pre>";
// in_array() otsib ainult 1 dimensioonilisest massiivist

$kogus = array(1,2,3,4,5,6,7,8);
echo "<br>";
echo implode(", ", $kogus); // CSV failide analüüsimiseks

$sisend = "1, 2, 3, 4, 5, 6, 7";
$sisend_array = explode(",", $sisend);

 ?>
