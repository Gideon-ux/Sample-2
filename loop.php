<?php
//looping in php
//
$students = array("Christian","David","Harrison","Nnena");
/*
$í = 0;

while ($i < 4){ 
    $student_number = $i + 1;
    echo "student $student_number is ".$students[$i]."\n";
    $i++;
}
 */

for ($i=0; $i<4; $i++){
    $student_number=$i+1;
    echo "student $student_number is ".$students[$i]. "\n";
}

?>
