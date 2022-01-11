<?php 

$number = (8 % 2 == 0) ? "Even Mumber":"Odd Number";

echo $number;

$snumber = (8 % 2 == 0) ? "Even Mumber":"Odd Number";
echo PHP_EOL;

$myname;

$name = isset($myname) ? $myname :"Nazmun Sakib";
echo $name;
echo PHP_EOL;
$m1 = "Sakib";
$name1 = $m1 ?? "Nazmun Sakib";

echo $name1;