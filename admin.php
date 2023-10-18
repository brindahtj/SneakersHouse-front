<?php session_start();
if (empty($_SESSION) || $_SESSION['user']['admin'] != 1) {
    header('Location: index.php');
}
require_once 'Database/db-pdoSH.php';
require_once 'functions.php';
require_once 'Partials/head.php'

 ?> 
<title>Admin</title>
<?php
require_once 'Partials/nav.php';
$sql = "SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures";
$results = $pdo->query($sql)->fetchAll(); 

?>



<header class="bg-white shadow">
    <div class="">
        <h1 class="">
            Produits
        </h1>
    </div>
</header>

<main>
    <div class="d-flex justify-content-end">
        <a class="btn btn-orange" role="button" href="productAdd.php">Ajouter Produit</a>
    </div>
    <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Ancien prix</th>
        <th scope="col">Prix</th>
        <th scope="col">Marque</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($results as $product) :  ?>
    <tr>
      <th scope="row"><?= $product['id']?></th>
      <td><?= $product['titre'] ?></td>
      <?php if($product['promo']==1) :?>
      <td><?= $product['prix_barre'] ?> </td>
      <?php else:?>
        <td><?= NULL ?> </td> 
      <?php endif?>
      <td><?= $product['prix'] ?> </td>
      
      <td><?= $product['marque'] ?></td>
      <td>
        <a role="button" class="btn btn-success" href="productChange.php?id=<?= $product['id']?>">Modifier</a>
        <a role="button" class="btn btn-danger" href="Controllers/productCtrl.php?action=delete&id=<?= $product['id']?>">Supprimer</a>
     </td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>
</div>
</main>