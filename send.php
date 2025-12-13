<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    // User data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Tera Gmail yaha set kar diya
    $to = "aryanktr92@gmail.com";  

    // Email subject + body
    $subject = "New Contact Message from $name";
    $body = "
Name: $name
Email: $email

Message:
$message
";

    $headers = "From: $email";

    // Send mail silently
    @mail($to, $subject, $body, $headers);

    // User ko simple response
    echo "Message Sent!";
}
?>