<!DOCTYPE html>
<html>
    <body>
        <?php
            $startdate = strtotime("Saturday");
            $enddate = strtotime("+6 weeks", $startdate);

            while ($startdate < $enddate) {
                echo date("M d", $startdate) . "<br>";
                $startdate = strtotime("+1 weeks", $startdate);
            }
        ?>

        <?php
            $d1 = strtotime("Aug 04");
            $d2 = ceil(($d1 - time()) /60/60/24);
            echo "There are " . $d2 . " days until 4th of August.";   
        ?>
    </body>
</html>