<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<head>
 <style>
  /* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: linear-gradient(to bottom, #02269e,#01001f,#01154d);
}
.container {
  position: relative;
  hight: 100%
  width: 1500%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
</style>
</head>
<body>
    <br>
    <br>
    <div class="text-center text-light">
        <h2>Webdictionary</h2>
    </div>
    <div class="container mt-5">
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>Fullname</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Studentid</th>
                    <th>Year</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Faculty</th>
                    <th>Major</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
<?php
$json = file_get_contents('http://localhost/web55/jsondata.php');
$data = json_decode($json);
foreach($data as $keyjson){
    echo "<tr>";
    echo "<td>", $keyjson->name, "</td>";
    echo "<td>", $keyjson->gender, "</td>";
    echo "<td>", $keyjson->age, "</td>";
    echo "<td>", $keyjson->studentid, "</td>";
    echo "<td>", $keyjson->year, "</td>";
    echo "<td>", $keyjson->phone, "</td>";
    echo "<td>", $keyjson->email, "</td>";
    echo "<td>", $keyjson->faculty, "</td>";
    echo "<td>", $keyjson->major, "</td>";
    echo "<td>", $keyjson->username, "</td>";
    echo "<td>", $keyjson->pass, "</td>";
    echo "<td><img src='uploads/",$keyjson->image,"' width='100' height='100'></td>";
    echo "</tr>";
}
$checklogin=0;
foreach($data as $keylogin) {
    if($keylogin->username==$_POST['userid']and $keylogin->pass==$_POST['password'])
    {
        $checklogin=$keylogin->name;
    }
}
if($checklogin == 0){
   echo "<script language='javascript'> alert('[Username or Password is not correct]');
window.location='login.php';</script>";
}

?>

</table>
<input type="button"><a href="index.html">Exit</a>
</tbody>
</div>
</body>
</html>