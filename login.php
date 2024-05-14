<?php
$email = $_POST['username'];
$password = $_POST['password'];
// Database connection
$conn = new mysqli('localhost','root','','log');
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs to prevent SQL injection
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Attempt to query the database
$query = "SELECT * FROM custom WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
	// Login successful, render home page
	include 'index.html';
} else {
	echo "Login failed. Please try again.";
}

// Close the database connection
mysqli_close($conn);
?>