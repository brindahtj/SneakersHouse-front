<?php  session_start();
    require_once '../Database/db-pdoSH.php';
    require_once '../functions.php';
    
if (!empty($_GET['action'])){
    switch($_GET['action']) {
        case "add" : 
            $titre = $_POST['titre'];
            $description = $_POST['description'];

            
            // image

            if (!empty($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image =$_FILES['image']['name'];
                $tmp_filename = $_FILES['image']['tmp_name'];
                $size = $_FILES['image']['size'];


                    // Recupaeration de l'extension
                $explode = explode('.', $filename);
                $extension = end($explode);
                $lower_extension = strtolower($extension);

                    // verification extension
                
                
                if ($lower_extension === 'png' || $lower_extension === 'jpeg' 
                        || $lower_extension === 'jpg') {
                        move_uploaded_file($tmp_filename, $image);
                            
                    }else if($size>3000) {
                            die('Taille maximum de fichier de 3mo');
                }else{
                            die('Mauvais format de fichier.');
                }
                        
            }else{
                   die ("Image obligatoire");
            }

            $pointure=$_POST['size'];
            $genre=$_POST['genre'];
            $promo=$_POST['promo'];
            $new=$_POST['new'];
            $vedette=$_POST['vedette'];
            $marque = $_POST['marque'];
            $prix = $_POST['prix'];

            if ($_POST['promo']=1){

                $prix_barre=$_POST['prix_barre'];
            }
        
            
            
            $query_id_marques="SELECT id_marques FROM marques WHERE marque='$marque'";
            $result= $pdo->query($query_id_marques)->fetch();
            $id_marques= $result['id_marques'];

            $query_id_pointures="SELECT id_pointures FROM pointures WHERE pointure='$pointure'";
            $result2=$pdo->query($query_id_pointures)->fetch();
            $id_pointures= $result2['id_pointures'];

            $query_id_genres="SELECT id_genres FROM genres WHERE libelle='$genre'";
            $result3=$pdo->query($query_id_genres)->fetch();
            $id_genres= $result3['id_genres'];
            
            $stmt = $pdo->prepare("INSERT INTO produits (id_marques,id_pointures,id_genres, titre, image, description, prix, prix_barre, vedette, new, promo) VALUES (?,?,?,?,?,?,?,?,?,?,?)" );
            $stmt->execute([$id_marques,$id_pointures,$id_genres,$titre,$image, $description,$prix, $prix_barre,$vedette,$new,$promo]);
            
  

            header('Location: ../admin.php');
        
        
            break;

        case "delete" : 
            $id = $_GET['id'];
            $sql = "DELETE  FROM produits WHERE id = $id";
            $pdo->query($sql);
            header('Location: ../admin.php');
        break;
        case "change" : 
            $id = $_GET['id'];
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $pointure=$_POST['size'];
            $genre=$_POST['genre'];
            $promo=$_POST['promo'];
            $new=$_POST['new'];
            $vedette=$_POST['vedette'];
            $marque = $_POST['marque'];
            $prix = $_POST['prix'];
            
            if ($_POST['promo']=1){

                $prix_barre=$_POST['prix_barre'];
            }

             // image

             if (!empty($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image =$_FILES['image']['name'];
                $tmp_filename = $_FILES['image']['tmp_name'];
                $size = $_FILES['image']['size'];


                    // Recupaeration de l'extension
                $explode = explode('.', $filename);
                $extension = end($explode);
                $lower_extension = strtolower($extension);

                    // verification extension
                
                
                if ($lower_extension === 'png' || $lower_extension === 'jpeg' 
                        || $lower_extension === 'jpg') {
                        move_uploaded_file($tmp_filename, $image);
                            
                    }else if($size>3000) {
                            die('Taille maximum de fichier de 3mo');
                    }else{
                            die('Mauvais format de fichier.');
                    }
                        
            }else{
                var_dump($_FILES['image']['error']);
                   die ("Image obligatoire");
            }

            if ($_POST['prix_barre']){

                $prix_barre=$_POST['prix_barre'];
            }
            $query_id_marques="SELECT id_marques FROM marques WHERE marque='$marque'";
            $result= $pdo->query($query_id_marques)->fetch();
            $id_marques= $result['id_marques'];

            $query_id_pointures="SELECT id_pointures FROM pointures WHERE pointure='$pointure'";
            $result2=$pdo->query($query_id_pointures)->fetch();
            $id_pointures= $result2['id_pointures'];

            $query_id_genres= "SELECT id_genres  FROM genres WHERE libelle='$genre'";
            $result3=$pdo->query($query_id_genres)->fetch();
            $id_genres= $result3['id_genres'];

            $sql = "UPDATE produits SET id_marques=?, id_pointures=?,id_genres=?,titre=?, image=?, description=?, prix=?, prix_barre=?, vedette=?,new=?, promo=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id_marques, $id_pointures,$id_genres,$titre,$image, $description,$prix, $prix_barre,$vedette,$new,$promo,$id]);
             header('Location: ../admin.php');;
        break;
    }
}
   

    