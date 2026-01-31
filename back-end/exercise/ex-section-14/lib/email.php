<?php

/*
 * Xây dựng hàm send_email() gửi mail trong hệ thống
 * Tùy biến:
 * --- Người nhận
 * --- Chủ đề
 * --- Nội dung
 * --- File đính kèm
 * 
 * Cấu hình email hệ thống lưu trong file config riêng
 */

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PhPMailer-master/PHPMailer-master/src/Exception.php';
require 'PhPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PhPMailer-master/PHPMailer-master/src/SMTP.php';
function send_email($send_to_email = "", $send_to_fullname = "", $subject = "", $body = "", $options = array("cc" => array(), "bcc" => array(), "attachment" => array(), "alt_body" => ""))
{
    global $config_email;
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                   //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = $config_email['host'];                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = $config_email['username'];                     //SMTP username
        $mail->Password = $config_email['password'];                               //SMTP password
        $mail->SMTPSecure = $config_email['smtp_secure'];            //Enable implicit TLS encryption
        $mail->Port = $config_email['port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = "UTF-8";

        $mail->setFrom($config_email['username'], $config_email['fullname']);

        //Recipients
        if (!empty ($send_to_email)) {
            if (!empty($send_to_fullname)) {
                $mail->addAddress($send_to_email, $send_to_fullname);
            } else {
                $mail->addAddress($send_to_email);
            }
        } else {
            $mail->ErrorInfo = "Chưa có địa chỉ người nhận!";
        }
        $mail->addReplyTo($config_email['username'], $config_email['fullname']);

        // CC
        if (!empty($options["cc"])) {
            foreach ($options["cc"] as $item) {
                $mail->addCC($item);
            }
        }

        // BCC
        if (!empty($options["bcc"])) {
            foreach ($options["bcc"] as $item) {
                $mail->addBCC($item);
            }
        }

        //Attachments
        if (!empty($options["attachment"])) {
            foreach ($options["attachment"] as $item) {
                $mail->addAttachment($item);
            }
        }

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = $options["alt_body"];

        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Email không được gửi. Chi tiết lỗi: {$mail->ErrorInfo}";
    }
}