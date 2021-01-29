<!DOCTYPE html>
<html>
<body>
<?php
$prod_besteld = 9;

if($prod_besteld < 10) {
    $prijs = 1.50;
    echo "<br>";
    echo "De prijs is 1.50 per product";
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo "<br>";
    echo "De prijs is 1.25 per product";
} else {
    $prijs = 1.00;
    echo "<br>";
    echo "De prijs is 1.00 per product";
}
$prod_besteld = 15;

if($prod_besteld < 10) {
    $prijs = 1.50;
    echo "<br>";
    echo "De prijs is 1.50 per product";
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo "<br>";
    echo "De prijs is 1.25 per product";
} else {
    $prijs = 1.00;
}
$prod_besteld = 23;

if($prod_besteld < 10) {
    $prijs = 1.50;
    echo "<br>";
    echo "De prijs is 1.50 per product";
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo "<br>";
    echo "De prijs is 1.25 per product";
} else {
    $prijs = 1.00;
    echo "<br>";
    echo "De prijs is 1.00 per product";
}
?>
</body>
</html>