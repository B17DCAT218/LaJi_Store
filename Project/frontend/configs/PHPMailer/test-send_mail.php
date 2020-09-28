<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Thi Yen
 * Date: 7/12/2020
 * Time: 7:56 PM
 */
    //Test chức năng gửi mail, nên dùng các thư viện bên ngoài, thay vì cùng hàn mail() của PHP. Vì việc gửi mail phụ thuộc vào nhiều yếu tố như cấu hình ...
?>
<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
//    require 'vendor/autoload.php';
    // nhúng các file yêu cầu
    require_once 'src/Exception.php';
    require_once 'src/PHPMailer.php';
    require_once 'src/SMTP.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        // sử dung server gmail để gửi mail
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        // nhập tài khoản gmail cho username
        $mail->Username   = 'nguyenyen.ptit99@gmail.com';                     // SMTP username
        // password ko phải là password gmail, mà gmail có 1 cơ chế tạo password cho các ứng dụng, password này độc lập với password mail của bạn

        $mail->Password   = 'herdohfjpbxfbjlm';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        // gửi ai
        $mail->setFrom('abc@gmail.com', 'Jonathan Galio');
//        gửi tới ai
        $mail->addAddress('nguyenyen.ptit99@gmail.com', 'Joe User');     // Add a recipient
//        $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        // Attachments
        // đính kèm fiel muốn gửi
        $mail->addAttachment('img.jpg');         // Add attachments
//        $mail->addAttachment('/tmp/img.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Tiêu đề gửi mail';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
