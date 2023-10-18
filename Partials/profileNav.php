<?php if(!empty($_SESSION)): ?>

  

<a class="btn btn-danger mx-3" role="button" href="Controllers/logoutCtrl.php">
    <i class="fa-solid fa-arrow-right-from-bracket" style="color: #ffffff;"></i>                    Se deconnecter
</a>
<div class="container-fluid mb-5">
    


            <div class="row">
              <div class="col-12 col-sm-12 col-md-3 mt-5 card shadow ">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-center align-items-start">
                        <div class=" ms-3">
                        <img class="img-resize" src="img/logo/<?= $_SESSION['user']['avatar'] ?>" alt="">
                        <div class="fw-bold"><?= $_SESSION['user']['nom']?>  <?= $_SESSION['user']['prenom']?></div>
                        <?= $_SESSION['user']['email']?>
                        <div class="smalltext"><a href="profil.php"> Modifier les informations</a></div>
                        </div>
                        
                    </li>
                   
                    <li href="#" class="list-group-item list-group-item-light py-2"><i class="fa-solid fa-gear fa-xl me-2 "style="color: #1a1a19;"></i>Paramétrage du compte</li>

                        <a class="list-group-item list-group-item-action py-3" href="Profil.php"> Profil</a>
                        <a class="list-group-item list-group-item-action py-3" href="modifypassword.php">Modifier votre mot de passe</a>
                    
                    <li href="#" class="list-group-item list-group-item-light py-2"><i class="fa-regular fa-clipboard fa-xl me-2 " style="color: #1a1a19;"></i>Tableau de bord</li>

                        <a class="list-group-item list-group-item-action py-3" href="#">Vos anciennes commandes</a>
                        <a class="list-group-item list-group-item-action py-3" href="#">Effectuer un Retour</a>
            
                        <a class="list-group-item list-group-item-action py-3" href="contact.php">Service Client</a>
                          
                       

                </ul>
              </div>
</nav>
        <?php else :?>

<div class="container-fluid">
    <div class="row">

    <?php endif ?>