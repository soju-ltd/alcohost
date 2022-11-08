<?php
include 'upload.php';

$returnlink = $msg2echo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alcoholic Host</title>
</head>
<body>

<h1>Alcoholic host</h1>
<p>30 minute file host</p>

<form action="upload.php" method="post" enctype="multipart/form-data">


<input type="file" name="FILE_UPLOAD" id="FILE_UPLOAD"><br><br>
<input type="submit" value="Upload" name="submit">
</form>

<?php

if($returnlink != ""){
    echo( "<h5>" . "Download Link:". $uploadlink . "</h5>");

}


?>
</body>
</html>
