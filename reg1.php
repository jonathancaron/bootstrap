<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('./requires/header.php'); ?>
  </head>
  <body>
    <?php include('./requires/dblog.php'); ?>
    <?php  include('./includes/navbar.php'); ?>
    <!--Profil utilisateur-->

    <?php
    $pEmail= $_POST["email"];
    $pPassword= $_POST["password"];
    $pEntreprise= $_POST["entreprise"];
    $pStatus = 0;
    if(!empty($pEntreprise)){
        $pStatus = 1;
    }
    $pPrenom= $_POST["prenom"];
    $pNom= $_POST["nom"];
    $pNum= $_POST["num"];
    $pHttp= $_POST["http"];
    try{
      $bdd->exec("INSERT INTO users (email, mdp, denomination, status, prenom, nom, numtel, siteweb) VALUES ('$pEmail', '$pPassword', '$pEntreprise', '$pStatus', '$pPrenom', '$pNom', '$pNum', '$pHttp')");
    }
    catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
    ?>
    <div class="container">
      <!-- début inscription -->
      <h2>Nous vous souhaitons la bienvenue. Vous êtes à présent en phase finale de votre inscription.</h2>
    </div>

    <?php  include('./includes/footer.php'); ?>
    <?php  include('./requires/jscss.php'); ?>

  </body>
</html>
