<!DOCTYPE html>
<?php 
    require 'database.php'; 

    $leeftijd = 17;
?>
<html>
<head></head>
<body>

    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>

    <div id="isMeerderJarig">
        <?php 
            if($leeftijd < 18){
                echo "<h4>Je bent niet oud genoeg om de website te bekijken</h4>";
            }
            else{
                echo "<h4>Je bent oud genoeg om de website te bekijken</h4>";
            }
        ?>
    </div>

</body>
</html>