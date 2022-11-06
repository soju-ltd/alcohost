<?php

echo "jello world";

$def1test = "<h1>ypopyppypypy</h1>"

?>

<!DOCTYPE html>
<head>
    <title>balls</title>
</head>
<body>

<?php echo "$def1test";

echo "<br><br>";

echo $def1test . "gegegg" . $def1test . "<br>";

echo $def1test;

$x = 10;
$y = 20;
function testfunction(){

    global $x,$y;
$y = $x + $y;


}
testfunction();
echo $y;


?>
</body>
