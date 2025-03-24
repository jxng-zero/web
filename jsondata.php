<?php
$lines = file('webdictionary.txt');
$count = 0;
foreach($lines as $line) {
    $count += 1;
   
    $arr1=explode(",",$line);
    $arrtest[]=explode(",",$line);
    $arrfull['row'.$count]=array(
        "name"=>$arr1[0],
        "gender"=>$arr1[1],
        "age"=>$arr1[2],
        "studentid"=>$arr1[3],
        "year"=>$arr1[4],
        "phone"=>$arr1[5],
        "email"=>$arr1[6],
        "faculty"=>$arr1[7],
        "major"=>$arr1[8],
        "username"=>$arr1[9],
        "pass"=>$arr1[10],
        "image"=>$arr1[11]);
       
}
    echo json_encode($arrfull);

?>