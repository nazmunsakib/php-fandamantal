<?php

function evenOrOdd($n){
    $result = ($n % 2 == 0) ? "{$n} is Even Number" : "{$n} is Odd Number";
    return $result;
}
echo evenOrOdd(201);

//Function Type hinting for aguman type 

function factorial(int $n){
    echo PHP_EOL;
    $value = 1;
    for($i = $n; $i>1; $i-=1 ){
        $value *=$i;
    }
    return $value;
}

echo factorial(4);
echo PHP_EOL;
// Accept unlimited aurgumant in function

function sum(...$n):int {
    $result = 0;
    for($i=0; $i<count($n); $i++){
        $result += $n[$i];
    }
    return $result;
}

echo sum(,90,10);