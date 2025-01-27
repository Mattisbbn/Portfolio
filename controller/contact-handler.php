<?php
require_once 'vendor/autoload.php';
require_once 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class contactHandler{

    private string $familyName;
    private string $name;
    private string $email;
    private string $rawMessage;


    public function __construct()
    {
        if(isset($_POST['family-name']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
            $this->familyName = $_POST['family-name'];
            $this->name = $_POST['name'];
            $this->email = $_POST['email'];
            $this->rawMessage = $_POST['message'];

            $this->sendMail();
      
        }
    }

    private function buildMessage(){
        $message = 
        "
        Nom : {$this->familyName} <br>
        Prénom : {$this->name} <br>
        Email : {$this->email}<br><br>
        Message : {$this->rawMessage}
        ";
        return $message;
    }


    private function sendMail(){
        $phpMailer = new PHPMailer(true);
        $message = $this->buildMessage();
        try {
            $phpMailer->isSMTP();
            $phpMailer->CharSet = 'UTF-8';
            $phpMailer->Encoding = 'base64';
            $phpMailer->Host       = 'smtp.gmail.com';
            $phpMailer->SMTPAuth   = true;
            $phpMailer->Username   = EMAIL;
            $phpMailer->Password   = EMAIL_PASSWORD;
            $phpMailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $phpMailer->Port       = 587;
        
            $phpMailer->setFrom(EMAIL, 'Portfolio');
            $phpMailer->addAddress(EMAIL);
        
            $phpMailer->isHTML(true);
            $phpMailer->Subject = 'Portfolio / Formulaire contact';
            $phpMailer->Body =  $message;
            $phpMailer->AltBody = 'Portfolio / Formulaire contact';
        
            $phpMailer->send();
            echo 'Message envoyé avec succès.';
        } catch (Exception $e) {
            echo "Le message n'a pas pu être envoyé. Erreur: {$phpMailer->ErrorInfo}";
        }
    }

    }
new contactHandler;