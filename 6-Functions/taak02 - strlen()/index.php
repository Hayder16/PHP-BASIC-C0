<!DOCTYPE html>
<html>
<body>

<?php

function mijnNaamIsGroot() {

$voornaam = "Hayder";
$achternaam = "Abidi";
$geheleNaam = strtoupper("Mijn naam is " . $voornaam . " " . $achternaam);
echo $geheleNaam;

}

mijnNaamIsGroot();

?>

</body>
</html>