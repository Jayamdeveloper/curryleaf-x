
<?php
if (!function_exists('sendSmtpEmail')) {
    function sendSmtpEmail($to, $subject, $message)
    {
        // Use Laravel's built-in Mail facade to send SMTP emails
        // \Illuminate\Support\Facades\Mail::to($to)->send(new \App\Mail\SmtpMail($subject, $message));
    }
}
?>
