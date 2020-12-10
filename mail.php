<?php
    require 'PHPMailer\PHPMailer-5.2-stable/PHPMailerAutoload.php';

    $mail = new PHPMailer;
$email='tanish99sahijwani@gmail.com';
//$mail->SMTPDebug = 3;                                // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                        // Specify main and backup SMTP servers
    //$mail->Host = 'smtp.mandrillapp.com';
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '2018.tanish.sahijwani@ves.ac.in';  // SMTP username
    $mail->Password = '******';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('2018.tanish.sahijwani@ves.ac.in', 'Mailer');
    $mail->addAddress($email, 'TAniSh');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
    ?>