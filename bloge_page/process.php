<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Send email
$to = 'your-email@example.com'; // Replace with your own email address
$headers = "From: $email";
$message = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

mail($to, $subject, $message, $headers);

// Show success message
echo '<div class="success-message">';
echo '<p>Thank you for your message, ' . $name . '! We will get back to you as soon as possible.</p>';
echo '</div>';
?>