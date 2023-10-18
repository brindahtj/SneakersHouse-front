<?php
session_start();
require_once 'Database/db-pdoSH.php';
if (!empty($_SESSION['user'])) {

    //modifier quantité


    //supprimer article



    //vider





    $query = "SELECT *, COUNT(`panier`.`id_produits`) as `quantite` FROM `panier` 
        INNER JOIN `produits` ON `panier`.`id_produits` = `produits`.`id`
        WHERE `id_users` = :id
        GROUP BY `panier`.`id_produits`;";
    $queryExecute = $pdo->prepare($query);
    $queryExecute->bindValue(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
    $queryExecute->execute();
    $result = $queryExecute->fetchAll();
} else {
    header('Location: seconnecter.php');
}
