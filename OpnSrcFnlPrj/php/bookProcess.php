<?php

include 'database/connect.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//**********START Booking Room
if (isset($_POST['frmBook'])) {
    $spots = "";
    $clean = preg_replace('#[^0-9]#', '', $_POST['room_id']);
    $num = preg_replace('#[^0-9]#', '', $_POST['num']);

    if ($clean == "" || $num == "") {
        exit();
    }
    
    $num = $_POST['numPeople'];

    $sqlSel = "SELECT * FROM ROOMS WHERE room_id ='$clean' AND available >= '$num'";
    $result = mysqli_query($conn, $sqlSel) or die(mysli_error($conn));

    $check_result = mysqli_num_rows($result);

    if ($check_result != 0) {
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['room_id'];
            $room_theme = $row['room_theme'];
            $avail = $row['available'];
            $price = $row['price'];
        }

        $availNow = $avail - $num;

        $sqlUpd = "UPDATE ROOM SET available = '$availNow' WHERE room_id='$id'";
        $resultUpd = mysqli_query($conn, $sqlUpd) or die(mysli_error($conn));

        $sqlIns = "INSERT INTO RESERVATION(date, room_theme, reserved_seats, user_id)(now(), '$room_theme', '$num')";
        $resultIns = mysqli_query($conn, $sqlIns) or die(mysli_error($conn));

        $reservId = mysqli_insert_id($connect);

        //*****book and billing info to redirect to another page here//
    } else {
        $spots = "Full";
        $reserveId = "open";
    }

    echo $spots | $reservId;
    exit();
}
//**********END Reserving Room


//**********START Cancel Booking
if (isset($_POST['cancel'])) {
    $spots = "";
    $resId = preg_replace('#[^0-9]#', '', $_POST['cancel']);

    $sqlSel = "SELECT rs.*, rm.available "
            . "FROM RESERVATION AS rs "
            . "LEFT JOIN ROOM AS rm "
            . "ON rs.room_theme = rm.room_theme"
            . "WHERE rs.res_id = '$resId'";

    $result = mysqli_query($conn, $sqlSel) or die(mysli_error($conn));

    $check_result = mysqli_num_rows($result);

    if ($check_result != 0) {
        while ($row = mysqli_fetch_array($result)) {
            //delete the reserved seat 
            $del_room_theme = $row['room_theme'];
            $del_reserved = $row['reserved_seats'];
            
            //update the room table
            $id = $row['room_id'];
            $room_theme = $row['room_theme'];
            $orig_avail = $row['available'];
            
            //add back the canceled booking
            $update_avail = $orig_avail + $del_reserved;
  
            //delete the booked room from the reservation table
            $sqlDel = "DELETE FROM RESERVATION WHERE room_theme='$del_room_theme'";
            $resultDel = mysqli_query($conn, $sqlDel) or die(mysli_error($conn));

            //update the room table to its original state
            $sqlUpd = "UPDATE ROOM SET available = '$update_avail' WHERE room_theme='$del_room_theme'";
            $resultUpd = mysqli_query($conn, $sqlUpd) or die(mysli_error($conn));
        }
    } else {
        $spots = "Full";
        $reserveId = "open";
    }

    echo $spots | $reservId;
    exit();
}
//**********END Cancel Booking


//**********START Confirm Booking
if (isset($_POST['cancel'])) {
    $response = "";
    $resId = preg_replace('#[^0-9]#', '', $_POST['confirm']);

    $sqlSel = "SELECT rs.*, rm.available "
            . "FROM RESERVATION AS rs "
            . "LEFT JOIN ROOM AS rm "
            . "ON rs.room_theme = rm.room_theme"
            . "WHERE rs.res_id = '$resId'";

    $result = mysqli_query($conn, $sqlSel) or die(mysli_error($conn));

    $check_result = mysqli_num_rows($result);

    if ($check_result != 0) {
        while ($row = mysqli_fetch_array($result)) {
            //delete the reserved seat 
            $del_room_theme = $row['room_theme'];
            $del_reserved = $row['reserved_seats'];
            
            //update the room table
            $id = $row['room_id'];
            $room_theme = $row['room_theme'];
            $orig_avail = $row['available'];
            
            //add back the canceled booking
            $update_avail = $orig_avail + $del_reserved;
  
            //delete the booked room from the reservation table
            $sqlDel = "DELETE FROM RESERVATION WHERE room_theme='$del_room_theme'";
            $resultDel = mysqli_query($conn, $sqlDel) or die(mysli_error($conn));

            //update the room table to its original state
            $sqlUpd = "UPDATE ROOM SET available = '$update_avail' WHERE room_theme='$del_room_theme'";
            $resultUpd = mysqli_query($conn, $sqlUpd) or die(mysli_error($conn));
        }
    } else {
        $spots = "Full";
        $reserveId = "open";
    }

    echo $spots | $reservId;
    exit();
}
//**********END Confirm Booking









