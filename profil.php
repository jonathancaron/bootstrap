<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('./requires/header.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/inc/profil1.css">
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
        $userid = $_GET['id'];
        $query=$bdd->prepare('SELECT id, email, mdp, prenom, nom, titre, status, denomination, sexe, numtel, siteweb FROM users WHERE id = :id');
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
        $query->CloseCursor();

        error_reporting(E_ALL);
        ini_set('display_errors', 1);
      ?>

        <section id ="feature" class="section-padding">

          <div class="container">
              <div class="feature-info">
                <div class="fea">
                  <div class="col-sm-12 col-md-4">
                      <h3><?php echo $tr['prof1'] ?></h3>
                       <img src="./img/mentor.jpg" class="img-rounded" width="220" height="200">
                      <p><span class="profilTitre"><?php echo "$userprenom $usernom" ?></span><br><span class="profilSousTitre"><?php echo $usertitre ?></span></p>
                      <img src="./img/certifie.png" class="img-rounded"  width="50" height="50">
                      <img src="./img/cvok.png" class="img-rounded"  width="35" height="35">
                  </div>
                </div>


                  <div class="row no-gutter">
                        <br><br>

                    		<div class="col-xs-12 col-sm-9  col-md-9 col-lg-8 policy_left_column ">
                          <?php if($userid==$_SESSION['id'])
                          { ?>
                              <div class="row no-gutter">
                                <!--IF USER CONNECT AND USER ID = USER ID COOKIES -->
                                <span class="jqueryToggle"><h5 class="policy_title"><strong><?php echo $tr['prof2'] ?> <img id="imgCat" src="./img/flechetoggle.png" width="15" height="15"></strong></h5>
                                </span>
                                <table class="table contBorder">
                                  <thead>
                                    <tr>
                                      <th><?php echo $tr['prof3'] ?></th>
                                      <th><?php echo $tr['prof4'] ?></th>
                                      <th><?php echo $tr['prof5'] ?></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php


                                    $sth=$bdd->prepare('SELECT id, de, pour, titre, message FROM msgprive');
                                    $sth->execute();


                                    $sth->rowCount();

                                         while($row = $sth->fetch(PDO::FETCH_ASSOC)){
                                           if($row['pour'] == $_SESSION['id']){ ?>
                                             <tr>
                                               <td>
                                                 <?php $str=$row['de'];
                                                 if (strlen($str) > 20)
                                                 $str = substr($str, 0, 17) . '...';
                                                 echo $str;
                                                 ?>

                                               </td>
                                                 <td>
                                                   <?php $str=$row['titre'];
                                                   if (strlen($str) > 20)
                                                   $str = substr($str, 0, 17) . '...';
                                                   echo $str;
                                                 ?>
                                                </td>
                                               <td>
                                                 <?php
                                                 $str=$row['message'];
                                                 if (strlen($str) > 40)
                                                 $str = substr($str, 0, 37) . '...';
                                                 echo $str;
                                                 ?>
                                               </td>
                                             </tr>
                                           <?php
                                            }
                                          }

                                        ?>

                                  </tbody>
                                </table>
                              </div><!--end row-->
                          <?php } ?>
                            <div class="row no-gutter">
                                <span class="jqueryToggle2"><h5 class="col-lg-12 col-md-12 policy_title" id="top"><?php echo $tr['prof6'] ?><img id="imgCat2" src="./img/flechetoggle.png" width="15" height="15"></h5><br><br>
                                </span>
                                      <div class="contBorder2">

                                        <p><?php echo $tr['prof7'] ?></p>
                                      <!--end row-->

                                      <div class="row no-gutter">
                                		   <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 hero-box half">
                                			<p><?php echo $tr['prof8'] ?><br>
                                			<strong><?php echo $usernumtel ?></strong></p>
                                		</div>

                                       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 hero-box half">
                                			<p><?php echo $tr['prof9'] ?><br>
                                			<strong><a class="small-link" href="<?php echo "$usermail" ?>"><?php echo $usermail ?></a></strong></p>
                                		</div>
                                  </div><!-- end row-->

                                  <div class="row no-gutter">
                                      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 info-box">
                                    <p><strong><?php echo $tr['prof10'] ?></strong><br>
                                    Lundi - Mardi:<br>
                                      <strong>18:00 a.m. à 22:00 p.m.</strong><br>
                                    Mercredi - Vendredi:<br>
                                      <strong>12:00 a.m. à 22:00 p.m.</strong></p></div><!--end div-->

                                     <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 info-box">
                                    <p><strong><?php echo $tr['prof11'] ?></strong><br>
                                    Samedi:<br>
                                      <strong>10:00 a.m. à 22:00 p.m.</strong><br>
                                    Dimanche:<br>
                                      <strong>12:00 a.m. à 20:00 p.m.</strong></p></div><!--end div-->
                                      </div><!--end row-->
                                      <div style="clear: both;"></div>
                                      </div>
                            <!--<div class="row no-gutter">
                         <h5 class="policy_title"><strong>Here's why you should give us a call.</strong></h5>

                          <ul>
                            <li class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                              <img src="http://images.patioproductsusa.com/site/common/patio/vp/contact-vp-icon-price-matching.png"><br>Price<br>Matching</li>

                            <li class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                              <img src="http://images.patioproductsusa.com/site/common/patio/vp/contact-vp-icon-estimates-consultations.png"><br>Free Estimates and<br>Consultations</li>

                            <li class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                              <img src="http://images.patioproductsusa.com/site/common/patio/vp/contact-vp-icon-trade-pricing.png"><br>Trade<br>Pricing</li>

                            <li class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                              <img src="http://images.patioproductsusa.com/site/common/patio/vp/contact-vp-icon-no-hassle-returns.png"><br>No Hassle<br>Returns</li>

                            <li class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                              <img src="http://images.patioproductsusa.com/site/common/patio/vp/contact-vp-icon-low-price-guarantee.png"><br>Low Price<br>Guarantees</li>

                            <li class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                              <img src="http://images.patioproductsusa.com/site/common/patio/vp/contact-vp-icon-lifetime-warranty.png"><br>Lifetime<br>Warranty</li>

                            <li class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                              <img src="http://images.patioproductsusa.com/site/common/patio/vp/contact-vp-icon-free-shipping.png"><br>Free Shipping on<br>Orders over $49</li>

                            <li class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                              <img src="http://images.patioproductsusa.com/site/common/patio/vp/contact-vp-icon-brands.png"><br>Name Brands<br><br></li>
                          </ul>
                        </div>-->
                        <!--end row-->

                        <!--<div class="row no-gutter">
                          <p class="headline-spacing"><strong>Habite à</strong><br>
                    		Rhode-Saint-Genèse<br>
                    		Belgique<br>
                            <span class="alert">Belgique</span></p>
                          </div>

                          <div style="clear: both;"></div>

                    		</div>--><!--end row left-side-->
                    </div><!--CLOSE wrapper-->




                </div>
            </div>
            </div>

        </section>

    <!--Profil entreprise-->
    <?php  include('./includes/footer.php'); ?>
    <?php  include('./requires/jscss.php'); ?>

  </body>
</html>
