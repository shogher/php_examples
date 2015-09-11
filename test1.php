<?php
$mytext = "hs shjj agagfgahaga dhdjf fdjsgfjsgfk abagagwidiewoi hdhajk";
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

echo "\n\n\nReplace with * when word length than 5 symbol. \n";
echo wordReplace($MYtext);
echo "\n\n\nRandom number product \n";
echo RandProd(7);
echo "\n\n\n";
