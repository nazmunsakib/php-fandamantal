<?php 
$students = array("Nazmun", "Sakib", "Arif", "Jamal", "Kamal" );

$student = count($students);

// for($i=0; $i<$student; $i++){
//     echo $students[$i]."\n";
// }
echo PHP_EOL;

for($i= $student-1; $i>= 0; $i--){
    echo $students[$i]."\n";
}

//array_shift(""); //Remove First element from array
//array_pop(""); //Remove last element from array
//array_unshift(""); //Add data to be array first element
//array_push(""); //Add data to be array last element

//array_kyes() // Drict print on assotiave array key
//array_values() // Drict print on assotiave array value

//explore(", ", "your strings....") //Explore use for create string to array
//join(", ", $AarrayName ) //Explore use for create string to array

//preg_split('/(, |,)/' "String----) // Use for make string to array by multiple dalimiter

//array_slice($arrayName, startIndex, endendix)
//array_slice($arrayName, startIndex, endendix, true) // use for copy some data from array
//array_spice($arrayName, startIndex, endendix) // use for cut some data from array