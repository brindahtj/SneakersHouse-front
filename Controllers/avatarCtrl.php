<?php

require_once 'Database/db-pdoSH.php';

// Upload d'un avatar et ajout dans un dossier dedié
    
// On vérifie si $_FILES existe et possède bien des valeurs pour la clé attendue

if (!empty($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
    $avatar =$_FILES['avatar']['name'];
    $tmp_filename = $_FILES['avatar']['tmp_name'];
    $size = $_FILES['avatar']['size'];


        // Recupaeration de l'extension
    $explode = explode('.', $avatar);
    $extension = end($explode);
    $lower_extension = strtolower($extension);

        // verification extension
    
    
    if ($lower_extension === 'png' || $lower_extension === 'jpeg' 
            || $lower_extension === 'jpg') {
    
            move_uploaded_file($tmp_filename, $avatar);
                
        }else if($size>3000) {
                die('Taille maximum de fichier de 3mo');
    }else{
                die('Mauvais format de fichier.');
    }
            
}else{
        $avatar='utilisateur.png';
}


$sql = "UPDATE users SET avatar=? WHERE id=?";

$stmt = $pdo->prepare($sql);

$result =$stmt->execute([$avatar,$_SESSION['user']['id']]);

if($result){
    $_SESSION['user']['avatar']=$avatar;

}