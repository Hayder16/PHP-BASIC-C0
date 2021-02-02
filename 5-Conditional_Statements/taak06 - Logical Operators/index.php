<!DOCTYPE html>
<html>
<body>
<?php
$num1 = 6;
$num2 = 11;
if($num1 < 10 && $num2 > 5) {
    echo "Het getal zit tussen de 10 en de 5";
} else {
    echo "Het getal is groter dan 10 of kleiner dan 5";
}
if($num1 > 5 || $num2 > 10) {
    echo "<br>";
    echo "$num1 is groter dan vijf en $num2 is groter dan 10";
} else {
    echo "$num1 is kleiner dan 5 en $num2 is kleiner dan 10";
}
if($num1 < 10 xor $num2 > 10) {
    echo "<br>";
    echo "$num1 is kleiner dan 10 en $num2 is groter dan 10";
} else {
    echo "<br>";
    echo "De variabelen zijn beide gelijk";
}
if($num1 < 5 && $num1 > 12) {
    echo "<br>";
    echo "Beide variabelen zijn incorrect";
} else {
    echo "<br>";
    echo "Beide variabelen zijn correct";
}
?>
</body>
</html>