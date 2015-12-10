<?php
include 'database/connect.php';
?>  

<?php
$table = "<table>"
        . "<tr>"
        . "<th class='header'>Room Theme</th>"
        . "<th class='header'>Status</th>"
        . "<th class='header'>Book Now</th>"
        . "</tr>";
$sqlSelect = "SELECT * FROM ROOM;";
$result = mysqli_query($conn, $sqlSelect);


while ($row = mysqli_fetch_array($result)) {
    $id = $row['room_id'];
    $status = $row['status'];
    $cap = $row['capacity'];

    $table .= "<tr>"            
            . "<td>". $row['room_theme'] . "</td>"
            . "<td class ='avail'>" . $status . "</td>"
            . "<td><button onclick=\"sendReservation('".$id."');\">Book</button></td>"
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
        <?php echo $table; ?>
        <?php include ('includes/footer.php'); ?>
    </body>
</html>
