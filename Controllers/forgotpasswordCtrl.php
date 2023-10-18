<?php
ob_start();

require_once '../Database/db-pdoSH.php';
require_once '../Database/smtp-config.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Envoie mail
$email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);


$stmt_email = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt_email->execute([$email]);
$result_email = $stmt_email->fetch();

if ($result_email) {
    $token=$result_email['token'];

try{
            $subject="Mot de passe oublié, Sneakers House";
            $message="Bonjour, ci-joint le lien pour changer votre mot de passe sur SneakersHouse.com :";
            $lien="http://sneakershouse/modifypassword.php?token=$token";

            //On instancie PHP Mailer

            $mail=new PHPMailer(true);

            // Constantes de configurations
            $mail->isSMTP();                                          
            $mail->Host       = SMTP_HOST;                    
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = SMTP_USERNAME;                     
            $mail->Password   = SMTP_PASSWORD;                               
            $mail->SMTPSecure = SMTP_ENCRYPTION;            
            $mail->Port       = SMTP_PORT;   

            //Infos à propos du receveur et envoyeur
            $mail->setFrom($mail->Username, 'Team SneakersHouse');
            $mail->addAddress($email, $username); 


            // On envoie un mail avec lien ;
                $mail->isHTML(true); 
                $mail->Subject = $subject;
                $mail->Body    ="$message $lien";
                $mail->send();
                header('Location:..\forgotpassword-success.php');
                ob_end_flush();
                exit;

}catch(Exception $e){
            echo"erreur lors de l'envoi:$mail->ErrorInfo";
}
}else{
    print_r($stmt->errorInfo());
        
}

