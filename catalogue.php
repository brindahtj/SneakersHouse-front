

<?php
session_start();
require_once 'Database/db-pdoSH.php';
require_once 'Controllers/filterCtrl.php';
require_once 'Partials/head.php';
require_once 'Partials/nav.php';

?>
<body>
    <div class="container">
    
        
    <div class="row mt-2">
            <div class="col-12 mb-3 col-md-6">
                <select class="form-select" id="filterByCategory" onchange="searchFilter()">
                
                    <?php if($_GET['filter']=='new'):?>
                    <option value="" >Tout</option>
                    <option value="new" selected>Nouveauté</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="promo">Promos</option>
                   

                    <?php elseif($_GET['filter']=='homme'):?>
                    <option value="" >Tout</option>
                    <option value="new" >Nouveauté</option>
                    <option value="homme" selected>Homme</option>                    
                    <option value="femme">Femme</option>
                    <option value="promo">Promos</option>
                    
                    <?php elseif($_GET['filter']=='femme'):?>

                    <option value="" >Tout</option>
                    <option value="new" >Nouveauté</option>
                    <option value="homme" >Homme</option>                    
                    <option value="femme"selected>Femme</option>
                    <option value="promo">Promos</option>

                     <?php elseif($_GET['filter']=='promo'):?>
                        <option value="" >Tout</option>
                    <option value="new" >Nouveauté</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="promo"selected>Promos</option>
                    
                    <?php else:?>
                    <option value="" selected>Tout</option>
                    <option value="new">Nouveauté</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="promo">Promos</option>
                    <?php endif?>
                </select>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <input type="text" class="form-control" placeholder="Search cards" aria-label="Search cards"
                    onkeyup="searchFilter()">
        
            </div>
      

        <h1>Catalogue</h1>
        <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas repudiandae ipsa maxime aliquam, harum atque debitis eveniet ipsam, impedit fuga fugit omnis repellendus, mollitia cupiditate dolorem reiciendis quam saepe ipsum.</p>

      

            <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-3 g-4 gridCards"> 
                <?php foreach ($results as $product) : ?>
                <?php if(($product['new'] ==1 )&& ($product['id_genres']==1)) :?>
                    <div class="col-12 col-md-6 col-lg-4  new homme">
                <?php elseif(($product['new'] ==1 )) :?>
                    <div class="col-12 col-md-6 col-lg-4  new ">
                <?php elseif(($product['new'] ==1 )&& ($product['id_genres']==2)) :?>
                    <div class="col-12 col-md-6 col-lg-4  new femme">
                
                
                <?php elseif(($product['promo'] ==1 )) :?>
                    <div class="col-12 col-md-6 col-lg-4  promo ">
                <?php elseif(($product['promo'] ==1 )&& ($product['id_genres']==1)) :?>
                    <div class="col-12 col-md-6 col-lg-4   promo homme">
                <?php elseif(($product['promo'] ==1 )&& ($product['id_genres']==2)) :?>
                    <div class="col-12 col-md-6 col-lg-4  promo femme">

                <?php elseif(($product['id_genres']==2)) :?>
                    <div class="col-12 col-md-6 col-lg-4  femme">


                <?php elseif($product['id']):?>
                    <div class="col-12 col-md-4">
                <?php endif ?>
                        <div class="card " value="">
                        <a href="produit.php?id=<?= $product['id'] ?> "><img src="img/produits/<?= $product['image'] ?>" class="card-img-top img-catalogue"
                         alt="image produit">
                        <div class="card-body">
                            <div class=" d-flex flex-column">
                                <h5 class="card-title"><?= $product['titre'] ?></h5></a>
                                <?php if($product['promo']==1): ?>
                            </div>
                            <div class=" d-flex">

                                <span class="card-text barre me-2 "><?= $product['prix_barre'] ?>€</span>
                                <?php else :?>
                                <?php endif ?>
                                <span class="card-text "><?= $product['prix'] ?>€</span>
                            </div>

                            <div class="row">
                                    
                            <?php if(!empty($_SESSION)):?>
                                    <div class="col-12">
                                        <a  href="Controllers/panierCtrl.php?idProduct=<?= $product['id'] ?>&target=catalogue" class="btn btn-orange "  type="submit">Ajouter Au Panier </a>  
                                    </div>
                                <?php else:?>
                                    <div class="col-12">
                                        <a target="_blank" href="Controllers/panierCtrl.php?idProduct=<?= $product['id'] ?>&target=catalogue" class="btn btn-orange "  type="submit">Ajouter Au Panier </a>  
                                    </div>
                                    <?php endif?>
                                    <div class="col-3"></div>
                                    <div class="col-3"></div>
                                </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            
        </div> 
</div>
            



<?php require_once 'Partials/footer.php'; ?>
