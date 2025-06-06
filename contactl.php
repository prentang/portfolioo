<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['sender-name'];
    $email = $_POST['sender-email'];
    $message = $_POST['message'];

    $to = "your-email@example.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
