<?php
require_once 'Controllers/produitCtrl.php';
require_once 'Controllers/filterCtrl.php';
require_once 'Partials/head.php';
require_once 'Partials/nav.php';
?>
<main>
    <div>
        <div class="container-fluid">

            <h1></h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        
                        <div id="photoprincipale" class="col-xs-4 item-photo">
                            <img style="" class="img-produit" src="img/produits/<?= $product->image ?>" alt="photo du produit">
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="row">
                            <div class="col-9 text-center">
                                <div class="">
                                    <div class="d-flex justify-content-center" >
                                        <img class="logobrand img-resize" src="img/brand/<?= $product->logo ?>" alt="">
                                    </div>
                                    <div class="d-flex justify-content-center" >
                                        <h2><?= $product->titre ?></h2>
                                    </div>
                                    <div class="d-flex justify-content-center" >
                                       
                                    </div>
                                    <h5><?= $product->marque ?>
                                        <small class="grey">(5054 Avis)</small>
                                    </h5>
                                    
                                    <h6 class="title-price"><small class="grey">Offre Exceptionnelle</small>
                                        <p class="grey">Livraison Gratuite </p>
                                    </h6>
                                    <?php if($product->promo==1):?>
                                        <span class="barre h5"> <?= $product->prix_barre ?>€</span>
                                        <span id="prix" class="h3 ms-1"><?= $product->prix ?> €</span>
                                    <?php else:?>
                                        <span id="prix" class="h3 ms-1"><?= $product->prix ?> €</span>
                                    <?php endif?>
                                    
                                    <div class="section2 mt-3  ">
                                        <section class="">
                                          <span class="select ">
                                                <select class="mb-3">
                                                        
                                                        <option>Pointure</option>
                                                        <option value=""><?= $product->pointure ?></option>
                                                </select>
                                            </span>
                                                <span class=" w-50">
                                                <p class="qty">
                                                    <label for="qty"> Quantité:</label>
                                                    <input class=" w-25" type="number" name="qty" id="qty" min="1" max="10" step="1" value="1">
                                                </p>    
                                                </span>
                                        </section>

                                        <div class="bloc">
                                           
                                           
                                            <div class="">
                                                </span class="bg-orange">
                                                        <a href="Controllers/panierCtrl.php?idProduct=<?= $_GET['id'] ?>&target=produit" class="btn btn-orange " type="submit"> Ajouter Au Panier </a>
                                                </span>
                                            </div>
                                    </div> <br>


                                    <div>
                                        <p>France: livraison offerte à partir de 90€ d'achat

                                            International - liste des pays desservis :
                                            Livraison offerte à partir de 90€ d'achat.
                                            Aerosols et produits outlet non éligibles à la livraison internationale.

                                            Livraison et retours offerts en magasin (hors magasins outlet et produits spécifiques).</p>
                                    </div>
                                    <div class="w-100 dropdown">
                                        <button class="btn btn-lg-4 btn-secondary btn-light dropdown-toggle w-100 border  " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <b>DÉTAILS PRODUIT</b></button>
                                        <ul class="dropdown-menu " aria-labelledby="dropdownMenu2">
                                            <p><b>DESCRIPTIF PRODUIT :</b><br>
                                                Nike revient avec une nouvelle version de son iconique modèle Air Max 90.<br> Arborant une palette de marron et d’orange, elle revêt une superposition de tissus lisses, suédés et micro-perforés.<br>Craquez pour sa semelle épaisse laissant apparaître son unité Air, technologie révolutionnaire inventée par Frank Rudy.
                                        </p>

                                        </ul>
                                    </div>


                                </div>    
                            </div>
                        </div>
                       
                    </div>

                </div>
            </div>
            <div id="title2" class="container-fluid text-center">
                <h2 class="my-5">VOUS AIMEREZ AUSSI</h2>


            </div>
            <div class="container">
              
               
                <div class="row row-cols-1 row-cols-md-3 g-4 gridCards"> 
                    <?php foreach ($results as $product) :?>
                    <div class="col-4">
                        <div class="card ">
                            <a href="produit.php?id=<?= $product['id'] ?> "><img src="img/produits/<?= $product['image'] ?>" class="card-img-top img-catalogue"
                                alt="...">
                            <div class="card-body  d-flex flex-column">
                                <h5 class="card-title"><?= $product['titre'] ?></h5></a>
                                <?php if($product['promo']==1): ?>
                                <span class="card-text barre"><?= $product['prix_barre'] ?></span>
                                <?php else :?>
                                <?php endif ?>
                                <p class="card-text"><?= $product['prix']?> € </p>
                                <div class="row">
                                <?php if(!empty($_SESSION)):?>
                                    <div class="col-6">
                                        <a  href="Controllers/panierCtrl.php?idProduct=<?= $product['id'] ?>&target=produit" class="btn btn-orange "  type="submit">Ajouter Au Panier </a>  
                                    </div>
                                <?php else:?>
                                    <div class="col-6">
                                        <a target="_blank" href="Controllers/panierCtrl.php?idProduct=<?= $product['id'] ?>&target=produit" class="btn btn-orange "  type="submit">Ajouter Au Panier </a>  
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

    
</main>



<?php

require_once 'Partials/footer.php';


?>

