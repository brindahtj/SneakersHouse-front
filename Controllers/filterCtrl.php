<?php 
    require_once 'Database/db-pdoSH.php';
    
if (!empty($_GET['filter'])){
    switch($_GET['filter']) {
        case "new" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND p.new=1 ";
            $results=$pdo->query($query)->fetchAll();
        
        break;

        case "promo" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND p.promo=1 ";
            $results=$pdo->query($query)->fetchAll();
              
        break;
        case "homme" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND g.libelle='Homme'";
           $results=$pdo->query($query)->fetchAll();
              
        break;
        case "femme" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND g.libelle='Femme'";
           $results=$pdo->query($query)->fetchAll();
              
        break;
        case "marques" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures ";
           $results=$pdo->query($query)->fetchAll();
              
        break;
        case "adidas" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='Adidas' ";
           $results=$pdo->query($query)->fetchAll();
              
        break;
        case "brooks" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='Brooks' ";
           $results=$pdo->query($query)->fetchAll();
             
        break;
        case "champion" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='Champion' ";
           $results=$pdo->query($query)->fetchAll();
             
        break;
        case "converse" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='Converse' ";
           $results=$pdo->query($query)->fetchAll();
             
        break;
        case "fila" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='Fila' ";
           $results=$pdo->query($query)->fetchAll();
             
        break;
        case "jordan" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='Jordan' ";
           $results=$pdo->query($query)->fetchAll();
             
        break;
        case "newbalance" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='New Balance' ";
           $results=$pdo->query($query)->fetchAll();
             
        break;
        case "nike" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='Nike' ";
           $results=$pdo->query($query)->fetchAll();
             
        break;
        case "puma" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='Puma' ";
           $results=$pdo->query($query)->fetchAll();
             
        break;
        case "reebok" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='Reebok' ";
           $results=$pdo->query($query)->fetchAll();
             
        break;
        case "vans" : 
            $query="SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND m.marque='Vans' ";
            $results=$pdo->query($query)->fetchAll();
             
        break;
    }
}
else if(!empty($_GET['id'])){

        $sql = "SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND p.vedette=1 ";
        $results = $pdo->query($sql)->fetchAll();
}else{
  

   
        if($_SERVER['REQUEST_URI']=='/index.php' ||$_SERVER['REQUEST_URI']=='/' ){
            $sql = "SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures AND p.vedette=1 ";
            $results = $pdo->query($sql)->fetchAll();  

        
        }else{ 
            $sql = "SELECT* FROM produits p, marques m, genres g, pointures po WHERE p.id_marques=m.id_marques AND p.id_genres=g.id_genres AND p.id_pointures=po.id_pointures";
            $results = $pdo->query($sql)->fetchAll();  
                    
        }
}
   

    