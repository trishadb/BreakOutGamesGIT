<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <body> 
        <h1> <b> "Thanks for Sign Up" </b></h1>;
        
        <?php
        echo "Your account is created. " . "<br>";
        echo "User Id: " . $_SESSION['user_id'] . "<br>";
        echo "Username: " . $_SESSION['username'] . "<br>";
        echo "E-mail: " . $_SESSION['email'] . "<br>";
        echo "Address: " . $_SESSION['address'] . "<br>";
        echo "Phone No. " . $_SESSION['PhoneNumber'];
        ?>
    </body>
</html>


