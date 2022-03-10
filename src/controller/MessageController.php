<?php

namespace App\controller;

use App\model\Message;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\model\Users;

class MessageController extends \App\core\Controller
{
    public function indexmsg()
    {
        if ($_SESSION == null) {


            $this->renderView('default/index', [
                'error' => "Vous devez être connecté pour accèder à cette page !"
            ]);
            $this->login();
        } else {
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
                echo '<script type="text/javascript">alert("Votre message a bien été envoyé !")</script>';
                    echo "<script>setTimeout(\"location.href = '';\",300);</script>";
            } catch (Exception $e) {
                echo '<script type="text/javascript">alert("Votre message n\'a pas pu être envoyé !")</script>';
                    echo "<script>setTimeout(\"location.href = '';\",300);</script>";
            }
        
        }
        $this->renderView("contact/contact");
    }
    }

    public function login()
    {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'get') {
            $this->renderView('default/index');
        } elseif (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $user = (new Users())->getOneByUsername($_POST['username']);
                if (is_null($user)) {
                    $this->renderView('default/index', [
                        'error' => "L'utilisateur n'existe pas"
                    ]);
                    return;
                }
                if (password_verify($_POST['password'], $user->getPassUser())  ) {

                    $_SESSION['isLogged'] = true;
                    $user->beforeInsertInSession();
                    $_SESSION['user'] = $user;
                    echo '<script type="text/javascript">alert("Vous êtes bien connecté !")</script>';
                    echo "<script>setTimeout(\"location.href = '';\",300);</script>";
                } else {
                    $this->renderView('default/index', [
                        'error' => "Mauvais mot de passe !"
                    ]);
                    return;
                }
            }
        }
    }
}