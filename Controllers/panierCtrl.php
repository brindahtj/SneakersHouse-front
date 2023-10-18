<?php
session_start();
require_once '../Database/db-pdoSH.php';
if (!empty($_SESSION['user'])) {

    $query = "INSERT INTO `panier`(`id_users`, `id_produits`) VALUES (:idUser,:idProduct)";
    $queryExecute = $pdo->prepare($query);
    $queryExecute->bindValue(':idUser', $_SESSION['user']['id'], PDO::PARAM_INT);
    $queryExecute->bindValue(':idProduct', $_GET['idProduct'], PDO::PARAM_INT);
    $queryExecute->execute();
    $result = $queryExecute->fetch();


    if (!empty($_GET['idProduct']) && !empty($_GET['target'])) {

        if ($_GET['target'] == 'produit') {
            header('Location: ../produit.php?id=' . $_GET['idProduct']);
        } elseif ($_GET['target'] == 'catalogue') {
            header('Location: ../catalogue.php');
        } elseif ($_GET['target'] == 'index') {
            header('Location: ../index.php');
        }
    }
} else {
    header('Location:../seconnecter.php');
}
