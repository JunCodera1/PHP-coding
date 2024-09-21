<!DOCTYPE html>
<html>
    <body>
        <?php
            $d = strtotime("11:04am September 15 2024");
            echo "Created a date " . date("Y-m-d h:i:sa", $d) . "<br>";

            $d = strtotime("tomorrow");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $d = strtotime("next Saturday");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $d = strtotime("+ 3 Months");
            echo date("Y-m-d h:i:sa", $d) . "<br>";
        ?>
    </body>
</html>