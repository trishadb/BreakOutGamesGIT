<?php

$servername = 'localhost';
/**$username = 'ddbando2_opnsrc';
$password = 'opensource123';
$dbName = 'ddbando2_test';**/

$username = 'root';
$password = '';
$dbName = 'dev_opensrcfinal';

//Create connection
$conn = mysqli_connect($servername, $username, $password);

//Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
   
}else{
     echo "Connection successful";
}
//select database
mysqli_select_db($conn, $dbName);


