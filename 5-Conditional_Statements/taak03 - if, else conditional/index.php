<!DOCTYPE html>
<html>
<body>
<?php
$test1 = 3;
$test2 = 6;
if($test1 == $test2){
    echo "<br>";
    echo "De vergelijking is gelijk";
}
else {
    echo "<br>";
    echo "De vergelijking is niet gelijk";
}
if($test1 === $test2) {
    echo "<br>";
    echo "De vergelijking is identiek";
}
else {
    echo "<br>";
    echo "De vergelijking is niet identiek";
}
if($test1 > $test2) {
    echo "<br>";
    echo "Test1 is groter dan test2";
}
else {
    echo "<br>";
    echo "Test1 is kleiner dan test2";
}
if($test1 >= $test2) {
    echo "<br>";
    echo "Test1 is groter of gelijk aan test2";
}
else {
    echo "<br>";
    echo "Test1 is kleiner of gelijk aan test2";
}
?>
</body>
</html>