<!DOCTYPE html>
<html>
    <body>
        <?php
            $d = strtotime("11:04am September 15 2024");
            echo "Created a date " . date("Y-m-d h:i:sa", $d);
        ?>
    </body>
</html>