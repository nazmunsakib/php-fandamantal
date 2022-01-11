<?php

$fname = "Nazmun";
$lname = "Sakib";
$profession = "WordPress Developer";

printf("My name is %s $lname", $fname, $lname);

echo PHP_EOL;
echo PHP_EOL;

//Printf with serialize and  data type
printf('My Name is %2$s %1$s and my professon is %3$s', $lname, $fname, $profession);

echo PHP_EOL;
echo PHP_EOL;

//dacimal to Binary With printf
printf('The 10 Binary is %1$b', 10);

echo PHP_EOL;
echo PHP_EOL;


//print 3 digit after (.)
$n = 134.63678;
printf('%.3f', $n);

echo PHP_EOL;
echo PHP_EOL;

$nn = 82;
$nm = 8234;

printf( " %05d ", $nn);
echo PHP_EOL;
printf("%05d", $nm);

