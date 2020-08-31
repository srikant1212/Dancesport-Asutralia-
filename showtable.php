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

$sql = "SELECT id, subburb, subburb_latitide, subburb_longitude FROM Himal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["subburb"]. "-latitude: " . $row["subburb_latitide"]. "-longitude: ".$row["subburb_longitude"] "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>