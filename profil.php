<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('./requires/header.php'); ?>

  </head>
  <body>
    <?php include('./requires/dblog.php'); ?>
    <?php  include('./includes/navbar.php'); ?>
    <!--Profil utilisateur-->

        <section id ="feature" class="section-padding">

          <div class="container">
              <div class="feature-info">
                <div class="fea">
                  <div class="col-sm-12 col-md-4">
                      <h2>Profil - Utilisateur</h2>
                       <img src="./img/mentor.jpg" class="img-rounded" width="220" height="200">
                      <p><span class="profilTitre">Jonathan Caron</span><br><span class="profilSousTitre">Développeur web</span></p>
                      <img src="./img/certifie.png" class="img-rounded"  width="50" height="50">
                      <img src="./img/cvok.png" class="img-rounded"  width="35" height="35">
                  </div>
                </div>
                <div class="fea">
                  <div class="col-sm-12 col-md-8">
                    <h3 class="catBold">Mes messages <span class="jqueryToggle"><img id="imgCat" src="./img/flechetoggle.png" width="15" height="15"></h3></span>
                    <div class="contBorder" style="background-color:#ffeae2;">
                      <div class="messageMargin">


                        <div class="col-md-12">
                          <span class="espacing1">Provenance</span>

                          <span class="espacing1">Titre</span>

                          <span class="espacing1">Message</span>
                        </div>

                        <div class="col-md-12">
                          <hr class="style1">
                        </div>
                        <table>
                            <?php
                            $str="Proximus Recrutement";
                            if (strlen($str) > 15)
                              $str = substr($str, 0, 12) . '...';
                              ?>
                              <span class="espacing4"><?php echo $str; ?></span>

                            <?php
                            $str="Employé gestion bureautique à temps plein";
                            if (strlen($str) > 23)
                              $str = substr($str, 0, 20) . '...';
                              ?>
                              <span class="espacing5"><?php echo $str; ?></span>

                          <?php
                          $str="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt.";
                          if (strlen($str) > 43)
                            $str = substr($str, 0, 40) . '...';
                            ?>
                            <span class="espacing6"><?php echo $str; ?></span>

                        </table>
                      </div>

                    </div>

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
