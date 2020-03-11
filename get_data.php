<?php
$db= new SQLite3("../db/school.db");
function getStudent ($db, $Student_Id){
$content=$db->query("SELECT * FROM Student WHERE id ='$Student_Id'");
$row = $content->fetchArray();
print_r($row);
return $row;
}
$Student=getStudent($db,1);
print_r($Student);
echo"my name is". $Student['firstName'];
exit();

$res = $db->query("SELECT * FROM Student");


while ($rows= $res->fetchArray()){
    $Student[]=$rows;
}
foreach ($Student as $Student){
//echo "My name is ". $Student['firstName'] ." ". $Student['lastName'] .", I am in Primary ". $Student['classId'] . "\n";
}
//print_r ($Student);
?>
