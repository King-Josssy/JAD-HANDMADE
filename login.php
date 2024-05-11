<?php
$username = $_POST['Username']; 
$password = $_POST['password'];
// Database connection
$conn = new mysqli('localhost','root','','users');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO logi (Username, password) VALUES (?, ?)"); 
    $stmt->bind_param("ss", $Username, $password); // Use consistent variable names
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>
