<?php

$targetdir = "uploads/";


$uploadok = 1;

$msg2echo = "";

$uploadlink = "";

if(isset($_POST["submit"])){
    $target = $targetdir . basename($_FILES["FILE_UPLOAD"]["name"]);

    $fileext = strtolower(pathinfo($target,PATHINFO_EXTENSION));

// check file size
    $sizecheck = $_FILES["FILE_UPLOAD"]["size"];

    if ($sizecheck == false){

        $uploadok = 0;
        $msg2echo = "Upload failed mannnnn L bozo + ratio + monarch better n shiz anyway (but u dont got access broke ahh goofy L bozo";

    }else if ($sizecheck > 524288000){
        $uploadok = 0;
        $msg2echo = "File must be under 500MB sorry man";
    }


//check if file with that name exists

if (file_exists($target)){

    $msg2echo = "File with this name already exists";
    $uploadok = 0;
}


if($uploadok == 0){
    $msg2echo = "Upload Failed"
;}else{

    if(move_uploaded_file($_FILES["FILE_UPLOAD"]["tmp_name"],$target)){

        $uploadlink = "https://alcoholic.host/uploads/". htmlspecialchars($_FILES["FILE_UPLOAD"]["name"]);


    }else{

        $msg2echo =  "Upload failed";


    }

}




}





?>
