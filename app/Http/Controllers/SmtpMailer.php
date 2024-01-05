<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/autoload.php';
class SmtpMailer extends Controller
{
    public static function sent($to, $subject, $message)
    {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com;';
            $mail->SMTPAuth = true;
            $mail->Username = 'prakashbsc376@gmail.com';
            $mail->Password = 'qplk jpje tqxz pkxw';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('prakash001prak@gmail.com');
            $mail->addAddress($to);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->send();
            return "OTP has been sent successfully!";

        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
