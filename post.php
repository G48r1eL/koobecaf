<?php 
  include('mysql.php');
  $date=time();
  $ip= $_SERVER["REMOTE_ADDR"];
//Fonction de vérification du mail 
  function VerifierAdresseMail($adresse){  
    $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';  
    if(preg_match($Syntaxe,$adresse))  
      return true;  
    else  
      return false;  
  }
//On va éviter las failles sql quand même
  $adresse=htmlentities($_POST['mail']);  
  if(VerifierAdresseMail($adresse)){
    $adresse_nouvelle = "SELECT ID FROM users WHERE mail='".$adresse."'";
    $resultat = $base->query($adresse_nouvelle);
    $nombre_adresse = $resultat->rowCount();
//on ajoute l'adresse à la BDD si elle n'existe pas déjà
    if($nombre_adresse < 1){
      $sql = "INSERT  INTO users (mail, ip) VALUES ( '$adresse', '$ip') " ;
      $requete = $base->query($sql) or die(print_r($base->errorInfo(), true)) ;
        if($requete){
          echo("Votre adresse est bien enregistr&eacute;e.") ;
        }
        else{
          echo("Une erreur est survenue") ;
        }
    }
    else{echo("Cette adresse est d&eacute;j&agrave; renseign&eacute;e");}
  } 
  else{
    echo '<p>Votre adresse e-mail n\'est pas valide.</p>';
  }
?>