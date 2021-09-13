<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
    <title>jarditou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php    
        require "connexion_bdd.php"; 
        $db = connexionBase(); // Appel de la fonction de connexion
    ?>
    <?php
     
         $pro_id=$_GET['pro_id'];
         $requete = "SELECT *  FROM produits join categories on categories.cat_id=produits.pro_id where pro_id=".$pro_id;
         $result = $db->query($requete);
         $row = $result->fetch(PDO::FETCH_OBJ);
         $pro_bloque=$row->pro_bloque;
    ?>
</head>
<?php
    include "hautpage.php";
    ?>
    <div class="d-flex justify-content-center">
    <img src="images/<?php echo $row->pro_id.".".$row->pro_photo;?>" width="300">
    </div >
    <h1 class="d-flex justify-content-center" >Ëtes vous sûr de vouloir supprimer</h1>
    <h1 class="d-flex justify-content-center" ><div classe="">"<?php echo $row->pro_libelle;?>"</div>de la base de donnéés?</h1>
    <from>
    <div class="d-flex justify-content-center" name = actionProduit>
   <button class="btn btn-secondary "><a class="nav-link"  href="details.php?pro_id=<?php echo $row->pro_id?>" >Annuler</a></button>
   <button class="btn btn-danger"><a class="nav-link" href="delete_script.php?pro_id=<?php echo $row->pro_id?>">Supprimer</a></button>
    </div><br/>
    <?php 
     $result->closeCursor();
     ?>
   
        <?php 
        require 'piedpage.php';
        ?>
</body>

</html> 