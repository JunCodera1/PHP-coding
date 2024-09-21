<!DOCTYPE html>

<html>
    <body>
        <?php
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);

            $password = htmlspecialchars($_POST['password']);

            // Show data

            echo "Welcome, ". $name . "!<br>";
            echo "Your email address is: ". $email . "!<br>";
            echo "Password: ". $password;
        ?>
    </body>
</html>