<!DOCTYPE html>
<html>
<body>
<?php
$test1 = 10;
$test2 = 6;
if($test1!=$test2){
    echo "<br>";
    echo "Ongelijk";
}
if($test1!==$test2){
    echo "<br>";
    echo "identiek";
}
if($test1>$test2){
    echo "<br>";
    echo "test1 is groter dan test2";
}
if($test1>=$test2){
    echo "<br>";
    echo "test1 is groter of gelijk aan test2";
}
?>
</body>
</html>