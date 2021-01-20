<!DOCTYPE html>
<html>
<body>
<?php
$getallen = [676, 5345, 78657, 3, 46, 21, 47];
asort($getallen);
$laag_hoog = [3, 21, 46, 47, 676, 5345, 78657];
print_r($laag_hoog);
arsort($laag_hoog);
$hoog_laag = [78657, 5345, 676, 47, 46, 21, 3];
print_r($hoog_laag);
?>
</body>
</html>