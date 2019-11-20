<?php
$eenheid=array(500, 200, 100, 50, 20, 10, 5, 2, 1);
$getal= intval($argv[1]);
foreach ($eenheid as $key => $value) {
  if ($getal > $value || $getal==$value) {
    $over=floor($getal/$value);
    $getal=$getal%$value;
    print($over. "x". $value ." EURO".PHP_EOL);
  }
}
$getal1=round(intval(($argv[1]-floor($argv[1]))*100)/5 )*5;
$cent=array(50,20,10,5);
foreach ($cent as $key => $value) {
  if ($getal1 >$value || $getal1==$value) {
    $over=floor($getal1/$value);
    $getal1=$getal1%$value;
    print($over. "x". $value ." CENT".PHP_EOL);

}
}
