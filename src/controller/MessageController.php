<?php

namespace App\controller;

use App\model\Message;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MessageController extends \App\core\Controller
{
    public function indexmsg()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
            $message = new Message();

            
            {
                $message->setEmail($_POST['email']);
                $message->setContent($_POST['content']);
                $message->setFirstName($_POST['firstName']);
                $message->setLastName($_POST['lastName']);
                $message->setSubject($_POST['subject']);

            }

            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();
                $mail->Mailer = "smtp";
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'contactformul@gmail.com';                     //SMTP username
                $mail->Password   = 'Afpa_123';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($_POST['email'], $_POST['firstName']." ".$_POST['lastName']);
                $mail->addAddress('quentin.boulanger08@gmail.com' );                //Name is optional

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $_POST['subject'];
                $mail->Body    = "From: ".$_POST['firstName']." ".$_POST['lastName']. " (" .($_POST['email']) . ") <br><br>".$_POST['content'];
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo `<script language="Javascript">Swal.fire('Votre message a bien été envoyé !')</script>`;
            } catch (Exception $e) {
                dd("Message could not be sent. Mailer Error: {$mail->ErrorInfo}") ;
            }

        }
        $this->renderView("contact/contact");
    }
}