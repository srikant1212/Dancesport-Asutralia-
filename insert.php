<?php
$servername = "localhost";
$username = "messenger_student";
$password = "hr}!tAVq.c.}";
$dbname = "messenger_students";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
INSERT INTO Himal (ID,suburb,suburb_latitude,suburb_longitude) VALUES (1, 'Noble', 32, 2000.00 );

?>