<?php
include 'connect.php';

//insert code to database
//source: http://labs.jonsuh.com/jquery-ajax-php-json/
if (is_ajax()) {
//Checks if action value exists
    if (isset($_POST["roomid"]) && $_POST["numpeople"]) {
        $id = $_POST["roomid"];
        $num = $_POST["numpeople"];
        book($id, $num);
        is_OK();
    } else {
        not_OK();
    }
} else {
    not_OK();
}

//Function to check if the request is an AJAX request
function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function is_OK() {
    $return["status"] = "200";
    echo json_encode($return);
}

function not_OK() {
    $return["status"] = "500";
    echo json_encode($return);
}

//**********START Booking Room
function book($room_id, $num) {
    global $conn;

    $sqlSel = "SELECT * FROM ROOM WHERE room_id ='" . $room_id . "' AND capacity >= '" . $num . "'";
    $result = mysqli_query($conn, $sqlSel);

    $check_result = mysqli_num_rows($result);

    if ($check_result != 0) {
        while ($row = mysqli_fetch_array($result)) {
            $room_theme = $row['room_theme'];
        }
    }

    $stat = "NOT AVAILABLE";

    $sqlUpd = "UPDATE ROOM SET status = '" . $stat . "' WHERE room_id='" . $room_id . "'";
    mysqli_query($conn, $sqlUpd);

    $sqlIns = "INSERT INTO RESERVATION(room_theme, num_people, room_id) VALUES('" . $room_theme . "', '" . $num . "', '". $room_id . "')";
    mysqli_query($conn, $sqlIns);
}
//**********END Reserving Room

