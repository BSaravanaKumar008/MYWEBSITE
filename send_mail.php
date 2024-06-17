<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "mail.saravanakumar008@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    // Email body
    $body = "<h2>Contact Form Submission</h2>";
    $body .= "<p><strong>Name:</strong> {$name}</p>";
    $body .= "<p><strong>Email:</strong> {$email}</p>";
    $body .= "<p><strong>Message:</strong><br>{$message}</p>";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Message sent successfully!</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>
