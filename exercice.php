<?php
// déclaration

$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$telephone=$_GET["telephone"];
$adresse=$_GET["adresse"];
$email=$_GET["email"];
$envoyer=$_GET["envoyer"];
$erreur="";



if(isset($envoyer))
  {
    // Le nom est-il rempli ?
    if(empty($nom)) $erreur= "<li>Veuillez indiquer votre nom svp !</li>";
    if(empty($prenom)) $erreur.= "<li>Veuillez indiquer votre prenom svp !</li>";
    if(empty($telephone)) $erreur.= "<li>Veuillez indiquer votre telephone svp !</li>";
    if(empty($adresse)) $erreur.= "<li>Veuillez indiquer votre adresse svp !</li>";
    if(empty($email)) $erreur.= "<li>Veuillez indiquer votre email svp !</li>";


  }
       
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <section>
  <form name="fo" method="GET" action="">
     <fieldset>
        <legend>inscription</legend>
        
        <div class="label">Nom</div>
        <div class="champ">
           <input type="text" name="nom" value="" />
        </div>
        <div class="label">Prénom</div>
        <div class="champ">
           <input type="text" name="prenom" value="" />
        </div>
        <div class="label">Email</div>
        <div class="champ">
           <input type="text" name="email" value="" />
        </div>
        <div class="label">Adresse</div>
        <div class="champ">
           <input type="Adresse" name="Adresse" value="" />
        </div>
        <div class="label">telephone</div>
        <div class="champ">
           <input type="telephone" name="telephone" value="" />
        </div>
        <div class="champ">
           <input type="submit" name="envoyer" value="envoyer" />
        </div>
     </fieldset>
</form>
<?php if(!empty($erreur)){ ?>


<div id="erreur"><?php echo $erreur ?></div>
<?php }  ?>
</section>
    <style>
    body{
            padding:10px;
         }
         fieldset{
            border:solid 1px #EE6600;
            border-radius:10px;
            padding:20px;
         }
         legend{
            font:bold 16pt arial;
            color:#EE6600;
         }
         
         input[type="submit"]{
            border:none;
            background-color:#EE6600;
            color:#FFFFFF;
            width:200px;
            cursor:pointer;
         }
         .label{
            margin-bottom:4px;
            font:10pt arial;
            color:#AAAAAA;
         }
         .champ{
            margin-bottom:20px;
         }
         #erreur{
            font:10pt arial;
            color:#DD0000;
            background-color:#EEEEEE;
            padding:10px;
            border-radius:10px;
            margin-bottom:10px;
         }
        
      </style>
    
    </style>



</body>
</html>