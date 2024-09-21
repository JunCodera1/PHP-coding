<!DOCTYPE html>

<html>
    <body>
        <?php
            $d = mktime(22, 14, 42, 9, 21,2024);
            echo "Created date is " . date("Y-m-d h:i:sa", $d);
        ?>
    </body>
</html>