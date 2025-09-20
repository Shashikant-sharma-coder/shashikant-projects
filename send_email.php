<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Form fields
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email configuration
    $to = "shashipiplwa1@gmail.com";  // <-- Yaha apni email daalo
    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if(mail($to, $subject, $body, $headers)){
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Message could not be sent. Try again later.'); window.location.href='index.html';</script>";
    }
}
?>
