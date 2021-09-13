
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>jarditou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<?php    
        require "connexion_bdd.php"; 
        $db = connexionBase(); 
        ?>

<body>
    <header>
        <div class="d-sm-none d-lg-block">
            <div class="row">
                <div class="col-8">
                    <img src="images/jarditou_logo.jpg" alt="jarditou_logo" width="150">
                </div>
                <div class="col-4">
                    <h2 class="text-center">Tout le jardin</h2>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Jarditou.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Acceuil<span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Votre promotion">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>
    <img src="images/promotion.jpg" alt="promotion" width="100%">


<?php 
//include "hautpage.php"
?>

<div class="container">

                <form action="validation_contact_jarditou.php" method="post" enctype="multipart/form-data">  
                <h6>* ces zones sont obligatoires</h6>
                    <h3>Vos coordonnées </h3> 
    <div class="form-group">

                    <label for="nom"> Nom*</label>
                    <input class="form-control  form-control-sm" type="text" name="nom" id="nom" placeholder="veuilliez saisir votre nom " 
                    value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];} ?>">
    </div>
        <div class="text-danger">
            <?php
            if(isset($nom)){
                echo"$erreur_nom";
            }
            ?>
        </div>
                
    <div class="form-group">
                    <label for="prenom"> Prénom*</label>
                    <input class="form-control form-control-sm" type="text" name="prenom" id="prenom" placeholder="veuilliez saisir votre prénom" value="<?php if(isset($_POST['prenom'])){echo $_POST['prenom'];} ?>">
                    
    </div>

        <div class="text-danger">
            <?php
            if(isset($prenom)){
                echo"$erreur_prenom";
            }
            ?>
        </div>

    <div class="form-group">
        <label for="sex">Sexe*:</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genre" id="Radios1" <?php if(isset($_POST['genre'])&& $_POST['genre'] == 'Feminin'){echo "checked";} ?> value="Feminin" >
            <label class="form-check-label" for="Radios1">
              Feminin
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genre" id="Radios2" <?php if(isset($_POST['genre'])&& $_POST['genre'] == 'Masculin'){echo "checked";} ?> value="Masculin" >
            <label class="form-check-label" for="Radios2">
              Masculin
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genre" id="Radios3"<?php if(isset($_POST['genre'])&& $_POST['genre'] == 'Neutre'){echo "checked";} ?> value="Neutre" >
            <label class="form-check-label" for="Radios3">
              Neutre
            </label>
        </div>

        <div class="text-danger">
        <?php
            if(isset($sexe)){
                echo"$sexe";
            }
            ?>
            </div>
                  
    <div >
                    <label for="date">Date de Naissance*</label>
                    <input type="date" name="date" id="date" class="form-control" placeholder="jj/mum/aaaa"value="<?php if(isset($_POST['date'])){echo $_POST['date'];} ?>">
    </div>

        <div class="text-danger">
            <?php
            if(isset($Dnaissance)){
                echo"$erreur_Dnaissance";
            }
            ?>
        </div>

    <div>
                    <label for="code">Code postal*</label> 
                    <input type="number" name="cp" id="code " class="form-control" value="<?php if(isset($_POST['cp'])){echo $_POST['cp'];} ?>">              
    </div>
    <div>
    <?php
            if(isset($codePost)){
                echo"$erreur_codePost";
            }
            ?> 
    </div>
    <div>
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" id="adresse" class="form-control " >
    </div>
    
    <div >
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville" class="form-control form-control-sm">
                
    </div>
    <div class="form-group">
                    <label for="email" >Email* </label>
                    <input type="text" name="email" id="email" placeholder="dave.loper@afpa.fr" class="form-control" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">

    </div>
        <div class="text-danger">
            <?php
            if(isset($Email)){
                echo"$erreur_Email";
            }
            ?>

        </div>
                
    <h3>Votre demande</h3>
    <div>
                    <label for="sujet">Sujet* </label>
                     <select id="sujet" class="form-control" name="sujet" value=" <?php if(isset($_POST['sujet'])){echo $_POST['sujet'];} ?>">
                         <option selected>Veuillez séléctionner un sujet</option>
                         <option  value="mes commandes" <?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="Mes commandes")){echo 'selected';}?>>Mes commandes</option>
                         <option value="question sur un produit" <?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="question sur un produit ")){echo 'selected';}?>>Question sur un produit</option>
                         <option value="reclamation" <?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="reclamation")){echo 'selected';}?>>Reclamation</option>
                         <option value="autres" <?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="autres")){echo 'selected';}?>>Autres</option>
                     </select>  
    </div>   
        <div>
        <?php
            if(isset($erreur_sujet)){
                echo"$erreur_sujet";
            }
            ?>
        </div>              
    <div> 
                     <label for="question">Votre question*:</label>
                     <input type="text" name="question" id="question" class="form-control" value ="<?php if(isset($_POST["question"])){echo $_POST["question"];} ?>"> 
    </div>
        <div>
                    <?php
                     if(isset($votre_question)){
                      echo"$erreur_votreQuestion";
                         }
                    ?>
        

        </div>
 <div class="from-check">      
                     <input class=" form-chek-input" type="checkbox" name="accepte" >
                     <label for="accept">*J'accepte le traitement informatique de ce formulaire</label>
</div>          
        <div class="text-danger">
        <?php
            if(isset($accepte)){
                echo"$accepte";
            }
            ?>

        </div>       
        
    <div>      
            <input type="submit" class="btn btn-dark btn-outline-primary" value="envoyer"> <!-- ça passe sur la page validation , si ok , il affiche la page donnees_jarditou -->
            <input type="reset" class="btn btn-dark btn-outline-primary"   value="Annuler"> <!--ça passe sur la page validation (validation _contact_jarditou ) d'ou il te demande par la suite de remplir les cases obligatoires -->        
                      
    </div>                     
                 </form>
                 
              
 <?php 
 require "piedpage.php"
?>

</body>
            </html>

