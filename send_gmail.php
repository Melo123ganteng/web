<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $date = $_POST['date'] ?? '';
    $message = $_POST['message'] ?? '';

   
    if (empty($date) || empty($message)) {
        die("Date and message fields are required!");
    }

    
    $to = "studioaksen1@gmail.com";
    $subject = "New Message from Website";
    $body = "Date and Time: $date\n\nMessage:\n$message";

   
    $headers = "From: no-reply@yourwebsite.com";

    
    if (mail($to, $subject, $body, $headers)) {
       
        echo "<script>
            alert('Message sent successfully!');
            window.history.back();
        </script>";
    } else {
     
        echo "<script>
            alert('Failed to send the message. Please try again.');
            window.history.back();
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <h1><a href="index.php">kembali </a></h1>
</body>
</html>