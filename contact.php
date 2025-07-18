<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "osasslyyoung98@gmail.com"; // 🔁
    $subject = "New Contact Form Message from $name";
    $headers = "From: $email";

    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<p>Thank you! Your message has been sent.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Try again later.</p>";
    }
}
