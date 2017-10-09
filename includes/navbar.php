<link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/inc/next.css">
<?php session_start(); ?>

<?php
$lang = $fr_class = $en_class = '';
/* Récupération de la langue dans la chaîne get */
$lang = (isset($_GET['lang']) && file_exists('./json/'.$_GET['lang'].'.json')) ? $_GET['lang'] : 'fr';
/* Définition de la class pour les liens de langue */
if ($lang == 'fr')
    $fr_class = ' class="active"';
else
    $en_class = ' class="active"';
/* Récupération du contenu du fichier .json */
$contenu_fichier_json = file_get_contents('./json/'.$lang.'.json');
/* Les données sont récupérées sous forme de tableau (true) */
$tr = json_decode($contenu_fichier_json, true);
?>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php"><?php echo $tr['titre_1'] ?><span><?php echo $tr['titre_2'] ?></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#feature"><?php echo $tr['categorie_1'] ?></a></li>
      <li><a href="#organisations"><?php echo $tr['categorie_2'] ?></a></li>
      <li><a href="#courses"><?php echo $tr['categorie_3'] ?></a></li>
      <li><a href="#pricing"><?php echo $tr['categorie_4'] ?></a></li>
      <li><a href="#" data-target="#login" data-toggle="modal"><?php echo $tr['categorie_log'] ?></a></li>
      <li class="btn-trial"><a href="#" data-target="#register" data-toggle="modal"><?php echo $tr['categorie_reg'] ?></a></li>
      <li><nav><a<?php echo $en_class ?> href="?lang=en">en</a> <a<?php echo $fr_class ?> href="?lang=fr">fr</a></nav></li>
    </ul>
    </div>
  </div>
</nav>
<!--/ Navigation bar-->
<!--Modal box LOGIN-->
<div class="modal fade" id="login" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content no 1-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center form-title"><?php echo $tr['categorie_log'] ?></h4>
      </div>
      <div class="modal-body padtrbl">

        <div class="login-box-body">
          <p class="login-box-msg"><?php echo $tr['log1'] ?></p>
          <div class="form-group">
            <form name="connexion" id="loginForm" action="log1.php" method="post">
                         <div class="form-group has-feedback"> <!----- username -------------->
                              <input class="form-control" placeholder="Email"  name="pseudo" id="loginid" type="text" autocomplete="off" />
                    <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                              <span class="fa fa-user-circle-o margincircle  form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback"><!----- password -------------->
                              <input class="form-control" placeholder="Mot de passe" name="password" id="loginpsw" type="password" autocomplete="off" />
                    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                              <span class="fa fa-key margincircle form-control-feedback"></span>
                          </div>
                          <div class="row">
                              <div class="col-xs-12">
                                  <div class="checkbox icheck">
                                      <label>
                                        <input type="checkbox" name="checkbox" id="loginrem" > Retenir mes identifiants
                                      </label>
                                  </div>
                              </div>
                              <div class="col-xs-12">
                                  <button type="submit" value="Submit" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Valider</button>
                              </div>
                          </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!--/ Modal box-->




<!--Modal box REGISTER-->
<div class="modal fade" id="register" role="dialog">
  <div class="modal-dialog modal-lg" style="margin-top:10px">

        <!-- Modal content no 1-->
        <div class="modal-content col-xs-8 col-sm-12">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title"><?php echo $tr['categorie_reg'] ?></h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg"><?php echo $tr['reg1'] ?></p>
              <div class="form-group">
                <form name="connexion" id="loginForm" action="./reg1.php" method="post">



                             <div class="form-group has-feedback"> <!--- username -------------->
                                  <input class="form-control" placeholder="Email"  name="email" id="loginid" type="email" autocomplete="off" required maxlength="31" />
                        <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                                  <span class="fa fa-user-circle-o margincircle form-control-feedback"></span>
                              </div>



                              <div class="form-group has-feedback"><!--- password -------------->
                                  <input class="form-control" placeholder="Mot de passe" name="password" id="loginpsw" type="password" autocomplete="off" required maxlength="29" />
                        <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                                  <span class="fa fa-key margincircle form-control-feedback"></span>
                              </div>

                              <div class="form-group has-feedback"><!--- repeat password -------------->
                                  <input class="form-control" placeholder="Répéter le mot de passe" name="repassword" id="loginpsw" type="password" autocomplete="off" maxlength="29" />
                        <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                                  <span class="fa fa-key margincircle form-control-feedback"></span>
                              </div>

    <hr class="bottom-line">
    <div class="form-group has-feedback"><!--- entreprise -------------->
        <input class="form-control" placeholder="Dénomination entreprise (facultatif)" name="entreprise" id="loginpsw" type="text" autocomplete="off" maxlength="39" />
    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
        <span class="form-control-feedback"></span>
    </div>

    <div class="form-group has-feedback"><!--- prénom -------------->
        <input class="form-control" placeholder="Votre prénom" name="prenom" id="loginpsw" type="text" autocomplete="off" required maxlength="19" />
    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
        <span class="form-control-feedback"></span>
    </div>

    <div class="form-group has-feedback"><!--- nom -------------->
        <input class="form-control" placeholder="Votre nom" name="nom" id="loginpsw" type="text" autocomplete="off" required maxlength="19" />
    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
        <span class="form-control-feedback"></span>
    </div>

    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
        <span class="form-control-feedback"></span>
    </div>

    <div class="form-group has-feedback"><!--- sexe -------------->
      <select name="sexeid">
    <option selected="selected" value="2">Sélectionnez votre sexe</option>
    <option value="0">Homme</option>
    <option value="1">Femme</option>
    </select>

    <hr class="bottom-line">

                              <div class="form-group has-feedback"><!--- Numéro de téléphone -------------->
                                  <input class="form-control" placeholder="Numéro de téléphone" name="num" id="loginpsw" type="text" autocomplete="off" required maxlength="25" />
                        <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                                  <span class="form-control-feedback"></span>
                              </div>



                            <div class="input-group"><!--- site internet -------------->
                              <span class="input-group-addon" id="basic-addon1">http</span>
                              <input name="http" type="text" class="form-control" placeholder="Votre site web (facultatif)" maxlength="39" aria-describedby="basic-addon1">
                            </div>
                            <br>
                              <div class="row">

                                  <div class="col-xs-12">
                                      <button type="submit" value="Submit" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Valider</button>
                                  </div>
                              </div>
                </form>
              </div>
            </div>
          </div>



        </div>

  </div>
</div>
<!--/ Modal box-->
<script src="js/inc/next.js"></script>
