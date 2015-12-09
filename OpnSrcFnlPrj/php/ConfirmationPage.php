<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <body> 
        <h1> <b> "Thanks for your Reservation" </b></h1>;
        
        <?php
        echo "Dear " . $_SESSION['first'] . $_SESSION['last'] . "<br>";
        echo "<\t>" . "Your Reservation is Confirmed. Follow down here to look for details." . "<br>" . "<br>";
        echo "User Id: " . $_SESSION['user_id'] . "<br>";
        echo "Room_Id: " . $_SESSION['room_id'] . "<br>";
        echo "Room Location: " . $_SESSION['room_name'] . "<br>";
        echo "Room Type: " . $_SESSION['room_type'] . "<br>";
        echo "Date: " . $_SESSION['date'] . "<br>";
        echo "Time: " . $_SESSION['time'] . "<br>";
        echo "Card Type: " . $_SESSION['card_type'] . "<br>";
        echo "Phone No." . $_SESSION['phone'] . "<br>";
        echo "Price: " . $_SESSION['price'] . "<br>";
        echo "E-mail: " . $_SESSION['mail'] . "<br>";
        ?>
    </body>
</html>


