
<?php
session_start();
require_once 'Controllers/filterCtrl.php';
require_once 'Partials/head.php';?>
<title>Site de e-commerce Promo, Accueil</title>
<?php require_once 'Partials/nav.php';?>

</head>

<!-- Ce code représente la partie "fil info" qui défile -->
<div id="file-info-banner" class="bg-light d-flex justify-content-around">
    <p> <img src="img/icones/livraison.png" alt="Camion de Livraison" class="img-icone"> Livraison offerte à partir de 100 euros</p>
    <p><img src="img/icones/soutien.png" alt="Aide clientele" class="img-icone"> Service client</p>
    <p><img src="img/icones/carte-de-credit.png" alt="Paiement securisé" class="img-icone"> Paiement sécurisé</p>
</div>

<!-- Ce code représente la partie slider  -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="./img/slider/jump-1461111_1280.jpg" class="d-block w-100" alt="Photo d'une femme qui saute">
            <div class="carousel-caption d-md-block">
                <h2>Flash Deal -30%</h2>
                <p>Jusqu'au mardi 27 juin sur une sélection d'articles</p>
            </div>

        </div>

        <div class="carousel-item">
            <img src="./img/slider/kicks-2213619_1280.jpg" class="d-block w-100" alt="Coup de pied">
            <div class="carousel-caption d-md-block">
                <h2>Flash Deal -30%</h2>
                <p>Jusqu'au mardi 27 juin sur une sélection d'articles</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="./img/slider/onthewall.jpg" class="d-block w-100" alt="jeune femme sportive">
            <div class="carousel-caption d-md-block">
                <h2>Flash Deal -30%</h2>
                <p>Jusqu'au mardi 27 juin sur une sélection d'articles</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- Ce code représente la section des produits en vedette. Il contient une grille de produits avec des images, des titres, des prix et des boutons d'ajout au panier. -->
<section class="featured-products">
    <div class="container mx-auto">
        <h2 class="section-title">Produits en vedette</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php foreach ($results as $product) :?>
                <div class="product">
                <a href="produit.php?id=<?= $product['id'] ?> ">
                    <img src="img/produits/<?= $product['image'] ?>" class="card-img-top img-catalogue"  alt="...">
                    <h3 class="card-title"><?= $product['titre'] ?></h3></a>
                    <?php if($product['promo']==1): ?>
                      <span class="card-text barre"><?= $product['prix_barre'] ?> € </span>
                      <?php else :?>
                      <?php endif ?>
                    <p class="card-text"><?= $product['prix']?> € </p>
                    <a href="#" class="product-button mx-auto">Ajouter au panier</a>
                </div>
            <?php endforeach ?>
       </div>
    </div>
</section>

<!-- Ce code représente la section des dernières actualités. Il contient une grille d'articles avec des images, des titres, des dates et des liens pour lire la suite. -->
<section class="latest-news">
    <div class="container">
        <h2 class="section-title">Nos dernières offres</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

            <div class="col">
                <!-- <div class="news-grid"> -->
                <div class="news-article">
                <a href="catalogue.php?filter=new">
                    <img src="./img/new/newcollection.jpg" alt="Image collection printemps été 2023">
                    <h3 class="news-title">Nouvelle collection printemps-été</h3>
                </a>
                    <!-- <p class="news-date">Publié le 25 mai 2023</p> -->
                    <a href="catalogue.php?filter=new" class="news-link">Découvrir</a>
                </div>
            </div>

            <div class="col">
                <div class="news-article">
                <a href="catalogue.php?filter=promo">
                    <img src="./img/new/sneakersdeal.avif" alt="Actualité 2">
                    <h3 class="news-title">Promotion spéciale : 50% de réduction</h3>
                </a>
                    <!-- <p class="news-date">Publié le 07 juin 2023</p> -->
                <a href="catalogue.php?filter=promo" class="news-link btn-orange">Découvrir</a>
                </div></a>
            </div>
            <div class="col">
                <div class="news-article">
                  <a href="catalogue.php?filter=marques">
                    <img src="./img/new/newarrivage.avif" alt="Actualité 3">
                    <h3 class="news-title">Toutes les marques</h3>
                  </a>

                    <!-- <p class="news-date">Publié le 10 mai 2023</p> -->
                    <a href="#catalogue.php?filter=marques" class="news-link">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ce code représente la section d'abonnement à la newsletter de la fashion store v1. Il contient un titre, un formulaire d'abonnement avec un champ d'adresse e-mail et un bouton "S'abonner". -->
<section class="subscribe">
    <div class="container">
        <h2 class="section-title">Abonnez-vous à notre newsletter</h2>

        <form class="subscribe-form" action="#" method="post">
            <input type="email" name="email" placeholder="Entrez votre adresse e-mail" required>
            <button type="submit">S'abonner</button>
        </form>
    </div>
</section>

<section class="shop-by-brand">
    <div class="container">
        <h2 class="section-title">Shop by Brand</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mx">
            <div class="col">
                <a href="catalogue.php?filter=adidas" class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4">
                    <img class="d-block mx-auto" src="./img/brand/adidas.png" style="width: 150px;" alt="logo Adidas">
                </a>
            </div>
            <div class="col">
                <a href="catalogue.php?filter=fila" class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4">
                    <img class="d-block mx-auto" src="./img/brand/fila.png" style="width: 150px;" alt="Logo Fila">
                </a>
            </div>
            <div class="col">
                <a href="catalogue.php?filter=newbalance" class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4">
                    <img class="d-block mx-auto" src="./img/brand/newBalance.png" style="width: 150px;" alt="Logo New Balance">
                </a>
            </div>
            <div class="col">
                <a href="catalogue.php?filter=nike" class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4">
                    <img class="d-block mx-auto" src="./img/brand/nike.png" style="width: 150px;" alt="Brand">
                </a>
            </div>
            <div class="col">
                <a href="catalogue.php?filter=reebok" class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4">
                    <img class="d-block mx-auto" src="./img/brand/reebok.png" style="width: 150px;" alt="Brand">
                </a>
            </div>
            <div class="col">
                <a href="catalogue.php?filter=vans" class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4">
                    <img class="d-block mx-auto" src="./img/brand/vans.png" style="width: 150px;" alt="Brand">
                </a>
            </div>

            <div class="col">
                <a href="catalogue.php?filter=puma" class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4">
                    <img class="d-block mx-auto" src="./img/brand/puma.png" style="width: 150px;" alt="Brand">
                </a>
            </div>

            <div class="col">
                <a href="catalogue.php?filter=converse" class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4">
                    <img class="d-block mx-auto" src="./img/brand/converse.png" style="width: 150px;" alt="Logo Fila">
                </a>
            </div>


            <!-- Ajoutez d'autres marques ici avec des liens vers les pages correspondantes -->
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<?php require_once 'Partials/footer.php'; ?>