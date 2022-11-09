<?php
include "config.php";

//SELECT MIN(id) as min  FROM `file_list`

//establish minimum file id

$setup_query = "SELECT MIN(id) as minn  FROM file_list";
$querr = $conn->query($setup_query);
$querrdta =  $querr->fetch_assoc();
$minrow = $querrdta['minn'];
//echo $minrow;

$cnt = "SELECT COUNT(*) as total from file_list";

$curr_count = $conn->query($cnt);

$data =  $curr_count->fetch_assoc();


$totalrows = $data['total'] + $minrow;

echo "upload count: ". $data['total'] . "<br><br><br>";

//echo strtotime("now") ."   ". strtotime("now + 30 minutes") . "<br>";


for($i = $minrow;  $i <= $totalrows; $i++){

    $base_query =   "SELECT * FROM file_list WHERE id=$i";

 $result =   $conn->query($base_query);

    while($row = $result->fetch_assoc()) {

        echo "-------------------------------------------------------------------------------<br>";

        echo "id: " . $row["id"]. " - filename: " . $row["file_name"]. " - upload date: " . $row["upload_date"]. "<br> ";



 //  $up30 =  $row["upload_date"] + "1800";
 //   echo "<br><br> test outpuut. upload+30 minutes =".$up30. "<br>";
//check time
        if(strtotime("now") > $row["upload_date"] + "1800"){

                //delete file
                $str ="\alco_host\uploads\ ".$row["file_name"];
                $fpath = str_replace(' ', '', $str);

                //$fpath = str_replace("test",$row["file_name"],"uploads/test");

echo $fpath . "<br>";
$pth = getcwd() . $fpath; // Save the current directory
echo getcwd() . $fpath;
//chdir("uploads");
//echo getcwd();
//chdir($old); // Restore the old working directory
$base_dir = realpath($_SERVER["DOCUMENT_ROOT"]);
if(unlink($base_dir . $fpath)){

                    $del_query = "DELETE FROM file_list WHERE id=$i";

                    if ($conn->query($del_query) === TRUE) {
                        echo "<p style=' color:red;'>- FILE & RECORD DELETED</p> <br>";
                    } else {
                        echo "Error deleting record/file: " . $conn->error;
                      }



                }

                // if file deleted delete row



            echo "<p style=' color:red;'>file more than 30minutes old</p> <br>";

        }else{
            echo "<p>file less than 30minutes old</p> <br>";

        }


     //   echo "---------------------------------------------------------------------------------<br>";

    }









}


?>
