<?php
include 'connect.php';

//insert code to database
//source: http://labs.jonsuh.com/jquery-ajax-php-json/
if (is_ajax()) {
//Checks if action value exists
    if (isset($_POST["resID"])) {
        $id = $_POST["resID"];
        output($id);
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

function output($id) {
    global $conn;
    $_last_id = mysqli_insert_id($conn);
    $sqlSel = "SELECT * FROM RESERVATION WHERE room_id ='" . $id . "' AND res_id = '" . $_last_id . "'";
    $result = mysqli_query($conn, $sqlSel);

    $check_result = mysqli_num_rows($result);

    if ($check_result != 0) {
        while ($row = mysqli_fetch_array($result)) {
            $numpeople = $row['num_people'];
            $room_theme = $row['room_theme'];
        }
    }

    $price = 18 * $numpeople;

    $output = "<div id='bill_info'>"
            . $room_theme['room_theme'] . ""
            . $numpeople['num_people'] . " players"
            . "Price: " . $price
            . "</div>";

    echo $output;
}
