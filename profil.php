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
                  <div class="col-md-4">
                      <h2>Profil - Utilisateur</h2>
                       <img src="./img/mentor.jpg" class="img-rounded" width="220" height="200">
                      <p><span class="profilTitre">Jonathan Caron</span><br><span class="profilSousTitre">Développeur web</span></p>
                      <img src="./img/certifie.png" class="img-rounded"  width="50" height="50">
                      <img src="./img/cvok.png" class="img-rounded"  width="35" height="35">
                  </div>
                </div>
                <div class="fea">
                  <div class="col-md-8">
                    <h3 class="catBold">Mes messages <span class="jqueryToggle"><img id="imgCat" src="./img/flechetoggle.png" width="15" height="15"></h3></span>
                    <div class="contBorder">
                      <div class="messageMargin">
                        <table>
                          <tr>
                            <span class="espacing1">Provenance</span>
                          </tr>
                          <tr>
                            <span class="espacing2">Titre</span>
                          </tr>
                          <tr>
                            <span class="espacing3">Message</span>
                          </tr>
                          <hr class="style1">
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
