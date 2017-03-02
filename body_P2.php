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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--lien css-->
  <LINK rel="stylesheet" type="text/css" href="header.css">
  <LINK rel="stylesheet" type="text/css" href="acceuil_test.css">
  <LINK rel="stylesheet" type="text/css" href="section_actu.css">
  <LINK rel="stylesheet" type="text/css" href="section.css">
  <LINK rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="body_P2.css">

</head>

<body>

  <div class="container-fluid">

    <!--carte topo avec repères de sites, renvoi modal d'info du site d'escalade-->

    <div class="row body_P2">

      <div class="row rowsize1">

        <div class="col-xs-offset-4 col-xs-1 col-sm-offset-X col-sm-X col-md-offset-6 col-md-1 col-lg-offset-X col-md-X BO1 paddingS1">

          <!--glyphicon cliquable qui renvoi un modal d'info-->
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-info btn-xs borderrad" id="myBtn"><span class="glyphicon glyphicon-map-marker glyph"></span></button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
    
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title"><strong>Pignon de Pin</strong></h3>
                </div>
                  <div class="modal-body">
                    <p class="info"><span class="bold">Meilleures Périodes:</span><br>Mars/Avril/Juin/Septembre<br><span class="bold">Orientation: </span>S-SO<br><span class="bold">Rocher: </span>calcaire<br><span class="bold">Nb de voies: </span>16<br><span class="bold">Hauteur: </span>jusqu'à 50m<br><span class="bold">Difficulté: </span>du 5c à 7c<br><span class="bold">Localisation: </span>Ici et là</p>
                    <img src="abricotier_reeq.JPG" alt="voies" width="290px"/>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
      
              </div>
            </div>
          </div>


          <div class="col-xs-2 col-sm-offset-X col-sm-X col-md-offset-6 col-md-1 col-lg-offset-X col-md-X BO paddingS2">

          <!--glyphicon cliquable qui renvoi un modal d'info-->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info btn-xs borderrad" id="myBt"><span class="glyphicon glyphicon-map-marker glyph"></span></button>

            <!-- Modal -->
            <div class="modal fade" id="myMod" role="dialog">
              <div class="modal-dialog2">
    
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title"><strong>Pignon de Vélo</strong></h3>
                  </div>
                  <div class="modal-body">
                    <p class="info"><span class="bold">Meilleures Périodes:</span><br>Avril/Mai/Juin/Septembre<br><span class="bold">Orientation: </span>N-NO<br><span class="bold">Rocher: </span>calcaire<br><span class="bold">Nb de voies: </span>42<br><span class="bold">Hauteur: </span>jusqu'à 75m<br><span class="bold">Difficulté: </span>du 5c à 7c<br><span class="bold">Localisation: </span>Ici et là</p>
                    <img src="parfumerie2.jpg" alt="voies" width="290px"/>
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
  </div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script> 

<script>
$(document).ready(function(){
    $("#myBt").click(function(){
        $("#myMod").modal();
    });
});
</script>
  </body>
<html>