<?php
include 'database/connect.php'
?>  

<?php
$table = "<table>"
        . "<tr>"
        . "<th class='header'>Room Theme</th>"
        . "<th class='header'>Available</th>"
        . "<th class='header'>Book Now</th>"
        . "</tr>";
$sqlSelect = "SELECT * FROM ROOM;";
$result = mysqli_query($conn, $sqlSelect);

while ($row = mysqli_fetch_array($result)) {
    $id = row['room_id'];
    $avail = $row['available'];

    $table .= "<tr>"
            . "<td>" . $row['room_theme'] . "</td>";

    if ($avail == 0) {

        $table .= "<td class='full'> FULL </td>";
    } else {
        $table .= "<td class ='available'>" . $avail . "</td>"; 
    }
    $table .= "<td> <button id='tbl_".$id."' onClick='showSeats(this.id)' class='btn' type='submit' name='frmBook'/>Book</td>"
            . "</tr>";
}


$table .= "</table>";


//close result
mysqli_free_result($result);
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
        <script type="text/javascript"  src="javascript/reservations.js"></script>
        <title>Book Online</title>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div id="int">

            <p id="text1title">Online Booking</p>
            <ul id="price" style="list-style-type:none;" >
                <li> The price per person is $20 (INCLUDING TAX) with a minimum of 4 people per booking.</li>
                <br/>
                <li> Group sizes vary depending on room.</li>
                <br/>
                <li> $20 deposit per group required at time of booking.</li>
                <br/>

            </ul>
            <br/>
            <br/>
        </div>


        <br/>
        <br/>

        <div class="formGroup">
            <form action="php/bookProcess.php" method="post">
                <label>
                    <span>Number of people:</span>
                    <input class="input" type="text" name="numPeople"/>
                </label>
            </form>
        </div>

        <br/>
        <br/>
        <?php echo $table; ?>
        
      
        <!--<div id="returnData"></div>-->
        <?php include ('includes/footer.php'); ?>
    </body>
</html>
