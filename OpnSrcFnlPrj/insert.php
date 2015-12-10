<?php
include 'database/connect.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = 300;
$num = 2;

    $sqlSel = "SELECT * FROM ROOM WHERE room_id ='". $id . "' AND capacity >= '". $num . "'";
    $result = mysqli_query($conn, $sqlSel) or die(mysli_error($conn));

    $check_result = mysqli_num_rows($result);

    if ($check_result != 0) {   
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['room_id'];
            $room_theme = $row['room_theme'];
            $status = $row['status'];   
            $cap = $row['capacity'];
            $price = $row['price'];
        }
    }

    $stat = "NOT AVAILABLE";

    $sqlUpd = "UPDATE ROOM SET status = '". $stat . "' WHERE room_id='" . $id ."'";
    mysqli_query($conn, $sqlUpd) or die(mysli_error($conn));

    $sqlIns = "INSERT INTO RESERVATION(room_theme, reserved_seats) VALUES('" . $room_theme . "', '" . $num . "')";
    mysqli_query($conn, $sqlIns) or die(mysli_error($conn));
    //mysqli_insert_id($connect);