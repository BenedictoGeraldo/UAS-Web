<?php
  session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $conn = new mysqli("localhost", "root", "", "db_fieldbooking");

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO tb_contact (Name, Email, Subject, Message,Status) VALUES ('$name', '$email', '$subject', '$message','Pending')";

            if ($conn->query($sql) === TRUE) {
              $_SESSION['message_sent'] = true;
            } else {
              $_SESSION['message_sent'] = false;
            }

            $conn->close();
            header("Location: contact.php");
            exit;
          }
            ?>