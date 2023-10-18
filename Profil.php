<?php 
session_start();

    require_once 'Partials/head.php';
    ?><title>Profil du client</title><?php  
   require_once 'Partials/nav.php';
   require_once 'Controllers/avatarCtrl.php';

    ?>

<main>
    <?php if(!empty($_SESSION)): ?>
        <?php require_once 'Partials/profileNav.php';
        ?>
        
        
        <div class="col-12 col-sm-12 col-md-9 mb-5">
            <h2 class="text-center mt-3 mb-5">Bonjour, <?= $_SESSION['user']['prenom']?> !</h2>
                <div class="mb-5 row ">
                    <h4 class="ms-3 mb-5 text-darkorange">Informations personnelles</h4>
                    <div class="bg-light rounded-3 p-4 mb-4">
                        <div class="d-flex align-items-center"><img class="rounded img-resize" src="img/logo/<?= $_SESSION['user']['avatar'] ?>">
                        <div class="ps-3">
                            <button type="button" class="btn btn-light btn-shadow btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-repeat"></i> Change avatar
                            </button>
                            <div class="p mb-0 fs-ms text-muted">
                                Upload JPG, GIF or PNG image. 300 x 300 required.
                            </div>
                    
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Changer d'avatar</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>                            
                                
                                        <form class="form" action="" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <input class="p-2" name="avatar" type="file">
                                        
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div> 
                            
                                </div>
                            </div>
                            <!-- Fin Modal -->
                        </div>
                    </div>
              </div>
           
                    <div class="    col-12 col-sm-9 col-md-6">   
                        <form class="" action="controllers/modifyprofileCtrl.php" method="post">
                           
                            <div class="">
                                <div class="row">
                            
                                    <div class="col-12 col-sm-12 col-xl-6"> 
                                        <span class="mb-2">
                                        <i class="fa-solid fa-circle-user fa-xl" style="color: #1a1a19;"></i>
                                        Prénom 
                                        </span>
                                        <input type="text" class="form-control" name="prenom" placeholder="First name"Value= "<?= $_SESSION['user']['prenom']?>" aria-label="First name">
                                    </div>
                                
                                    <div class="col-12 col-sm-12 col-xl-6">
                                        <span class="mb-2">
                                            Nom
                                        </span>
                                        <input type="text" class="form-control" name="nom" placeholder="Last name" Value= "<?= $_SESSION['user']['nom']?>"aria-label="Last name">
                                    </div>
                                </div>

                                <div >

                                <span class="mb-2">
                                    <i class="fa-solid fa-envelope fa-xl" style="color: #1a1a19;"></i>
                                    Email 
                                </span>
                                <input type="email" class="form-control mt-2 " placeholder="email" Value= "<?= $_SESSION['user']['email']?>"aria-label="Email" disabled>
                            </div>

                        
                        </div>
                    </div>
                    <div class="  col-12 col-sm-9 col-md-6">
                        <div >
                            <span class="mb-2">
                            <i class="fa-solid fa-mobile-screen-button fa-xl"style="color: #1a1a19;"></i>
                            Numéro de téléphone
                            </span>
                            <input type="tel" class="form-control mt-2 " placeholder="tel" Value= "0606060606" aria-label="Tel" disabled>
                        </div>
                        
                        <div class="mb-3">
                            <span class="mb-2">
                                <i class="fa-solid fa-location-dot fa-xl" style="color: #1a1a19;"></i>
                                Adresse Postale
                            </span>
                            <input type="text" id="disabledTextInput" class="form-control mt-2 " placeholder="70 av Charles de Gaulle, 94000 Créteil" disabled>
                        </div>
                        <div class="d-flex justify-content-end">

                            <button class="btn btn-orange"> Modifier</button>
                        </div>
                </form>
                    </div>
                </div>
              
            </div>
    </div>

        
</main>  
<?php else : ?> 


    <div class="size-page">

        <h2 class="mt-3 mx-5">Connectez vous pour accéder à votre profil</h2>
        <a role="button" class="btn  btn-orange mt-1 mx-5" href="login.php"><i class="fa-solid fa-arrow-right-to-bracket" style="color: #ffffff;"></i> Connectez vous</a>

    </div>
   

<?php endif ?>
    
   <?php require_once 'Partials/footer.php';?>