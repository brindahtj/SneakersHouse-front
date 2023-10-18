
<?php 
session_start();
ob_start();
require_once __DIR__.'\..\Database\db-pdoSH.php';
require_once __DIR__. '\..\functions.php';
require_once __DIR__. '\..\vendor\autoload.php';

if (empty($_POST['change_password'])) {
            die("Le mot de passe doit etre rempli");
            
        }else{
            $regex = '/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=!])(?!.*\s).{8,32}$/';
            if (!preg_match($regex,$_POST['change_password'])) { 
                    die ("Le mot de passe est invalide. Le mot de passe doit contenir 8 caractères minimum avec une majuscule, une minuscule, un caractère spécial(@#$%^&+=!)");
                }
        }

        //  MDP  identiques

        if ($_POST['change_password'] !== $_POST['change_confirm_password']) {
            die("Les mots de passe sont différents !");
        } else {
            $password = $_POST['change_password']; 
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
          
            // update dans la db
            $change_password= $pdo->prepare("UPDATE users SET hashed_password= :hashed_password  WHERE token = :token");
            $change_password->bindValue(':hashed_password', $hashed_password, PDO::PARAM_STR);
            if(!empty($_SESSION)){
                $change_password->bindValue(':token', $_SESSION['user']['token'], PDO::PARAM_STR);
            }else{
                $change_password->bindValue(':token', $_GET['token'], PDO::PARAM_STR);

            }
 
            $result_pass=$change_password->execute();
             
            if($result_pass){    
                
                header('Location:../forgotpassword-confirm.php');

            }else{
                print_r($change_password->errorInfo());
                                
            }


        }
    







?>