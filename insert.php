<?php
include("db.php");
if (isset($_POST["submitbtn"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
     $sql = "INSERT INTO contact_log (name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Message sent successfully!"); window.location.href = "thankyou.php";</script>';
    } else {
        echo "Message failed: " . mysqli_error($conn);
    }
}
?>