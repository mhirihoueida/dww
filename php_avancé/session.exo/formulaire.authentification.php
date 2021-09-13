
<html> <?php


session_start( );

if ($_SESSION[""]) 
{
   echo"Vous êtes autorisé à voir cette page." ;
} 
else 
{
   echo"Cette page nécessite une identification.";  
}?>
  
<h1 class= "text-center" >Authentification </h1>
<form id="form" name="form" method="POST" class="form-group" action="script_authentification.php" >

<label for="uti_ident" class="text_center">e-mail: </label>
      <br>
        <input  class="form-control" type="text" name= "uti_ident" size="25" maxlength="25" >
      <br>

<label for="uti_mdp" class="text_center">Mot de passe: </label>
      <br>
        <input  class="form-control" type="text" name= "uti_mdp" size="10" maxlength="10">
      <br>
      <br>
      <a  class="btn btn-success" href="liste.php">valider </a>
      

</html>