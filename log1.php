
<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>


    <?php

     include('./requires/dblog.php');


       $message='';


        if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
        {
            $message = '<p>une erreur s\'est produite pendant votre identification.
    	Vous devez remplir tous les champs</p>
    	<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
        }
        else //On check le mot de passe
        {

            $query=$bdd->prepare('SELECT id, email, mdp FROM users WHERE email = :pseudo');
            $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
            $query->execute();
            $data=$query->fetch();

          	if ($data['mdp'] == $_POST['password']) // Acces OK !
          	{
          	    $_SESSION['pseudo'] = $data['email'];
          	    $_SESSION['id'] = $data['id'];
          	    $message = '<p>Bienvenue '.$data['email'].',
          			vous êtes maintenant connecté!</p>
          			<p>Cliquez <a href="./index.php">ici</a>
          			pour revenir à la page d accueil</p>';

          	}
          	else // Acces pas OK !
          	{
          	    $message = '<p>Une erreur s\'est produite
          	    pendant votre identification.<br /> Le mot de passe ou le pseudo
                      entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a>
          	    pour revenir à la page précédente
          	    <br /><br />Cliquez <a href="./index.php">ici</a>
          	    pour revenir à la page d accueil</p>';

          	}
        $query->CloseCursor();
        }
        echo $message;

    ?>



  </body>
</html>
