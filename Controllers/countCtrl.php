<?php
require_once 'Database/db-pdoSH.php';


if(!empty($_SESSION)){
    $id_users=$_SESSION['user']['id'];
    $query="SELECT count(id_produits) FROM panier WHERE id_users=? ";
    $queryExecute = $pdo->prepare($query);
    $queryExecute ->execute([$id_users]);
    $count=$queryExecute->fetch();


} 


