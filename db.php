<?php

$servername = "mysql";
$dbname = "bankdemo";
$username = "user";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:db_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}

/* Select queries return a resultset */
if ($result = $conn->query("SELECT @@hostname AS hostname")) {
    $row = $result->fetch_object();
    $result->close();
    printf("DEBUG: Database node => %s\n", $row->hostname);
}

/* close connection */
$conn->close();

?>
