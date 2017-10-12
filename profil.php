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
        <section id ="feature" class="section-padding">

          <div class="container">
              <div class="feature-info">
                <div class="fea">
                  <div class="col-sm-12 col-md-4">
                      <h3><?php echo $tr['prof1'] ?></h3>
                       <img src="./img/mentor.jpg" class="img-rounded" width="220" height="200">
                      <p><span class="profilTitre">Jonathan Caron</span><br><span class="profilSousTitre">Développeur web</span></p>
                      <img src="./img/certifie.png" class="img-rounded"  width="50" height="50">
                      <img src="./img/cvok.png" class="img-rounded"  width="35" height="35">
                  </div>
                </div>




                  <div class="row no-gutter">
                        <br><br>

                    		<div class="col-xs-12 col-sm-9  col-md-9 col-lg-8 policy_left_column ">

                          <div class="row no-gutter">
                            <!--IF USER CONNECT AND USER ID = USER ID COOKIES -->
                            <span class="jqueryToggle"><h5 class="policy_title"><strong><?php echo $tr['prof2'] ?> <img id="imgCat" src="./img/flechetoggle.png" width="15" height="15"></strong></h5>
                            <table class="table contBorder">
                              <thead>
                                <tr>
                                  <th><?php echo $tr['prof3'] ?></th>
                                  <th><?php echo $tr['prof4'] ?></th>
                                  <th><?php echo $tr['prof5'] ?></th>
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
                          </div><!--end row-->
                            <div class="row no-gutter">
                                <span class="jqueryToggle2"><h5 class="col-lg-12 col-md-12 policy_title" id="top"><?php echo $tr['prof6'] ?><img id="imgCat2" src="./img/flechetoggle.png" width="15" height="15"></h5><br><br>

                                      <div class="contBorder2">

                                        <p><?php echo $tr['prof7'] ?></p>
                                      <!--end row-->

                                      <div class="row no-gutter">
                                		   <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 hero-box half">
                                			<p><?php echo $tr['prof8'] ?><br>
                                			<strong>0473/53.38.01</strong></p>
                                		</div>

                                       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 hero-box half">
                                			<p><?php echo $tr['prof9'] ?><br>
                                			<strong><a class="small-link" href="mailto:jonathan.caron04@gmail.com">jonathan.caron04@gmail.com</a></strong></p>
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
