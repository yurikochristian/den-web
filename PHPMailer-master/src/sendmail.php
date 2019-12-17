<?php

    $hash = password_hash($email,PASSWORD_DEFAULT);
    $USER = $name;
    require("PHPMailer.php");
    require("SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->IsHTML(true);

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "yurikochristian@gmail.com";
    $mail->Password = "kusumadewa1";
    $mail->SetFrom("yurikochristian@gmail.com");
    $mail->Subject = "TEST SMTP EMAIL";
    $mail->Body = "<html><body>
                    <h1>Hello, $USER!</h1>
                    <br>
                    <p>Welcome to Den, this is an email to verify that your email is your own email.<br>
                    Please click link below to verify your email<br>
                    </p><a href=\"http://localhost:8080/den-web/verify-email.php?hash=$hash\">Click Here</a></body></html>";
    $mail->AddAddress($email);

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>