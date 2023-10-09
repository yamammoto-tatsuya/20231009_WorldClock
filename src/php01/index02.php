<?php
$item = "javascript";
echo $item;

const FELANGUAGE = "vue.js";
echo FELANGUAGE;

$number = 20;
echo $number;
echo "<br />";
$hello = "こんにちは";
echo $hello;
echo "<br />";
$name = "TanakaJiro";
$last_name = "Yamada";
$first_name = "saburo";
echo $name;
echo "<br />";
echo $last_name . $first_name;
echo "<br />";
echo 10 + 8;
echo 18 - 6;
echo 5 * 9;
echo 45 / 9;
echo 50 % 9;
echo "<br />";
$a = 15;
$b = 3;
$c = $cc = 5;

$na = $a /= $c;
$nb = $b *= $c;
echo $na;
echo "<br />";
echo $nb;
echo "<br />";
$aa = 20;
echo $aa >= $b;
echo "<br>";
echo (10 < $aa && $aa < 30);
echo "<br>";
$bb = $dd = 10;
echo ++$bb;
echo "<br>";
echo $dd++;
echo "<br>";
echo --$c;
echo "<br>";
echo $cc--;
echo "<br>";
if ($a = 5){
    echo "\$aは5です";
}
echo "<br>";
if ($b == 5){
    echo "\$bは5です";
}else{
    echo "\$bは5以外です";
}
echo "<br>";
$people = "fulea";
switch ($people){
    case "taro":
    echo "太郎です";
    break;
    case "fulea":
    echo "フレアです";
    break;    
}
echo "<br>";
$e = 7;
$result = ($e == 7) ? "TRUE" : "FALSE";
echo $result;

function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 4);
echo $total;
