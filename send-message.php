<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];
    
    $to = "info@hellenglobalconsultants.co.ke";
    $subject = "New Contact: $service";
    
    $body = "Name: $firstName $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Service: $service\n\n";
    $body .= "Message:\n$message";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
