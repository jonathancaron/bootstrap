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
        $mid = $_GET['id'];
        $query=$bdd->prepare('SELECT id, de, pour, titre, message FROM msgprive WHERE id = :id');
        $query->bindValue(':id',$mid, PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
        $mde = $data['de'];
        $mpour = $data['pour'];
        $mtitre = $data['titre'];
        $mmessage = $data['message'];
        $query->CloseCursor();

        error_reporting(E_ALL);
        ini_set('display_errors', 1);
      ?>

        <section id ="feature" class="section-padding">

          <div class="container">
              <div class="feature-info">
                <div class="fea">
                  <div class="col-sm-12 col-md-12">
                    <p>ID du message <?php echo $mid ?> </p>
                    <form>
  <input type="button" value="Retourner à la page précédente" onclick="history.back()">
  </input>
</form>
                  </div>
                </div>
            </div>

        </section>

    <!--Profil entreprise-->
    <?php  include('./includes/footer.php'); ?>
    <?php  include('./requires/jscss.php'); ?>

  </body>
</html>
