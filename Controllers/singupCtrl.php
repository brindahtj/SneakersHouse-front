<?php 
ob_start();
require_once '../Database/db-pdoSH.php';
require_once '../vendor/autoload.php';
require_once '../Database/smtp-config.php';


// SI le formulaire est soumis via POST
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;



  // On vérifie que les nom et prenom  ait bien été renseigné si oui -> Sanitize
if (empty($_POST['nom'])) {
    die("Le nom doit etre rempli");
}else{
    $nom=htmlspecialchars($_POST['nom']);
}
if (empty($_POST['prenom'])) {
    die("Le prenom doit etre rempli");
}else{
    $prenom=htmlspecialchars($_POST['prenom']);
}

//IDEM email

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die("Le format de l'email n'est pas bon");
}else{
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
}
// On recquiert un MDP de 8 caractères minimum, avec une majuscule, une minuscule, un caractère spécial(@#$%^&+=!) 

$regex = '/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=!])(?!.*\s).{8,32}$/';
if (preg_match($regex,$_POST['password'])) {
} else {
echo "Le mot de passe est invalide. Le mot de passe doit contenir 8 caractères minimum avec une majuscule, une minuscule, un caractère spécial(@#$%^&+=!)";
}


// Mot de passe identiques On verifie que les MDP soient identiques

if ($_POST['password'] !== $_POST['confirm_password']) {
    die("Les mots de passe sont différents !");
} else {
    $password = $_POST['password'];
}



// Upload d'une avatar et ajout dans un dossier dedié
    
// On vérifie si $_FILES existe et possède bien des valeurs pour la clé attendue
    
if (!empty($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
    $avatar = $_FILES['avatar']['name'];
    $tmp_filename = $_FILES['avatar']['tmp_name'];
    $size = $_FILES['avatar']['size'];
    var_dump($_FILES['avatar']['size']);

        // Precupaeration de l'extension
    $explode = explode('.', $avatar);
    $extension = end($explode);
    $lower_extension = strtolower($extension);

        // verification extension
    
    
    if ($lower_extension === 'png' || $lower_extension === 'jpeg' 
            || $lower_extension === 'jpg') {
           
            move_uploaded_file($tmp_filename, $filename);
                
    } elseif($size>3000) {
                die('Taille maximum de fichier de 3mo');
    }else{
                die('Mauvais format de fichier.');
    }
}else{
        $avatar='utilisateur.png';
}



// Vérifier que le Mail ne soit pas déjà présents en BDD
// $stmt_email = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt_email = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt_email->execute([$email]);
$result_email = $stmt_email->fetch();

if ($result_email) {
    die("Email déjà pris");
}





// Si on a bien vérifié que notre user n'existe pas déjà on vient hasher le MDP
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

/// GENERATE TOKEN

// On vient créer un token de 16 caractères aléatoires qui servira à identifier le user via 
// un mail de confirmation
$token = bin2hex(random_bytes(16));


// Une fois le MDP hashé on peut ajouter les infos de notre user en BDD
// On prépare donc une requete SQL puis on l'éxecute
$sql = "INSERT INTO users (nom, prenom, email, avatar, hashed_password,token) VALUES (?,?,?,?,?,?)";

$stmt = $pdo->prepare($sql);

$result =$stmt->execute([$nom, $prenom, $email,$avatar, $hashed_password,$token]);



//Envoie du mail de confirmation
if ($result) {
       
        try{
            $subject="Mail de confirmation Sneakers House";
            $message="Bonjour, ci-joint le lien de confirmation à votre inscription sur SneakersHouse.com :";
            $lien="http://sneakershouse/signup-success.php?token=$token";

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
                header('Location:..\signup-success.php');
                ob_end_flush();
                exit;

        }catch(Exception $e){
            echo"erreur lors de l'envoi:$mail->ErrorInfo";
        }
}else{
    print_r($stmt->errorInfo());
        
}