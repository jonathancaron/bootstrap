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

                
                <div class="container col-md-8">
                  <h3 class="catBold">Mes messages <span class="jqueryToggle"><img id="imgCat" src="./img/flechetoggle.png" width="15" height="15"></h3></span>
                  <table class="table table-bordered contBorder">
                    <thead>
                      <tr>
                        <th>De</th>
                        <th>Titre</th>
                        <th>Message</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <?php
                          $str="Proximus Recrutement";
                          if (strlen($str) > 20)
                          $str = substr($str, 0, 17) . '...';
                          echo $str; ?>
                        </td>
                        <td>
                          <?php
                          $str="Employé gestion bureautique à temps plein";
                          if (strlen($str) > 20)
                          $str = substr($str, 0, 17) . '...';
                          echo $str; ?>
                        </td>
                        <td>
                          <?php
                          $str="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt.";
                          if (strlen($str) > 40)
                          $str = substr($str, 0, 37) . '...';
                          echo $str; ?>
                        </td>
                      </tr>
                      <tr>
                        <td>BeCode</td>
                        <td>Recrutement formateur</td>
                        <td>Bonjour Jonathan, Nous vous contact...</td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <h3 class="catBold">Mon compte <span class="jqueryToggle2"><img id="imgCat" src="./img/flechetoggle.png" width="15" height="15"></h3></span>
                  <table class="table table-bordered contBorder">
                    <thead>
                      <tr>
                        <th>De</th>
                        <th>Titre</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                      </tr>

                    </tbody>
                  </table>


                </div>
            </div>
            </div>

        </section>

    <!--Profil entreprise-->
    <?php  include('./includes/footer.php'); ?>
    <?php  include('./requires/jscss.php'); ?>

  </body>
</html>
