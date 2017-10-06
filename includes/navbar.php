<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Men<span>tor</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#feature">Features</a></li>
      <li><a href="#organisations">Organisations</a></li>
      <li><a href="#courses">Courses</a></li>
      <li><a href="#pricing">Pricing</a></li>
      <li><a href="#" data-target="#login" data-toggle="modal">Connexion</a></li>
      <li class="btn-trial"><a href="#" data-target="#register" data-toggle="modal">Inscription</a></li>
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
        <h4 class="modal-title text-center form-title">Connexion</h4>
      </div>
      <div class="modal-body padtrbl">

        <div class="login-box-body">
          <p class="login-box-msg">Connexion au panel utilisateur</p>
          <div class="form-group">
            <form name="connexion" id="loginForm" action="profil.php" method="post">
                         <div class="form-group has-feedback"> <!----- username -------------->
                              <input class="form-control" placeholder="Identifiant"  name="login" id="loginid" type="text" autocomplete="off" />
                    <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                              <span class="glyphicon glyphicon-user form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback"><!----- password -------------->
                              <input class="form-control" placeholder="Mot de passe" name="password" id="loginpsw" type="password" autocomplete="off" />
                    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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
  <div class="modal-dialog modal-sm">

    <!-- Modal content no 1-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center form-title">Inscription</h4>
      </div>
      <div class="modal-body padtrbl">

        <div class="login-box-body">
          <p class="login-box-msg">Une fois inscrit, vous pourrez modifier votre espace personnel et commencer à postuler pour des jobs étudiants et/ou des missions.</p>
          <div class="form-group">
            <form name="connexion" id="loginForm" action="profil.php" method="post">
                         <div class="form-group has-feedback"> <!----- username -------------->
                              <input class="form-control" placeholder="Email"  name="login" id="loginid" type="email" autocomplete="off" />
                    <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                              <span class="glyphicon glyphicon-user form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback"><!----- password -------------->
                              <input class="form-control" placeholder="Mot de passe" name="password" id="loginpsw" type="password" autocomplete="off" />
                    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                          </div>
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
