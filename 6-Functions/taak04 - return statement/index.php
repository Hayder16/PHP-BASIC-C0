<!DOCTYPE html>
<html>
<body>

<?php

function geefTienProcent(){
    $koopprijs = 75;
    $korting = 10;
    $kortingEuro = $koopprijs * $korting / 100;
    $resultaat = $koopprijs - $kortingEuro;

    return $resultaat;
}
echo geefTienProcent();

?>

</body>
</html>