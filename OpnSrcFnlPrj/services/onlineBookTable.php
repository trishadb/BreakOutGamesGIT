<?php
include 'connect.php';

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
            . "<td><button onclick=\"sendReserv('".$id."');\">Book</button></td>"
            . "</tr>";
}
$table .= "</table>";
//close result
mysqli_free_result($result);

echo $table;


