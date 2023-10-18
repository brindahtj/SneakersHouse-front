<?php session_start();
if(empty($_SESSION) || $_SESSION['user']['admin']!=1){
    header('Location: index.php');
}
  
    require_once 'Partials/head.php';?>
     <title>Admin</title>
   <?php  require_once 'Partials/nav.php';
    ?>

<header class="bg-white shadow">
        <div class="">
        <h1 class="">
            Ajouter un produit
        </h1>
        </div>
        
</header>

<main>
    <div class="d-flex justify-content-end">
            <a role="button" class="btn btn-orange " href="admin.php">Accueil</a>
            <a role="button" class="btn btn-orange mx-2" href="productChange.php">Modifier un produit</a>
        </div>
    <form class="d-flex flex-column container" action="Controllers/productCtrl.php?action=add" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6" >
                <div>
                    <label class=" col-5 " for="logo">Titre</label>
                    <input class="input mt-1 mb-4" type="text" name="titre" placeholder="nom du produit" required>
                </div>
                <div>
                    <label class=" col-5 " for="logo">Description</label>
                    <textarea class="mb-4" name="description" id="" cols="30" rows="5" placeholder="description du produit"  required></textarea>
                </div>
                <div>
                    <label class=" col-5 " for="size">Pointure</label>
                    <input class="input mt-1 mb-4" type="text" name="size" placeholder="Pointure" required>
                </div>
                <div>
                    <label class=" col-5 " for="image">Image</label>              
                    <input class="input mt-1 mb-4" type="file" id="image" name="image"  required>
                </div>
                <div>
                    <label class=" col-5 mt-2" for="promo">Promotion</label>
                    <span id="promo">
                        <input type="radio" name="promo" id=""  value=1 required><label class="ms-1 me-2" for="promo">oui</label>
                        <input type="radio" name="promo" id=""  value=0 required><label class="ms-1 me-2" for="promo">non</label>
                    </span>
                </div>
                
                <div >
                    <label class=" col-5 mt-2 " for="new">Nouveauté</label>
                    <input type="radio" name="new" id=""  value=1 required><label class="ms-1 me-2" for="new">oui</label>
                    <input type="radio" name="new" id=""  value=0 required><label class="ms-1 me-2" for="new">non</label>
                    
                </div>

                <div>
                    <label class=" col-5 mt-2" for="vedette">Produit vedette</label>
                    <input type="radio" name="vedette" id=""  value=1 required><label class="ms-1 me-2" for="vedette">oui</label>
                    <input type="radio" name="vedette" id=""  value=0 required><label class="ms-1 me-2" for="vedette">non</label>
                </div>
                <div>
                    <label class="col-5 mt-2" for="genre">Produit genre</label>
                    <input type="radio" name="genre" id="femme"  value="femme" required><label class="ms-1 me-2" for="femme">Femme</label>
                    <input type="radio" name="genre" id="homme"  value="homme" required><label class="ms-1 me-2" for="homme">Homme</label>
                    <input type="radio" name="genre" id="unisexe"  value="unisexe" required><label class="ms-1 me-2" for="unisexe">Unisexe</label>
                </div>
                <div>
                    <label class=" col-5 mt-3" for="marque">Marque</label>
                    <input class="input mt-1 mb-4" type="text" id="marque" name="marque" placeholder="marque du produit" required>
                </div>
                <div>
                    <label class=" col-5 " for="prix">Prix</label>
                    <input class="input mt-1 mb-4" type="number" id="prix" name="prix" placeholder="prix du produit" required>
                </div>
                <div class="visually-hidden" id="prix_barre">
                    <label class=" col-5 " for="prix_barre">Ancien Prix</label>
                    <input class="input mt-1 mb-4 " type="number"  name="prix_barre" placeholder="prix barre du produit" >
                </div>
                <div>
                    <button class="input col-3 mb-4" type="submit">Ajouter</button>            
                </div>
            </div>
            <div class="col-3"></div>

        </div>
    </form>
</main>
<script src="js/formAdmin.js"></script>
</body>
</html>