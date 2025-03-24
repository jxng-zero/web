<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//function date
date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");  
//function randome number
$numrand = (mt_rand());  
//remove old name
$type = strrchr($_FILES["image"]["name"],".");
//create new name
$newname = "picre".$date.$numrand.$type;
//create new folder
$target_file_new=$target_dir.$newname;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_new)) {
    echo "The file ".$newname. " has been uploaded.";

    $myfile = fopen("webdictionary.txt", "a") or die("Unable to open file!");
    $txt = $_POST['name'].",".$_POST['gender'].",".$_POST['age'].",".$_POST['studentid'].",".$_POST['year'].",".$_POST['phone'].",".$_POST['email'].",".$_POST['faculty'].",".$_POST['major'].",".$_POST['username'].",".$_POST['pass'].",".$newname."\n";
    fwrite($myfile, $txt);
    fclose($myfile);

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
<?php
 header( "location:login.php" );
 exit(0);
?>