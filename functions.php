<?php
/*$array = array(1, 5, 10, 7, 8, 9);
$dict = array("name" => "Shogher", "lastname" => "Baghryan", "age" => 22 );
$array1 = array("one", "thousand", "two", "autumn");
$MYtext = "hs shjj agagfgahaga dhdjf fdjsgfjsgfk abagagwidiewoi hdhajk";
*/

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
function postData($_POST) {
  $matrix = $_POST['item'];
  $sum = $matrix[0] + $matrix[4] + $matrix[8];
  $max = maximum($matrix);
  $t_summ = sum($matrix);
  if ($sum == $_POST['result'][0] && $max == $_POST['result'][1] && $t_summ == $_POST['result'][2]) {
      echo "YOUR ANSWER IS RIGHT";
    } else {
    echo "TRY AGAIN";
  }
}
function getPlural($singular) {
  $o = strlen($singular);
  $m = substr($singular, $o-1, 1);
  if ($m == "s" || $m == "z" || $m == "ch" || $m == "sh" || $m == "x") {
    return $singular."es";
  } else if ($m =="y") {
    $n =substr($singular, 0, $o-1);
    return $n."ies";
  } else {
    return $singular."s";
  }
}
function printOddEven($n) {
  for ($i=1; $i<$n; $i++) {
    if ($i%2 == 1){
      $k = $i+1;
      echo $i."  ".$k."\n" ;
    }

  }
}
function fibonachi($n) {
  $f = array();
  $f[0] = 0;
  $f[1] = 1;
  for ($i=2; $i<$n; $i++) {
    $count = count($f);
    $tmp = $f[$count-2]+$f[$count-1];
    array_push($f, $tmp);
  }
  print_r ($f);
}
function pythagoreanTriple($n) {
  for ($i=1; $i<$n; $i++) {
    for ($j=1; $j<$i; $j++) {
      for ($k=1; $k<$i; $k++) {
        if ($i*$i == $j*$j + $k*$k) {
          echo $i."-".$j."-".$k."\n";
        }
      }
    }
  }
}
function isAnagram($a, $b) {
  $ar = str_split ($a);
  $br = str_split ($b);
  if (strlen($a)===strlen($b)) {
    $k=0;
    for ($i=0; $i<count($ar);$i++) {
      for ($j=0;$j<count($br); $j++) {
        if ($ar[$i] == $br[$j]) {
        $k++;
        }
      }
    }
    if ($k == count($ar))  {
      echo "true";
    } else {
      echo "false";
    }
  } else {
    echo "false";
  }
}
function changeImage($directory) {
  $photos = scandir($directory);
  unset($photos[0]);
  unset($photos[1]);
  $count = count($photos);
print_r($photos);
print_r($count);
  $i = rand(0, $count);
  echo '<img src=\''.$photos[$i].'\' height="200" width="200">';
}



/*echo nameData($dict);
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
echo "\n\n\n";
echo getPLural("pet");
echo "\n\n\n";
echo printOddEven(20);
echo "\n\n\n";
echo fibonachi(30);
echo "\n\n\n";
echo pythagoreanTriple(20);
echo "\n\n\n";
echo isAnagram("lamp","lmap");
echo "\n\n\n";
echo "\n\n\n";
echo isAnagram("lampk","lmap");
echo "\n\n\n";
echo changeImage("photos");
echo "\n\n\n";
~            */

