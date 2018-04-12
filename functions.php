<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php

// funktsioonid võivad kas tagastada midagi või mitte
// function liida($arv1, $arv2) {
//   if (is_numeric($arv1) && is_numeric($arv2) {
//   } else {
//   }
// }
//   echo liida(4,3);
//

function pre($value) {
  echo "<br>";
  echo "<pre>";
  print_r($value);
  echo "</pre>";
}

$nimed = "
  Margus.Pokrovski,
  Merilin.Sellik,
  Enriko.Ojala,
  Indrek.Viiret,
  Sofia.Slomka,
  Andre.Aru,
  Kaspar.Koppelmaa,
  Kadri.Varipuu,
  Erki.Nappus,
  Erik-Geiro.Lilleorg,
  Ragnar.Neljand,
  Sander.Hirse,
  Gerli.Liiv,
  Janika.Kabur,
  Reino.Ristissaar,
  Annemarii.Hunt,
  Oliver.Roots,
  Katrin.Bulkina,
  Annelise.Randmaa";

$nimed_array = explode(",", $nimed);

foreach ($nimed_array as $key => $name) {
  $ilmatuhi_name = str_replace(" ", "", $name);
  $nimed[$key] = $ilmatuhi_name;
}
;
<?= $sfuafa; // lühike echo
echo "Täna on ". date("d.M.Y");
echo '<ul>';
foreach ($nimed_array as $key => $name) {
  $name = strtolower($name);
  echo '<li>'.$name.'</li>';

}
echo "</ul>";


 ?>
