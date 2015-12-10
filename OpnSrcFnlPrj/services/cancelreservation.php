<?php

include 'connect.php';

//insert code to database
//source: http://labs.jonsuh.com/jquery-ajax-php-json/
if (is_ajax()) {
//Checks if action value exists
    if (isset($_POST["resID"])) {
        $id = $_POST["resID"];
        cancel($id);
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

//**********START Cancel Booking
function cancel($_id) {
    global $conn;
    if (isset($_POST['cancel'])) {
        $sqlSel = "SELECT * "
                . "FROM RESRVATION "
                . "WHERE room_id = '$_id'";

        $result = mysqli_query($conn, $sqlSel);
        if($result){
            $_last_id = mysqli_insert_id($conn);
        }

        $check_result = mysqli_num_rows($result);

        if ($check_result != 0) {
            while ($row = mysqli_fetch_array($result)) {
                //delete the reservation 
                $rm_id = $row['room_id'];
            }

            //add back the canceled booking
            $stat = "AVAILABLE"; 

            //delete the booked room from the reservation table
            $sqlDel = "DELETE FROM RESERVATION WHERE res_id='$_last_id'";
            mysqli_query($conn, $sqlDel);

            //update the room table to its original status
            $sqlUpd = "UPDATE ROOM SET status = '$stat' WHERE room_id='$rm_id'";
            mysqli_query($conn, $sqlUpd);
        }
    }
}

//**********END Cancel Booking
