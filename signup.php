<?php
include "db_connect.php";

// Get form data
$Name = $_POST['name'];
$Email = $_POST['email'];
$Tel no = $_POST['Tel no'];
$Credit no = $_POST['credit no'];
$Password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

// Insert user into database
$sql = "INSERT INTO login ( Name,Email,Tel no,Credit no,Password) VALUES ('$Name', '$Email ', ,'$Tel no ','$Credit no ','$Password ' )";

if ($conn->query($sql) === TRUE) {
 
    $conn->close();
   
    header("Location: /JAD-HANDMADE/login.html");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
}


?>

