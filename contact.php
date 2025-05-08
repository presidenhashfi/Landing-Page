<?php
// Ambil data dari form
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

// Load konfigurasi email
$config = require 'config.php';

// Include PHPMailer
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_username'];
    $mail->Password   = $config['smtp_password'];
    $mail->SMTPSecure = $config['smtp_secure'];
    $mail->Port       = $config['smtp_port'];

    // Set pengirim & penerima
    $mail->setFrom($config['smtp_username'], 'Haxovica Studios');
    $mail->addAddress($config['smtp_username']);
    $mail->addReplyTo($email, $name);

    // Konten email
    $mail->isHTML(true);
    $mail->Subject = "Pesan dari $name";
    $mail->Body    = "Nama: $name<br>Email: $email<br>Pesan:<br>$message";

    $mail->send();
    header("Location: index.php?status=Pesan berhasil dikirim!");
} catch (Exception $e) {
    echo "Pesan tidak dapat dikirim. Error: {$mail->ErrorInfo}";
}
