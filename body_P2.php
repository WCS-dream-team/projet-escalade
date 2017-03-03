<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!--lien bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
  
  <!--lien css-->
  <LINK rel="stylesheet" type="text/css" href="header.css">
  <LINK rel="stylesheet" type="text/css" href="acceuil.css">
  <LINK rel="stylesheet" type="text/css" href="section_actu.css">
  <LINK rel="stylesheet" type="text/css" href="section.css">
  <LINK rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="body_P2.css">

</head>

<body>

<div class="row1">

      <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12">
        <div class="header">

          <h1 class="titre"><strong>ESCALADE<br>FONTAINEBLEAU</strong></h1>
        </div>
      </div>

    </div>

  <div class="container-fluid">

    <!--carte topo avec repères de sites, renvoi modal d'info du site d'escalade-->

    <div class="row body_P2">

      <div class="row rowsize1">

        <div class="col-md-offset-3 col-md-2 BO paddingS1">

          <!--glyphicon cliquable qui renvoi un modal d'info-->
          <button type="button" class="btn btn-info btn-lg" id="myBtn" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-map-marker glyph"></span></button>

           <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title"><strong>Pignon de Pin</strong></h3>
                </div>
                <div class="modal-body">
                <p class="info"><span class="bold">Meilleures Périodes:</span><br>Mars/Avril/Juin/Septembre<br><span class="bold">Orientation: </span>S-SO<br><span class="bold">Rocher: </span>calcaire<br><span class="bold">Nb de voies: </span>16<br><span class="bold">Hauteur: </span>jusqu'à 50m<br><span class="bold">Difficulté: </span>du 5c à 7c<br><span class="bold">Localisation: </span>Ici et là</p>
                <img src="abricotier_reeq.JPG" alt="voies" width="400px"/>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>          
        </div>


        <div class="col-md-2 BO paddingS2">

          <!--glyphicon cliquable qui renvoi un modal d'info-->
          <button type="button" class="btn btn-info btn-lg" id="myBtn" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-map-marker glyph"></span></button>

           <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title"><strong>Pignon de Vélo</strong></h3>
                </div>
                <div class="modal-body">
                <p class="info"><span class="bold">Meilleures Périodes:</span><br>Avril/Mai/Juin/Septembre<br><span class="bold">Orientation: </span>N-NO<br><span class="bold">Rocher: </span>calcaire<br><span class="bold">Nb de voies: </span>42<br><span class="bold">Hauteur: </span>jusqu'à 75m<br><span class="bold">Difficulté: </span>du 5c à 7c<br><span class="bold">Localisation: </span>Ici et là</p>
                <img src="parfumerie2.jpg" alt="voies" width="400px"/>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>            
        </div>     
      </div>
    </div>
    <div class="container-fluid meteoO">
      <div class="row">
        <div class="col-md-12">
          <div id="cont_NzcxODZ8NXwzfDF8NHxBREM5NDJ8NnxGRkZGRkZ8Y3wx" class="meteo"><div id="spa_NzcxODZ8NXwzfDF8NHxBREM5NDJ8NnxGRkZGRkZ8Y3wx" class="meteo"><a id="a_NzcxODZ8NXwzfDF8NHxBREM5NDJ8NnxGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/fontainebleau_v77186/" target="_blank" style="color:#333;text-decoration:none;">Météo Fontainebleau</a> ©<a href="http://www.meteocity.com">meteocity.com</a></div><script type="text/javascript" src="http://widget.meteocity.com/js/NzcxODZ8NXwzfDF8NHxBREM5NDJ8NnxGRkZGRkZ8Y3wx"></script></div>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid footercont">
  <div class="row rowfooter">
    <div class="col-xs-12 col-md-12 col-lg-12">

      <footer class="navbar-default">
        <div class="container">
        
            <div class=”row bottom-rule”>
            <!-- 1st col of the row -->
              <div class="col-sm-4 footer-section">
                <strong>Tell us more about you and ask a question</strong>
                <p>first, write your address</p>
                  <form class="form-inline">
                  <div class="form-group">
                      <label 
                          class="sr-only" 
                          for="inputEmail"
                        >Email</label>
                        <input
                          type="email"
                          class="form-control"
                          id="inputEmail"
                          placeholder="address@example.com">
                  </div>
                  <button type="submit" class="btn btn-default">Send</button>
                  </form>
            </div>
       
      <!--links 2nd col-->

                <div class="col-sm-4 footer-section">
                          <ul class="social-network social-circle">
                              <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                              <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                          </ul>       
              </div>
            
      <!--links 3rd col-->
            <div class="col-sm-4 footer-section">
                <address>
                    <strong>Association des grimpeurs de bleau</strong><br>
                    222 rue de fontainebleau à Fontainebleau<br>
                     <a href="#">Contact Us</a>
                </address>
            </div>
      <!-- new row nav bar-->
            <div class="row bottom-rule">
                <div class="col-sm-12">
                    <nav class="navbar navbar-default navbar-footer">
                        <ul class="nav navbar-nav">
                            <li><a href="acceuil.php">Acceuil</a></li>
                            <li><a href="SNE.php">Site numéro 1</a></li>
                            <li><a href="#">site numéro 2</a></li>
                            <li><a href="SAE.php">SAE</a></li>
                            <li><a href="#">Evenements</a></li>
                            <li><a href="formulaire.php">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
      <!-- Copyright -->
                <div class="row leg-room">
                  <div class="col-md-12 text-center">
                      <h1 class="text-uppercase">CLIMBING HEAVEN TERRITORY</h1>
                        <p class="monospaced">
                        &copy;2017 WCS Dream Team Company Inc. 
                        <span class="text-uppercase">All Rights Reserved</span></p>
                  </div>
              </div>
            </div><!-- end row -->
         …
            </div>
        </div><!-- end container -->
      </footer>
    </div>
  </div>
</div>
  </body>
<html>