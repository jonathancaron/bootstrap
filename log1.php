
<!DOCTYPE html>
<html>
<head>
  <?php include('./requires/header.php'); ?>

</head>
<body>
  <?php include('./requires/dblog.php'); ?>
  <?php  include('./includes/navbar.php'); ?>


    <?php

     include('./requires/dblog.php');


       $message='';


        if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
        {
            $message = '<p>une erreur s\'est produite pendant votre identification.
    	Vous devez remplir tous les champs</p>
    	<p>Veuillez s\'il vous plait réessayer.</p>';
        }
        else //On check le mot de passe
        {

            $query=$bdd->prepare('SELECT id, email, mdp, prenom, nom, status, denomination, sexe, numtel, siteweb FROM users WHERE email = :pseudo');
            $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
            $query->execute();
            $data=$query->fetch();

          	if ($data['mdp'] == $_POST['password']) // Acces OK !
          	{
                session_start();
          	    $_SESSION['pseudo'] = $data['email'];
          	    $_SESSION['id'] = $data['id'];
                $_SESSION['prenom'] = $data['prenom'];
                $_SESSION['nom'] = $data['nom'];
                $_SESSION['status'] = $data['status'];
                $_SESSION['denomination'] = $data['denomination'];
                $_SESSION['sexe'] = $data['sexe'];
                $_SESSION['numtel'] = $data['numtel'];
                $_SESSION['siteweb'] = $data['siteweb'];
          	    $message = '';
                echo "<script type='text/javascript'> document.location = 'index.php'; </script>";


          	}
          	else // Acces pas OK !
          	{
          	    $message = '<p>Une erreur s\'est produite
          	    pendant votre identification.<br />Veuillez s\'il vous plait réessayer.</p>';

          	}
        $query->CloseCursor();
        }

    ?>



    <section id ="feature" class="section-padding">

      <div class="container">
          <div class="feature-info">
            <div class="fea">
              <div class="col-sm-12 col-md-12 text-center">
                <br>
                <img src="./img/error.png" alt="erreur" width="100px" height="100px"><br>
                <br>
                <?php echo $message; ?>

              </div>
            </div>
        </div>
        </div>

    </section>












    <!--Profil entreprise-->
    <?php  include('./includes/footer.php'); ?>
    <?php  include('./requires/jscss.php'); ?>
  </body>
</html>
