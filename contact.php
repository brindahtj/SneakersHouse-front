<?php 
session_start();
ob_start();


require_once 'Partials/head.php';
require_once 'Partials/nav.php';
require_once 'vendor/autoload.php';
require_once 'Database/smtp-config.php';


// SI le formulaire est soumis via POST
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Si le formulaire est soumis via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    // On vérifie que les champs sont tous remplis
    if (empty($email) || empty($firstname) || empty($lastname) || empty($message) || empty($subject)) {
        die("Remplir tous les champs !");
    }

    // On nettoie les données transmises
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $firstname = htmlspecialchars($firstname);
    $lastname = htmlspecialchars($lastname);
    $message = htmlspecialchars($message);
    $subject = htmlspecialchars($subject);

    // On vérifie le format de l'email 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Format de l'email non conforme");
    }

    try {
        // On instancie PHP Mailer
        $mail = new PHPMailer(true);

        // Constantes de configuration
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_ENCRYPTION;
        $mail->Port       = SMTP_PORT;

        // Infos à propos du receveur et envoyeur
        $mail->setFrom($email, $firstname);
        $mail->addAddress($mail->Username, 'Sneakers House');

        // Contenu du mail 
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Envoie du mail 
        $mail->send();
        header('Location: contact-success.php');
        ob_end_flush();
        exit;
    } catch (Exception $e) {
        echo "erreur lors de l'envoi : $mail->ErrorInfo";
    }
}

?>

        <?php if(!empty($_SESSION)): ?>
<?php require_once 'Partials/profileNav.php'?>

              <div class="col-9 ">
              <h4 class="ms-3 mb-5 mt-5 text-darkorange">Nous contacter</h4>
        <?php else :?>
            <div class="col-12">
                <h2 class="text-center my-3">Nous Contacter</h2>
            <?php endif ?>
               
                    <div class=" mb-5 row ">
        <div class="col"></div>
        <?php if(!empty($_SESSION)): ?>  
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-8 mb-3">
            <form class="form" action="contact.php" method="post" enctype="multipart/form-data">
        <?php else :?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mb-3">
                <form class="form" action="contact.php" method="post" enctype="multipart/form-data">
            <h1 class="mb-3">Nous contacter</h1>
            
        <?php endif ?>

                <div class=" inputs mb-5 d-flex flex-column justify-content-center">

                    <input class="input pl-3 py-3 outline" type="text" name="lastname" placeholder="Votre nom" id="lastname">

                    <input class="input pl-3 py-3 outline" type="text" name="firstname" placeholder="Votre prénom" id="firstname">

                    <input class="input pl-3 py-3 outline" type="email" name="email" placeholder="Votre email" id="email">

                    <input class="input pl-3 py-3 outline" type="text" name="subject" placeholder="Objet de votre message" id="subject">

                    <textarea class="input pl-3 py-3 textarea outline" name="message" placeholder="Votre message" cols="30" rows="6" maxlength="1500" required></textarea>

                </div>
                <div class="center d-flex justify-content-center">
                    <button type="submit">Envoyer</button>
                </div>

            </form>

        </div>
        <div class="col"></div>
    </div>
</div>













<?php require_once 'Partials/footer.php'; ?>

   






















