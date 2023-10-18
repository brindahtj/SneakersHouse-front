<?php 
session_start();

ob_start();
require_once '../Database/db-pdoSH.php';
require_once '../vendor/autoload.php';

// On vérifie que les nom et prenom  ait bien été renseigné si oui -> Sanitize

if (empty($_POST['prenom'])) {
    die("Le prenom doit etre rempli");
}else{
    $prenom=htmlspecialchars($_POST['prenom']);
}
if (empty($_POST['nom'])) {
    die("Le nom doit etre rempli");
}else{
    $nom=htmlspecialchars($_POST['nom']);
}
            // update dans la db
            $change_profile= $pdo->prepare("UPDATE users SET prenom=:prenom,  nom= :nom WHERE token = :token");
            
            $change_profile->bindValue(':prenom', $prenom, PDO::PARAM_STR);
            $change_profile->bindValue(':nom', $nom, PDO::PARAM_STR);
            if(!empty($_SESSION)){
                $change_profile->bindValue(':token', $_SESSION['user']['token'], PDO::PARAM_STR);
            }else{
                echo "Impossible de modifier vos informations si vous n'êtes pas connecté";

            }
 
            $result_profile=$change_profile->execute();
             
            if($result_profile){
            $_SESSION['user']['nom']=$_POST['nom'];
            $_SESSION['user']['prenom']=$_POST['prenom'];
            header('Location:../profil.php');

            }else{
                print_r($change_profile->errorInfo());
                                
            }
















?>