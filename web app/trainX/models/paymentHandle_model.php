<?php

class PaymentHandle_model extends Model {

    function __construct() {


        parent::__construct();
    }

    public function sendEmail($inputemail, $inputSubject, $body) {
        $adder = $this->db->prepare("INSERT INTO paymentemails (recieverEmail,subject,body)
        VALUES(:inputemail,:inputSubject,:body)");
        $adder->execute(array(':recieverEmail' => $inputemail, ':subject' => $inputSubject, ':body' => $body));


        require_once '/public/email/PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        //$mail->SMTPDebug = 1;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'trainxlife@gmail.com';                 // SMTP username
        $mail->Password = '0716010860';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->From = 'carwash@gmail.com';
        $mail->FromName = 'TrainXLife';
        $mail->addAddress($emails, $fname);   // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('trainxlife@gmail.com', 'TrainXLife');
//$mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }

}
