<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <body>
        <!-- WAY 1 -->
        <?php
        // Echo session variables that were set on previous page
        echo "Favourite color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favourite anime is " . $_SESSION["favanime"] . ".<br>";
        echo "Favourite animal is ". $_SESSION["favanimal"] . "<br>";
        ?>
        <!-- WAY 2   -->
        <?php
            print_r($_SESSION);
        ?>


    </body>
</html>