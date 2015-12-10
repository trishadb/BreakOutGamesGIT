<?php
include 'services/connect.php';
?>  

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/roomTable.css"/>
        <link rel="stylesheet" type="text/css" href="css/BookOnlinePage.css"/>
        <link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Creepster' rel='stylesheet' type='text/css'>
        <title>Book Online</title>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <br/>
        <br/>

        <div class="formGroup">
            <form action="services/submitreservation.php" method="post" accept-charset="utf-8">
                <label>
                    <span>Number of people:</span>
                    <input type="number" id="numPeople" name="num_people"/>
                </label>
            </form>
        </div>
        <br/>
        <br/>
        <?php include ('services/onlineBookTable.php');?>
        <?php include ('includes/footer.php'); ?>
    </body>
</html>
