<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);

echo "<hr> Show Array <hr><br>";
$lines = file('webdictionary.txt');
$count = 0;
foreach($lines as $line){
    echo $count.'.'.$line."<br>";
    $arr[]=explode(",",$line);
    $count += 1;
}

echo"<hr>";
echo $arr[0][0];
?>

<?php
alert("saved");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>