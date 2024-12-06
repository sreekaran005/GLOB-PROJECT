<?php

$host = "localhost";
$username = "root";  
$password = "";      
$database = "shop_customer_details";  


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$phone = $_POST['phone'];


$sql = "INSERT INTO customer(name,lname,address,phone) VALUES('$name', '$lname', '$address', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "You have ordered Sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>