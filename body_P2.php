<?php include 'includes/header.php'; ?>

  <div class="container-fluid">

    <!--carte topo avec repères de sites, renvoi modal d'info du site d'escalade-->

    <div class="row body_P2">

      <div class="row rowsize1">

        <div class="col-md-offset-3 col-md-2 BO paddingS1">

          <!--glyphicon cliquable qui renvoi un modal d'info-->
          <button type="button" class="btn btn-info btn-lg" id="myBtn" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-map-marker glyph"></span>
          </button>

           <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title"><strong>Pignon de Pin</strong></h3>
                </div>
                <div class="modal-body">
                  <p class="info">
                    <span class="bold">Meilleures Périodes:</span><br>Mars/Avril/Juin/Septembre<br>
                    <span class="bold">Orientation: </span>S-SO<br>
                    <span class="bold">Rocher: </span>calcaire<br>
                    <span class="bold">Nb de voies: </span>16<br>
                    <span class="bold">Hauteur: </span>jusqu'à 50m<br>
                    <span class="bold">Difficulté: </span>du 5c à 7c<br>
                    <span class="bold">Localisation: </span>Ici et là
                  </p>
                  <img src="assets/img/abricotier_reeq.JPG" alt="voies" width="400px"/>
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
                  <p class="info">
                    <span class="bold">Meilleures Périodes:</span><br>Avril/Mai/Juin/Septembre<br>
                    <span class="bold">Orientation: </span>N-NO<br>
                    <span class="bold">Rocher: </span>calcaire<br>
                    <span class="bold">Nb de voies: </span>42<br>
                    <span class="bold">Hauteur: </span>jusqu'à 75m<br>
                    <span class="bold">Difficulté: </span>du 5c à 7c<br>
                    <span class="bold">Localisation: </span>Ici et là
                  </p>
                  <img src="assets/img/parfumerie2.jpg" alt="voies" width="400px"/>
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
  </div>
  <div class="container-fluid meteoO">
    <div class="row">
      <div class="col-md-12">
        <div id="cont_NzcxODZ8NXwzfDF8NHxBREM5NDJ8NnxGRkZGRkZ8Y3wx" class="meteo"><div id="spa_NzcxODZ8NXwzfDF8NHxBREM5NDJ8NnxGRkZGRkZ8Y3wx" class="meteo"><a id="a_NzcxODZ8NXwzfDF8NHxBREM5NDJ8NnxGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/fontainebleau_v77186/" target="_blank" style="color:#333;text-decoration:none;">Météo Fontainebleau</a> ©<a href="http://www.meteocity.com">meteocity.com</a></div><script type="text/javascript" src="http://widget.meteocity.com/js/NzcxODZ8NXwzfDF8NHxBREM5NDJ8NnxGRkZGRkZ8Y3wx"></script></div>
      </div>
    </div>
  </div>

  <?php includes 'include/footer.php'; ?>