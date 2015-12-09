<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = 'localhost';
$username = 'ddbando2_opnsrc';
$password = 'opensource123';
$dbName = 'ddbando2_test';

//Create connection
	$conn = mysqli_connect($servername, $username, $password);

//Check connection
	if (!$conn) {
		die("Database connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully"; 
        
mysqli_select_db($conn, $dbName);

 //Create room table
    $sqlTable = "CREATE TABLE ROOM (
        room_id INT(6) AUTO_INCREMENT PRIMARY KEY,
        room_name VARCHAR(10),
        room_type VARCHAR(20),
        people INT(2),
        date DATE,
        time VARCHAR(15),
        price FLOAT(5));";

//check table creation
    if (mysqli_query($conn, $sqlTable)) {
        echo "Table ROOM created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
  $conn->select_db('ddbando2_test');

   $room_id = $_POST['room_id'];
   $room_name = $_POST['room_name'];
   $room_type = $_POST['room_type'];
   $price = $_POST['price'];
   $people = $_POST['people'];
   $date = $_POST['date'];
   $time = $_POST['time'];

   if (isset($_POST['Submit'])){
   $sql="INSERT INTO ROOM(room_id,room_name,room_type,price,,date,time)
        VALUES ('$room_id','$room_name','$room_type','$price','$people','$_date','$time');";

   if($conn->query($sql)===TRUE){
       echo  "<br>"."row is inserted ";
   }else{
       echo "<br>"."error" . $sql . "<br>" . $conn->error;
   }
  }  
  
//Create customer table
    $sqlTable = "CREATE TABLE CUSTOMER (
        cust_id INT(6) AUTO_INCREMENT PRIMARY KEY,
        first VARCHAR(20),
        last VARCHAR(20),
        phone VARCHAR(10),
        mail VARCHAR(30)),
        card_type VARCHAR(20);";

//check table creation
    if (mysqli_query($conn, $sqlTable)) {
        echo "Table CUSTOMER created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

   $first = $_POST['first'];
   $last = $_POST['last'];
   $phone = $_POST['number'];
   $mail = $_POST['mail'];
   $card_type = $_POST['card_type'];
   
   if (isset($_POST['Submit'])){
   $sql="INSERT INTO CUSTOMER(first,last,phone,mail,card_type)
        VALUES ('$first','$last','$phone','$mail','$card_type');";

   if($conn->query($sql)===TRUE){
       echo  "<br>"."row is inserted ";
   }else{
       echo "<br>"."error" . $sql . "<br>" . $conn->error;
   }
  }  
    
//Create users table
$sqlTable = "CREATE TABLE USERS (
        user_id INT(6) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(20),
        password VARCHAR(20)),
        Email VARCHAR(30),
        Address VARCHAR(100),
        PhoneNumber NUMBER(10);";

//check table creation
    if (mysqli_query($conn, $sqlTable)) {
        echo "Table USERS created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
   $user_id = $_POST['user_id'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $Email = $_POST['Email'];
   $Address = $_POST['Address'];
   $PhoneNumber = $_POST['PhoneNumber'];
   
   
   
   if (isset($_POST['Sign Up'])){
   $sql="INSERT INTO USERS(user_id,username,password,Email,Address,PhoneNumber)
        VALUES ('$user_id','$username','$password','$Email','$Address','$PhoneNumber');";

   if($conn->query($sql)===TRUE){
       echo  "<br>"."row is inserted ";
   }else{
       echo "<br>"."error" . $sql . "<br>" . $conn->error;
   }
  } 
  
  $sql = "user_id,username,password,Email,Address,PhoneNumber FROM USERS";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'] ;
    $_SESSION['Email'] = $row['Email'];
    $_SESSION['Address'] =  $row['Address'];
    $_SESSION['PhoneNumber'] = $row['PhoneNumber'];
    
     header('Location: /OpnSrcFinalProject/UserSignUp.php');
    }
}
else {
    echo "<br>", "0 results";
}
    
$sqlTable = "CREATE TABLE RESERVATION (
        rev_id INT(6) AUTO_INCREMENT PRIMARY KEY,
        room_id VARCHAR(6),
        user_id VARCHAR(6));";


//check table creation
    if (mysqli_query($conn, $sqlTable)) {
        echo "Table RESERVATION created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
   $rev_id = $_POST['rev_id'];
   $room_id = $_POST['room_id'];
   $user_id = $_POST['user_id'];
   
   if (isset($_POST['Submit'])){
   $sql="INSERT INTO RESERVATION(rev_id,room_id,user_id)
        VALUES ('$rev_id','$room_id','$user_id');";

   if($conn->query($sql)===TRUE){
       echo  "<br>"."row is inserted ";
   }else{
       echo "<br>"."error" . $sql . "<br>" . $conn->error;
   }
  }
 $sql = "SELECT room_id,room_name,room_type,price,,date,time FROM ROOM";
 $sql1 = "SELECT first,last,phone,mail,card_type FROM CUSTOMER";
 $sql2 = "rev_id,room_id,user_id FROM RESERVATION";
 
 $connect = $conn->query($sql);
 $connect = $conn->query($sql1);
 $connect = $conn->query($sql2);
 
 $result = $conn->query($connect);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

//set session variables

    $_SESSION['room_id'] = $row['room_id'];
    $_SESSION['room_name'] =  $row['room_name'];
    $_SESSION['room_type'] = $row['room_type'];
    $_SESSION['price'] = $row['price'] ;
    $_SESSION['date'] = $row['date'];
    $_SESSION['time'] = $row['time'];
    $_SESSION['first'] = $row['first'];
    $_SESSION['last'] =  $row['last'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['mail'] = $row['mail'];
    $_SESSION['card_type'] = $row['card_type'];
    $_SESSION['user_id'] =  $row['user_id'];
    
   // echo "information stored";
   header('Location: /OpnSrcFinalProject/ConfirmationPage.php');
    }
}
else {
    echo "<br>", "0 results";
}
$conn->close();

    
    
    
    
    
    
    
    


    


    
    

   


