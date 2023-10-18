<?php 

ob_start();


require_once '../Database/db-pdoSH.php';



$email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);


$stmt_email = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt_email->execute([$email]);
$result_email = $stmt_email->fetch();

if ($result_email) {
 $password=$_POST["password"];
 $hash=$result_email['hashed_password'];
 $compare=password_verify($password,$hash);
    
}else{
    die("L'email incorrect");
}


if($compare){
    session_start();
    $_SESSION['user']= $result_email;
    $_SESSION['user']['logged']= true;
    header('Location: ..\profil.php');
    ob_end_flush();
    exit;
    
}else{
    die("Mot de passe incorrect");
}

 