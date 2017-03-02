<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Document</title>
  <!--lien bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!--lien css-->
  <LINK rel="stylesheet" type="text/css" href="header.css">
  <LINK rel="stylesheet" type="text/css" href="footer.css">
   <LINK rel="stylesheet" type="text/css" href="SAE.css">


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#myModal").on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);  // Button that triggered the modal
        var titleData = button.data('title'); // Extract value from data-* attributes
        $(this).find('.modal-title').text(titleData + ' Form');
    });
});
</script>

</head>


<body>
  <!-- HEADER-->
<?php include("header.php"); ?>
  <!-- INFORMATIONS-->

<div class="bs-example">
	<div class="container">
   		<!-- Button HTML (to Trigger Modal) -->
    	<div class="row row_dis">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_droite1" data-title="Feedback"><h1>
	HORAIRES</h1></button>
    	</div>
    <div class="row row_dis">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_droite2" data-title="Report Error"><h1>Acces a la salle</h1></button>
    </div>
	<div class="row row_dis">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_droite3" data-title="Contact Us"><h1>CONTACT</h1></button>
    </div>
    <div class="row row_dis">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_droite4" data-title="Contact Us"><h1>TARIFS</h1></button>
    </div>
    
    <!-- Modal HTML -->
    <div id="myModal_droite1" class="modal fade right">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">HORAIRES</h4>
                </div>
                <div class="modal-body">
                   <h1>
	Horaires d'ouvertures<img alt="" height="250" src="grimpe.jpg" style="float: right;" width="350" /></h1>
<p style="text-align: right;">
	&nbsp;</p>
<p>
	<strong>Votre salle est ouverte 7j/7 !</strong></p>
<p style="text-align: right;">
	&nbsp;</p>
<p>
	Du<strong> lundi au vendredi</strong> de <strong>12h à 22h.</strong></p>
<p style="text-align: right;">
	&nbsp;</p>
<p>
	Les <strong>week-ends et jours fériés</strong> de<strong> 10h à 20h.</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal_droite2" class="modal fade right">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Acces à la salle</h4>
                </div>
                <div class="modal-body">
                    	
<h2>
	Adresse</h2>
<p>
	Karma - Salle d'escalade<br />
	Route militaire<br />
	77300 Fontainebleau</p>
<h2>
	Accès en bus</h2>
<p>
	Ligne 3 ou Ligne 8</p>
<p>
	Arrêt&nbsp;: Rocher d’avon</p>
<p>
	Remonter la "Rue des archives"</p>
<p>
	Prendre la 2<sup>ème</sup> à droite "Route militaire"</p>
<h2>
	Plan</h2>
<p style="text-align: center;">
	<iframe frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5297.937921424157!2d2.724827752348514!3d48.39953922228439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5f4fb7b580b89%3A0xeeab496a80c63f42!2sRoute+Militaire%2C+77300+Fontainebleau!5e0!3m2!1sfr!2sfr!4v1407007233363" style="border:0" width="600"></iframe></p>
<p style="text-align: center;">
	&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal_droite3" class="modal fade right">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">CONTACT</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal_droite4" class="modal fade right">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">TARIFS</h4>
                </div>
                <div class="modal-body">
                    

			<h1>
	Entrées</h1>
<p>
	L'entrée à la salle Karma peut se faire grâce à plusieurs types de formule (entrée simple, abonnement,...). Deux types de tarifs existent : un tarif licenciés avantageux pour les détenteurs d'une licence FFME en cours de validité et un tarif classique grand public.</p>
<h2 style="text-align: center;">
	Tarifs Licenciés FFME<br />
	Saison 2016 - 2017</h2>
<table align="center" border="1" cellpadding="0" cellspacing="0" style="width: 90%;">
	<tbody>
		<tr>
			<td>
				<h3 style="text-align: center;">
					<strong>Licenciés</strong></h3>
			</td>
			<td>
				<h4 style="text-align: center;">
					Tarif Normal</h4>
			</td>
			<td colspan="2">
				<h4 style="text-align: center;">
					Tarif Réduit<sup> (*)</sup><br />
					(-18 ans et étudiants)</h4>
			</td>
			<td>
				<h4 style="text-align: center;">
					Tarif Enfants<br />
					(-12 ans)</h4>
			</td>
		</tr>
		<tr>
			<td>
				<h4 style="text-align: center;">
					Entrée simple</h4>
			</td>
			<td style="text-align: center;">
				12,50 €</td>
			<td colspan="2" style="text-align: center;">
				10,50 €</td>
			<td style="text-align: center;">
				8 €</td>
		</tr>
		<tr>
			<td>
				<h4 style="text-align: center;">
					Carnet 10 entrées<sup> (**)</sup></h4>
			</td>
			<td style="text-align: center;">
				100 €</td>
			<td colspan="2" style="text-align: center;">
				80 €</td>
			<td style="text-align: center;">
				64 €</td>
		</tr>
		<tr>
			<td>
				<h4 style="text-align: center;">
					Abonnement Trimestriel<sup> (**)</sup></h4>
			</td>
			<td style="text-align: center;">
				155 €</td>
			<td colspan="2" style="text-align: center;">
				120 €</td>
			<td style="text-align: center;">
				105 €</td>
		</tr>
		<tr>
			<td>
				<h4 style="text-align: center;">
					Abonnement Annuel<sup> (**)</sup></h4>
			</td>
			<td style="text-align: center;">
				415 €</td>
			<td colspan="2" style="text-align: center;">
				330 €</td>
			<td style="text-align: center;">
				260 €</td>
		</tr>
		<tr>
			<td>
				<h4 style="text-align: center;">
					Abonnement Annuel Couple<sup> (*) (**)</sup><br />
					(marié, pacsé, en concubinage)</h4>
			</td>
			<td colspan="4" rowspan="1" style="text-align: center;">
				725 €</td>
		</tr>
		<tr>
			<td style="text-align: center;">
				<h4 style="text-align: center;">
					Abonnement Annuel Famille<br />
					(1 adulte + 1 enfant)<sup> (*) (**)</sup></h4>
			</td>
			<td colspan="4" rowspan="1" style="text-align: center;">
				620 €</td>
		</tr>
	</tbody>
</table>

 
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</div>     
   <!-- FOOTER -->
<?php include("footer.php"); ?>
   <!-- javascript bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
