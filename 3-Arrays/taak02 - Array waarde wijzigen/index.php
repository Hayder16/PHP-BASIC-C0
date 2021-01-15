<!DOCTYPE html>
<html>
<body>
<?php
$myDogNames = ["<li>Rex</li>", "<li>Bullet</li>", "<li>Tank</li>"];
echo $myDogNames[0] . $myDogNames[1] . $myDogNames[2] . "<br>";
$myDogNames[1] = "<li>Spike</li>";
echo $myDogNames[0] . $myDogNames[1] . $myDogNames[2];
?>
</body>
</html>