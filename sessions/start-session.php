<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            // Set session variables
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Session variables are set.<br>";
            echo "Color : '". $_SESSION["favcolor"]. "'<br> Animal : '". $_SESSION["favanimal"];
        ?>
    </body>
</html>