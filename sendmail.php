<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "maleehanisar57@gmail.com"; // your email
    $subject = "New Contact Form Message";
    $body = "You received a new message from your website:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Phone: $phone\n".
            "Message:\n$message";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "<h2 style='color:green;text-align:center;'>Message Sent Successfully ✅</h2>";
        echo "<p style='text-align:center;'><a href='contact.html'>Go Back</a></p>";
    } else {
        echo "<h2 style='color:red;text-align:center;'>Failed to Send ❌</h2>";
        echo "<p style='text-align:center;'><a href='contact.html'>Go Back</a></p>";
    }
}
?>

