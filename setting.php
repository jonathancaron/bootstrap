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
    if($_SESSION['id'] ==0)
      { echo "<script type='text/javascript'> document.location = 'index.php'; </script>"; }
    ?>

      <?php
        $userid = $_SESSION['id'];
        $query=$bdd->prepare('SELECT id, email, mdp, prenom, nom, titre, status, denomination, sexe, numtel, siteweb, avatar FROM users WHERE id = :id');
        $query->bindValue(':id',$userid, PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
        $usermail = $data['email'];
        $userprenom = $data['prenom'];
        $usernom = $data['nom'];
        $usertitre = $data['titre'];
        $userstatus = $data['status'];
        $userdenomination = $data['denomination'];
        $usersexe = $data['sexe'];
        $usernumtel = $data['numtel'];
        $usersiteweb = $data['siteweb'];
        $useravatar = $data['avatar'];
        $query->CloseCursor();

        error_reporting(E_ALL);
        ini_set('display_errors', 1);
      ?>

        <section id ="feature" class="section-padding">

          <div class="container">
              <div class="feature-info">
                <div class="fea">
                  <div class="col-sm-2 col-md-2">

                    <?php
                    if(empty($useravatar))
                    {}
                    else
                      { echo "<img src='./img/avatars/$userid/$useravatar' class='img-rounded' width='220' height='220'>"; }

                    ?>
                    <p>testtest</p>



                  </div>
                </div>
            </div>

            <div class="feature-info">
              <div class="fea">
                <div class="col-sm-10 col-md-10">


<p>autretest</p>


                </div>
              </div>
          </div>

        </section>

    <!--Profil entreprise-->
    <?php  include('./includes/footer.php'); ?>
    <?php  include('./requires/jscss.php'); ?>

  </body>
</html>
