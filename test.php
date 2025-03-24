<?php

$json_url = file_get_contents('http://localhost:80/web55/jsondata.php');
$data_arr = json_decode($json_url);
/*foreach($data_arr as $keyjson) {
  echo "name".$keyjson->name;
  echo " surname".$keyjson->surname;
  echo " password".$keyjson->gender. "<br>";
}*/

?>
<table>
     <tr>
       <td>name</td>
       <td>surname</td>
       <td>password</td>
     </tr>

     <? foreach ($data_arr as $keyjson) : ?>
     <tr>
       <td><? echo $keyjson[0]; ?></td>
       <td><? echo $keyjson[1]; ?></td>
       <td><? echo $keyjson[2]; ?></td>
     </tr>
     <? endforeach; ?>
   </table>

