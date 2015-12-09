<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/ContactPage.css"/>
        <link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <title>Contact Us</title>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>

        <p id="p1">CONTACT US</p>
        <p id="p2">Please email us with any questions or requests. We will try our hardest to respond ASAP!!!</p>

        <form id="form1">
            Name:<br><br><input type="text" name="Name"><br><br>
            Email:<br><br><input type="text" name="Email"><br><br>
            Subject:<br><br><input type="text" name="Subject"><br><br>
            <textarea rows="10" cols="80"> </textarea><br><br>
            <input type="submit" value="Submit"placeholder=>
        </form>

        <form id="form2">
            (204)-777-6977<br><br>

            escapehelp@gmail.com
        </form>

        <?php include ('includes/footer.php'); ?>
    </body>
</html>
