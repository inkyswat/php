<?php
// tingimuslaused IF

$arv1 = "mingi arv";
$arv2 = 11;

if($arv2 == 6) {
  echo $arv1;
} elseif ($arv2 == 4) {
  echo $arv2 . " on 4";
} elseif ($arv2 > 10 && !empty($arv1)) {
  echo "arv1 ei ole tühi ja arv2 on suurem kui 10";
}
else {
  echo $arv2 . " ei olnud 2";
}
 // tingimuslaused switch
echo "<br>";

$switch_input = 5;
switch ($switch_input) {
  case 4:
    echo "input ei ole 5";
    break;

  case 5:
    echo "input on 5";
    break;


  default:
    # code...
    break;
}

// ------------------------------------

 ?>
