<?php

include "./backend/config.php";

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

        $sql = "INSERT INTO file_list (file_name,upload_date) VALUES ( ' " . htmlspecialchars($_FILES["FILE_UPLOAD"]["name"]). "','". time(). "')";
      // echo $sql;

        if ($conn->query($sql) === TRUE) {
           // echo "New record created successfully";
           // $uploadlink = "https://alcoholic.host/uploads/". htmlspecialchars($_FILES["FILE_UPLOAD"]["name"]);
            //http://127.0.0.1/alco_host/
            $uploadlink = "http://127.0.0.1/alco_host/uploads/". htmlspecialchars($_FILES["FILE_UPLOAD"]["name"]);
            $msg2echo = "Upload success";

          } else {
            $uploadlink = "Error: " . $sql . "<br>" . $conn->error;
          }

    }else{

        $msg2echo =  "Upload failed";


    }

}




}





?>
