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
    if(!empty($_POST["email"])){
        $step  = 0;
    }
    if($step == 0)
    {
      $pEmail= $_POST["email"];
      $pPassword= $_POST["password"];
      $pEntreprise= $_POST["entreprise"];
      $pStatus = 1;
      if(!empty($pEntreprise)){
          $pStatus = 1;
      }
      $pPrenom= $_POST["prenom"];
      $pNom= $_POST["nom"];
      $pSexe= 0;
      $pNum= $_POST["num"];
      $pHttp= $_POST["http"];
      try{
        $bdd->exec("INSERT INTO users (email, mdp, denomination, status, prenom, nom, numtel, siteweb) VALUES ('$pEmail', '$pPassword', '$pEntreprise', '$pStatus', '$pPrenom', '$pNom', '$pNum', '$pHttp')");
      }
      catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }
    }
    ?>


    <section id ="feature" class="section-padding">

      <div class="container">
          <div class="feature-info">
            <div class="fea">
              <div class="col-sm-12 col-md-12">



                <img src="./img/register.png" width="50" height="50">
                <!-- début inscription -->
                <?php if($pSexe==0) {
                  ?>
                  <h4>Bonjour Mr. <?php echo "$pNom" ?>,</h4>
                <?php }
                else { ?>
                  <h4>Bonjour Mme. <?php echo "$pNom" ?>,</h4>
                <?php } ?>
                <?php if($pStatus==1 || $pStatus==2) { ?>
                <h5>Nous allons, ensemble, finaliser votre inscription.</h5>
                <h5>Pour que vous ayez accès complet à toutes les fonctionnalités du site, et par mesure de sécurité, nous allons effectuer une vérification de votre compte.</h5><br>
                <h5>Vous êtes actuellement enregistré en tant qu'entreprise. Si ce n'est pas le cas, merci de prendre contact avec notre support à l'adresse suivante support@localhost.</h5><br>
                <h5>Merci de bien vouloir compléter les informations suivantes :</h5>
                <form class="" action="./reg2.php" method="post">
                  <input class="form-control" placeholder="Dénomination" name="entDenomination" type="text" value=<?php echo"$pEntreprise" ?>>
                  <input class="form-control" placeholder="Numéro d'entreprise" name="entNum" type="text" />
                  <input class="form-control" placeholder="Numéro de TVA" name="entTVA" type="text" />
                  <input class="form-control" placeholder="Une adresse mail de votre entreprise (ex: admin@api-job.be) ou numéro de téléphone où nous pourrons vous joindre" name="entTVA" type="text" />
                  <br><button type="submit" value="Submit" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Valider</button>
                </form>
                <br><br><br>
                <?php }
                else{ ?>
                  <h5>Nous allons, ensemble, finaliser votre inscription.</h5>
                <?php } ?>



              </div>
            </div>


          </div>
        </div>

    </section>








    <?php  include('./includes/footer.php'); ?>
    <?php  include('./requires/jscss.php'); ?>

  </body>
</html>
