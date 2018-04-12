<?php
echo "<br>
<h3>for</h3>";
//for
for($i=1; $i<10; $i++){
  echo "$i ";
  echo "Tere<br>";
}

echo "<br>
<h3>foreach</h3>";

// foreach
$foreach_massiiv = array('väärtus', "keskel" => 'väärtus_2', 'väärtus_3');
foreach ($foreach_massiiv as $key => $value) {
  echo '<br>minu võti on: #' . $key. ' ja väärtus on = ' . $value;
  if ($key == 'keskel') {
    echo "<br>olen keskel!";
  }
  else {

  }
}
echo "<br>
<h3>while</h3>";
// while
while ($a != 10) {
  echo "<br>$a";
  $a++;
}
echo "<br>
<h3>Do while</h3>";
// do while
$temp = 1;
do {
  $temp++;
  echo "<br>".$temp;
} while ($temp < 10);
  echo "<br>".$temp;



//====================
?>
