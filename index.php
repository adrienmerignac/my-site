<!DOCTYPE html>
<html>
  <head>
    <title>Formation HTML M2I</title>
    <meta charset="UTF-8" />
    <!--[if lt IE 9]>
    <script src="./node_modules/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb3/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/stylesheets/main.css"/>
  </head>
  
  
  <body>
      
      
    <nav>
      <a href="./" class="logo">
      <img src="./assets/image/php.png"/>
      </a>
      <a href="#about">About</a>
      <a href="#skill">Skill</a>
      <a href="#contact">Contact</a>
    </nav>
      
      
    <header>
      <h1>Adrien Merignac
      </h1>
      <p>Developpeur Junior
      </p>
      <div>
        <img src="assets/image/php.png" alt="" class="php language">
      </div>
      <div>    
        <img src="assets/image/java.png" alt="" class="java language"/>
      </div>
      <div>
        <img src="assets/image/android.png" alt="" class="android language"/>
      </div>
      <div>
        <img src="assets/image/js.png" alt="" class="js language"/>
      </div>
      <div>
        <img src="assets/image/html.png" alt="" class="html language"/>
      </div>
    </header>
      
      
    <section id="about">
      <h2>About</h2>
      <p>
          
      </p>
    </section>
      
      
    <section id="skill">
      <h2>Skill</h2>
      <div class="container">
        <div class="row">
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
              <span class="sr-only">80% Complete</span>
            </div>
            <span class="progress-type">HTML / HTML5</span>
            <span class="progress-completed">80%</span>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
              <span class="sr-only">80% Complete (danger)</span>
            </div>
            <span class="progress-type">CSS / CSS3</span>
            <span class="progress-completed">80%</span>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
              <span class="sr-only">50% Complete (success)</span>
            </div>
            <span class="progress-type">Java</span>
            <span class="progress-completed">50%</span>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
              <span class="sr-only">20% Complete (info)</span>
            </div>
            <span class="progress-type">Android</span>
            <span class="progress-completed">20%</span>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
              <span class="sr-only">1% Complete (warning)</span>
            </div>
            <span class="progress-type">JavaScript / jQuery</span>
            <span class="progress-completed">1%</span>
          </div>
        </div>
      </div>
    </section>
      
      
    <footer  id="contact" class="container-fluid">
      <h2>Contact</h2>
      <!-- Formulaire -->
      <div class="container col-md-8 toright">
        <form class="well form-horizontal" action=" " method="post"  id="contact_form">
          <fieldset>
            <!-- Form Name -->
            <legend>Remplissez le formulaire!</legend>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label">Prénom</label>  
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  name="first_name" placeholder="Prénom" class="form-control"  type="text">
                </div>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" >Nom</label> 
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="last_name" placeholder="Nom" class="form-control"  type="text">
                </div>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail</label>  
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                </div>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label">Phone #</label>  
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input name="phone" placeholder="+33" class="form-control" type="text">
                </div>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label">Addresse</label>  
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="address" placeholder="Addresse" class="form-control" type="text">
                </div>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label">Ville</label>  
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="city" placeholder="Ville" class="form-control"  type="text">
                </div>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label">Code Postal</label>  
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="zip" placeholder="Code Postal" class="form-control"  type="text">
                </div>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label">Website</label>  
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                  <input name="website" placeholder="Website" class="form-control" type="text">
                </div>
              </div>
            </div>
            <!-- Text area -->
            <div class="form-group">
              <label class="col-md-4 control-label">Project Description</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
                </div>
              </div>
            </div>
            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-4">
                <button type="submit" class="btn btn-blue" >Send <span class="glyphicon glyphicon-send"></span></button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      </div>
      <!-- /.container -->
      <!-- Icones -->   
      <div class="col-md-4">
        <ul class="social-list">
          <li><a href="https://www.facebook.com/" target="_blank" class="icons-sm fb-ic "><i class="fa fa-facebook"></i> Facebook</a></li>
          <li><a href="https://twitter.com/?lang=fr" target="_blank" class="icons-sm tw-ic"><i class="fa fa-twitter"></i> Twitter</a></li>
          <li><a href="https://fr.linkedin.com/" target="_blank" class="icons-sm li-ic"><i class="fa fa-linkedin"> </i> LinkedIn</a></li>
          <li><a href="https://www.instagram.com/?hl=fr" target="_blank" class="icons-sm ins-ic"><i class="fa fa-instagram"> </i> Instagram</a></li>
          <li><a href="https://www.youtube.com/?gl=FR&hl=frx" target="_blank" class="icons-sm yt-ic"><i class="fa fa-youtube"> </i> Youtube</a></li>
          <li><a href="https://github.com/" target="_blank" class="icons-sm git-ic"><i class="fa fa-github"> </i> Github</a></li>
          <li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="icons-sm email-ic"><i class="fa fa-envelope-o"> </i> Email</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>
