<?php
$array = array(1, 5, 10, 7, 8, 9);
$dict = array("name" => "Shogher", "lastname" => "Baghryan", "age" => 22 );
$array1 = array("one", "thousand", "two", "autumn");
$MYtext = "hs shjj agagfgahaga dhdjf fdjsgfjsgfk abagagwidiewoi hdhajk";


function maximum($ar) {
  $maximum = $ar[0];
  for ($i = 1; $i < count($ar); $i++) {
    $maximum = ($maximum > $ar[$i]) ? $maximum : $ar[$i];
  }
  return $maximum;
}
function sum($ar) {
  $sum = $ar[0];
  for ($i = 1; $i < count($ar); $i++) {
    $sum += $ar[$i];
  }
  return $sum;
}
function average($ar) {
  $avg = sum($ar) / count($ar);
  return $avg;
}
function nameData($dict) {
  foreach ($dict as $key => $val) {
    echo $key. " - " . $val."\n";
  } 
  return "My name is ".$dict["name"]." ".$dict["lastname"].". I am ".$dict["age"]." years old.";
}
function maxLength($ar) {
  $length = strlen($ar[0]);
  for ($i = 1; $i < count($ar); $i++) {
    $length = ($length > strlen( $ar[$i])) ? $length : strlen($ar[$i]);
}
return $length;
}
function wordReplace($text) {
  $word = explode(" ", $text);
  for ($i = 0; $i < count($word); $i++) {
    if (strlen($word[$i]) > 5) {
      $word[$i] = substr($word[$i], 0, 5)."*";
    }
  }
  $text = implode(" ", $word);
  return $text;
}

function RandProd($count) {
  $product = 1;
  for ($i = 0; $i <= $count; $i++) {
    $prod = rand(0, 100);
    echo $prod." ";
    $product = $product * $prod;
  }
  return $product;
}
function drawInput($row, $column) {
  for ($j = 0; $j < $row; $j++) {
    echo "<div class='form-inline'>";
    for ($i = 0; $i < $column; $i++) {
      $char = rand(0, 10);
      echo "<input readonly type='number' class='form-control' name='item[]' value='$char'>";
    }
    echo '</div>';
  }
}


echo nameData($dict);
echo "\n\n\nReturn maximum element from given array";
echo maximum($array);
echo "\n\n\n";
echo sum($array);
echo "\n\n\n";
echo average($array);
echo "\n\n\n";
echo maxLength($array1);
echo "\n\n\nReplace with * when word length than 5 symbol. \n";
echo wordReplace($MYtext);
echo "\n\n\nRandom number product \n";
echo RandProd(7);
echo "\n\n\n";
echo drawInput(3, 3);

