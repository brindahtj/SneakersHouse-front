<?php
require_once 'Controllers/cartCtrl.php';
require_once 'Partials/head.php';
require_once 'Partials/nav.php';
?>

<!-- page panier  -->
<div class="container">
  <table class="table my-3">
    <a href="emptycart.php" class="btn btn-sm btn-danger mt-2">Vider le panier</a>
    <thead>
      <tr class="text-center">
        <th>Nom</th>
        <th>Quantite</th>
        <th colspan="2"></th>
      </tr>
    </thead>

    <tbody>
      <?php
      if (!empty($result)) :
        foreach ($result as $cart) :
      ?>
          <tr class="text-center">
            <td><?= $cart['titre']; ?></td>
            <td>
              <p>
                <a class="btn btn-sm btn-warning me-1" href="cart.php?idEdit=<?= $cart['id'] ?>&newQuantite=<?= $cart['quantite'] - 1 ?>">-</a>
                <?= $cart['quantite']; ?>
                <a class="btn btn-sm btn-warning ms-1" href="cart.php?idEdit=<?= $cart['id'] ?>&newQuantite=<?= $cart['quantite'] + 1 ?>">+</a>
              </p>
            </td>
            <td><a class="btn btn-sm btn-danger" href="removecartitem.php?id=<?= $cart['id']; ?>">Retirer</a></td>
          </tr>
      <?php
        endforeach;
      endif;
      ?>
    </tbody>
  </table>
</div>