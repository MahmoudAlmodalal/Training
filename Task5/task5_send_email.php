<?php
/**
 * Task 5: Send a simple email
 */

$to = "admin@example.com";
$subject = "Gaza Reconstruction System Notification";
$message = "Hello, this is a test email sent from PHP.";
$headers = "From: mahmoud@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email delivery failed.";
}
?>
