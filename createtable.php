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

// sql to create table
/*$sql = "CREATE TABLE Himal (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
suburb VARCHAR(30) NOT NULL,
suburb_longitude number(30) NOT NULL,
suburb_latitude number(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";*/
$sql = "CREATE TABLE Himal (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
suburb VARCHAR(30) NOT NULL,
suburb_latitide VARCHAR(30) NOT NULL,
suburb_longitude VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";



if (mysqli_query($conn, $sql)) {
    echo "Table Himal created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>