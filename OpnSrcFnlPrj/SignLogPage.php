<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign-In</title>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/SignLogPage.css"/>
        <link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>	
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

        <script type="text/javascript" src="javascript/script.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div id="h1">
            <h1 id="t">Please sign up/log in here</h1>
        </div>

        <form name="signLog" id ="signLog" action="SignLogPage.php"  onsubmit="return fillIt()" method="post">     
            <table>
                <h1><b>Log In</b></h1>
                <tr><td><B>Username:</B></td><td><input type="text" name="username" id="username" class="username"</tr>
                <tr><td><B>Password:</B></td><td><input type="password" name="password" id="password" class="password"</input></td></tr>
                <br/>

                <tr>
                    <td><input type="submit" value="Log In"/>
                    <td><input type="reset" value="Reset"/>
                </tr>

            </table>
        </form>


        <form name="signLogin" id ="signLogin" action="SignLogPage.php"  onsubmit="return fillMe()" method="post"> 
            <table>
                <h1><b>Sign Up</b></h1>
                <tr><td><B>Username:</B></td><td><input type="text" name="user" id="user" class="user"></tr>
                <tr><td><B>Password:</B></td><td><input type="text" name="pass" id="pass" class="pass"></input></td></tr>
                <tr><td><B>Email:</B></td><td><input type="text" name="email" id="email" class="email"></input></td></tr>
                <tr><td><B>Address:</B></td><td><input type="text" name="add" id="add" class="add"></input></td></tr>
                <tr><td><B>Phone Number:</B></td><td><input type="text" name="PhoneNumber" id="PhoneNumber" class="PhoneNumber"></input></td></tr>
                <br/>

                <tr>
                    <td><input type="submit" value="Sign Up"/>
                    <td><input type="reset" value="Reset"/>
                </tr>

            </table>
        </form>

        <?php include ('includes/footer.php'); ?>
    </body>
</html>
