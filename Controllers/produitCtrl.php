<?php 
session_start();
require_once 'Database/db-pdoSH.php';
if(!empty($_GET['id'])){
    

$query = "SELECT* FROM produits p, marques m, pointures po WHERE p.id_marques=m.id_marques AND p.id_pointures=po.id_pointures AND `id` = :id GROUP BY po.pointure;";
$queryExecute = $pdo->prepare($query);
$queryExecute->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$queryExecute->execute();
$product = $queryExecute->fetch(PDO::FETCH_OBJ);


if(!$product){
    header('Location:produitDeleted.php');

}

}else{
    header('Location:produitDeleted.php');
}
?>