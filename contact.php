<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'haxovicastudios@gmail.com';
    $mail->Password = 'sensor'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('haxovicastudios@gmail.com', 'Haxovica Studios');
    $mail->addAddress('haxovicastudios@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "Pesan dari $name";
    $mail->Body = "Nama: $name<br>Email: $email<br>Pesan:<br>$message";

    $mail->send();
    header("Location: index.php?status=Pesan berhasil dikirim!");
} catch (Exception $e) {
    echo "Pesan tidak dapat dikirim. Error: {$mail->ErrorInfo}";
    exit();
}
