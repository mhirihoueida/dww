
    <?php
    include "hautpage.php";
    ?>
    <?php
        $pro_id=$_GET["pro_id"];
        $requete1 = "SELECT cat_id, cat_nom, cat_parent FROM categories order by cat_nom";
        $result1 = $db->query($requete1);
    
     
         $requete = "SELECT *  FROM produits join categories on categories.cat_id=produits.pro_id where pro_id=".$pro_id;
         $result = $db->query($requete);
         $row = $result->fetch(PDO::FETCH_OBJ);
         $pro_bloque=$row->pro_bloque;
    ?>

    <div class="d-flex justify-content-center">
    <img src="images/<?php echo $row->pro_id.".".$row->pro_photo;?>" width="200">
    </div>
    <form name="Détail produit"   id="Détail produit" method="POST" action="update_script.php">
    <label for="pro_id"><b>Identifiant Produit</b></label>
    <input type="text" class="form-control" name="pro_id" id="pro_id" value="<?php echo $row->pro_id?>" Readonly>  
    <label for="pro_ref">Référence :</label>
    <input type="text" class="form-control" name="pro_ref" value="<?php echo $row->pro_ref;?>" >
    <label for="cat_nom"><b>Catégorie :</b></label>
                    <select class="form-control" name="cat_nom" id="cat_nom">
             <?php
            
                    while ($row2= $result1->fetch(PDO::FETCH_OBJ))
                    {      
                     if($row2->cat_parent != NULL){
                            echo"<option value=".$row2->cat_id."";
                
                    // row1 : requête sur le produit                   
                    // row2 : requête sur la catégorie
                                    
                            if ($row2->cat_id == $row->pro_cat_id) {echo" selected";}
                    
                            echo">".$row2->cat_nom."</option>\n"; //separation ligne SUR CODE SOURCE
                        }
                    }
            ?>
    <label for="pro_libelle">LIbellé :</label>
    <input type="text" class="form-control" name="pro_libelle" value="<?php echo $row->pro_libelle;?>" >
    <label for="pro_libelle">Description:</label>
    <input type="text" class="form-control" name="pro_description" value="<?php echo $row->pro_description;?>" >
    <label for="pro_prix">prix :</label>
    <input type="nulber" class="form-control" name="pro_prix" value="<?php echo $row->pro_prix;?>" >
    <label>Nombre d'unités en stock</label>
    <input type="number" class="form-control" name="pro_stock" >
    <label for="pro_couleur">Couleur :</label>
    <input type="text" class="form-control" name="pro_couleur" value="<?php echo $row->pro_couleur;?>" >
    <label for="pro_photo"><b>Extension de la photo :</b></label>
    <label for="pro_photo"><b>Extension de la photo :</b></label>
                                <select class="form-control" name="pro_photo" id="pro_photo">
                                     <option <?php if ($row->pro_photo == "jpg") {echo"selected";}?>>jpg</option>
                                     <option <?php if ($row->pro_photo == "png") {echo"selected";}?>>png</option>
                                     <option <?php if ($row->pro_photo == "gif") {echo"selected";}?>>gif</option>
                                </select>
    <label for="pro_d_ajout">Date d'ajout :</label>
    <input type="date" class="form-control" name="pro_d_ajout" value="<?php echo $row->pro_d_ajout;?>" disabled="disabled">
    <label for="pro_d_modif">Date d'ajout :</label>
    <input type="text" class="form-control" name="pro_d_modif" value="<?php date("y-m-d");?>" disabled="disabled" >
    <label for="pro_bloque"><b>Produit bloqué :</b></label>
                         <div class="form-check form-check-inline">
                            <label class="form-check-label" for="pro_bloque">Oui&nbsp</label><input class="form-check-input" type="radio" name="pro_bloque" id="pro_bloque1" value=1 <?php if ($row->pro_bloque == 1) echo"checked"; ?>>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="pro_bloque">Non&nbsp</label><input class="form-check-input" type="radio" name="pro_bloque" id="pro_bloque2" value=0  <?php if ($row->pro_bloque == 0) echo"checked"; ?>>
                        </div>
    
                        <?php 
                    if (isset ($_GET["erreur_ref"])){
                        if (($_GET["erreur_ref"]) == 1){
                            echo "Modification qui comporte un champs qui ne doit pas etre non null";
                            }
                    
                        if (($_GET["erreur_ref"]) == 3){
                            echo "Valeur Numérique psitive  pour le prix du produit, positive ou null pour le stock du produit";
                        }
                        if (($_GET["erreur_ref"]) == 4){
                            echo "La référence du produit existe déjà";
                        }
                        if  (($_GET["erreur_ref"]) == 5){
                            echo "Fichier non supporté";
                        }
                    }
                ?> 
   <br></br>
   <div class="d-flex justify-content-center" name ="actionProduit">
                <a  class="btn btn-success" href="tableau.php">Retour</a>
                <button class="btn btn-primary ml-1" type="submit" name="submit" value="1" onclick="verif();">Enregistrer</button>
            </div>
   </form>
   <br></br>

       <?php 
       require "piedpage.php";?>
  

 <script>

//vérifie si on envoit ou non le formulaire à "script_modif.php"
function verif(){ 

    //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir modifier cet enregistrement ?");

    //alert("retour :"+ resultat);

    if (resultat==false){

    alert("Vous avez annulé les modifications \n Aucune modification ne sera apportée à cet enregistrement !");

    //annule l'évènement par défaut ... SUBMIT vers "script_modif.php"


    }

    
}



</script>

</body>

</html>  

