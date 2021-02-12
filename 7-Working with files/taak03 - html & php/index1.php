<?php  
    require 'database.php';

    $leeftijd = 17;
?>
<html>
<head>
</head>
<body>

    <div class="menu">
        <?php include 'menu.php'; ?> <!-- Op deze regel wordt een menu ingevoegd -->
    </div>

    <div id="leeftijdChecker">
        <?php
            if($leeftijd < 16 ){
                echo "<h4>Je bent te jong om deze pagina te bekijken</h4>";
            }
            else {
                echo "<h4>Je bent oud genoeg om de pagina te bekijken</h4>";
            }
        ?>
    </div>

</body>
</html>