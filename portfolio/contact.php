<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Server-side validation (optional)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Process the data (e.g., send an email or save to a database)
        
        // Example: Send an email
        $to = "youremail@example.com";  // Replace with your email
        $subject = "New Contact Message from $name";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";
        
        // Check if email is sent successfully
        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message. Please try again.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>
