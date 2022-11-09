<?php
require 'upload.php';

$returnlink = $msg2echo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./resources/style.css">
    <title>Alcoholic Host</title>
</head>
<body>
<div>
<h1 class="colour">alcoholic.host</h1>
<h2 class="colour">30 minute file host - created by <a href="https://soju.me">4baz | soju</a></h2>

<form   action="" method="post" enctype="multipart/form-data">


<input class="epik-button colour"  type="file" name="FILE_UPLOAD" id="FILE_UPLOAD">
<input class="epik-button"  type="submit" value="Upload" name="submit">
</form>
<script>

    function copy(){
        // Get the text field
        var copyText = document.getElementById('uplodlink');

        // Select the text field
      //  copyText.innerHTML();
     //   copyText.setSelectionRange(0, 99999); // For mobile devices

         // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.innerHTML);



    }

    </script>
<?php
if($returnlink != "" && $uploadlink !=""){
    echo( " <h2>Download Link:</h2><h2 id=\"uplodlink\" onclick=\"copy()\">". $uploadlink . "</h2>
    ");

}else{
    echo $returnlink;

/*    if($uploadlink === ""){
        echo $uploadlink;
    } else{
echo $returnlink;
    }*/
}
?>

<br><br><br>
<p><a href="./tos.html" class="colour">Terms of service</a></p><br><br>
<img src="./resources/feet.jpg" width="400px" height="200px"><p class="colour">Amog us</p><br><br>
<p><a style="color:aquamarine" href="https://discord.gg/2fwhZVbREv">Join the Discord</a></p>
<h4 class="colour">A Funky upload beat:</h4>
<audio controls autoplay loop>
  <source src="./resources/BOTA.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>



</div>
</body>
</html>
