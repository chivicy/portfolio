<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO feedback (name, email, date, message) VALUES ('$name',
'$email', '$date', '$message')";
if ($conn->query($sql) === TRUE) {
echo "Your feedback has been sent. Thank you!";
} else {
echo "Error: feedback not created " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>