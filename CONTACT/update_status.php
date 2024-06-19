<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_fieldbooking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"]) && isset($_POST["status"])) {
    $id = intval($_POST["id"]);
    $status = $_POST["status"];

    $sql = "UPDATE tb_contact SET Status=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo "Status updated successfully.";
    } else {
        echo "Error updating status: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>