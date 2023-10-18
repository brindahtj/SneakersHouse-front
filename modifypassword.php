
<?php 
session_start();
require_once 'Database/db-pdoSH.php';
require_once 'vendor/autoload.php';
require_once 'functions.php';


if(empty($_SESSION)){
    
    if (!empty($_GET['token'])) {
        

        $token=$_GET['token'];
        $stmt_token = $pdo->prepare("SELECT * FROM users WHERE token = ?");
        $stmt_token->execute([$token]);
        $result = $stmt_token->fetch();
        if(!$result){

            echo "Information introuvables, veuillez cliquer sur le lien 'mot de passe oublié'"; 

        }
}else{
    

    header('Location:forgotpassword.php');
}
    
}


?>


       
<?php  require_once 'Partials/head.php';?>
     <title>Modifier votre mot de passe </title>
<?php  require_once 'Partials/nav.php';

    ?>
    
    <main>

        <?php require_once 'Partials/profileNav.php'?>
        <?php if(!empty($_SESSION)): ?>

              <div class="col-9">
              <h4 class="ms-3 mb-5 mt-5 text-darkorange">Modifier le mot de passe</h4>
        <?php else :?>
            <div class="col-12">
                <h2 class="text-center my-3">Modifier le mot de passe</h2>
            <?php endif ?>
               
                    <div class=" mb-5 row ">
                        <div class="col"></div>
                        <div class="col-4 mb-3">
                        <?php if(!empty($_SESSION)): ?>
                            <form  method="POST" action="Controllers/modifypasswordCtrl.php">
                            <?php else :?>
                            <form  method="POST" action="Controllers/modifypasswordCtrl.php?token=<?= $_GET['token'] ?>">
                            <?php endif ?>


                                
                              
                                <div class=" inputs mb-5 d-flex flex-column justify-content-center">
                   
                                    <input class="input pl-3 py-3 border" type="password" placeholder="Mot de passe" name="change_password" id="userPassword">
                                    <input class="input pl-3 py-3 border" type="password" placeholder="Confirmez le mot de passe" name="change_confirm_password"id="userPassword2">
              
                                </div > 
                                <div class="center d-flex justify-content-center">
                        <button type="submit" id="submit" name="submit">Modifier</button>
                                </div>
                                
                                
                            </form>
                
                        </div>
                        <div class="col"></div>
                    </div>
              </div>
              
            </div>
          </div>

        
    </main> 
    <?php

    require_once 'Partials/footer.php';?>









