<?php
$servername = "localhost";
$username = "demouser";
$password = "demopassword";
$dbname = "demodb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

$id = $_POST['id'];
$nombre = $_POST['nombre'];

$sql = "INSERT INTO personas (id, nombre)
VALUES ('$id', '$nombre')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
