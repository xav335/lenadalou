<?php 
require 'admin/classes/News.php';
require 'admin/classes/utils.php';
require 'admin/classes/Planning.php';
session_start();
$news = new News();
$result = $news->newsValidGet();
//print_r($result);
if (empty($result)) {
	$titre=  		'';
	$date_news= 	'';
	$accroche= 		'Pas de news pour le moment.';
	$contenu= 		'';
} else {
	$titre=  		$result[0]['titre'];
	$date_news= 	traitement_datetime_affiche($result[0]['date_news']);
	$accroche= 		$result[0]['accroche'];
	$contenu= 		$result[0]['contenu'];
}


$planning = new Planning();
$result2 = $planning->planningGet();
//print_r($result);
$planning = null;

$titre= null;
$url= null;
$pdf= null;
if (!empty($result2)) {
	$titre= $result2[0]['titre'];
	$url= $result2[0]['url'];
	$pdf= '/photos/bdc'. $result2[0]['pdf'];
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<title>Le Nadalou: Tarifs</title>
<?php include('inc/meta.php'); ?>
</head>
<body>
	
<?php include('inc/header.php'); ?>
	
	
	<div class="row encart">
	      <h2>Nos tarifs</h2>
	      <p>
	       Possibilités de tarifs au Week end en dehors de la haute et très haute saison : <br>
                 &nbsp; &nbsp; &nbsp;- pour 2 nuits : 170 euros <br>
                 &nbsp; &nbsp; &nbsp;- pour 3 nuits : 240 euros<br>
          </p>
          	<a href="https://goo.gl/1sBKfq" class="bt-plus-rose" target="_blank">Voir les disponibilité et réserver le gîte ici</a>
	      
		<div style="text-align: center; ">
			<div class="large-4 medium-4 small-12 columns" style="background-color: #e5eed1; text-align: center; height: 120px">
		         &nbsp;
		          <h4>Basse Saison</h4>
		          280€
		          <br><br>
			</div>
			<div class="large-8 medium-8 small-12 columns " style="background-color: #d7d8d5;height: 120px">
			<br>
			     06/01/2018 au 06/04/2018 <br>
			     29/09/2018 au 19/10/2018 <br>
			     03/11/2018 au 21/12/2018<br>
			</div>
		</div>	
		<HR >
		<div style="text-align: center; ">
			<div class="large-4 medium-4 small-12 columns" style="background-color: #e5eed1; text-align: center; height: 120px">
		         &nbsp;
		          <h4>Moyenne Saison</h4>
		          370€
		          <br><br>
			</div>
			<div class="large-8 medium-8 small-12 columns " style="background-color: #d7d8d5;height: 120px">
			<br>
			    07/04/2018 au 29/06/2018<br>
                01/09/2018 au 28/09/2018 <br>
                TOUSSAINT DU 20/10/2018 au 02/11/2018<br>
			</div>
		</div>	
		<HR >
		<div style="text-align: center; ">
			<div class="large-4 medium-4 small-12 columns" style="background-color: #e5eed1; text-align: center; height: 120px">
		         &nbsp;
		          <h4>Moyenne Saison</h4>
		          370€
		          <br><br>
			</div>
			<div class="large-8 medium-8 small-12 columns " style="background-color: #d7d8d5;height: 120px">
			<br>
			    07/04/2018 au 29/06/2018<br>
                01/09/2018 au 28/09/2018 <br>
                TOUSSAINT DU 20/10/2018 au 02/11/2018<br>
			</div>
		</div>	
		<HR >
		<div style="text-align: center; ">
			<div class="large-4 medium-4 small-12 columns" style="background-color: #e5eed1; text-align: center; height: 120px">
		         &nbsp;
		          <h4>Haute Saison</h4>
		          460€
		          <br><br>
			</div>
			<div class="large-8 medium-8 small-12 columns " style="background-color: #d7d8d5;height: 120px">
			<br>
			   30/06/2018 au 13/07/2018 <br>
			   25/08/2018 au 31/08/2018<br>
			</div>
		</div>	
		<HR >
		<div style="text-align: center; ">
			<div class="large-4 medium-4 small-12 columns" style="background-color: #e5eed1; text-align: center; height: 120px">
		         &nbsp;
		          <h4>Très haute Saison</h4>
		          480€
		          <br><br>
			</div>
			<div class="large-8 medium-8 small-12 columns " style="background-color: #d7d8d5;height: 120px">
			<br>
                14/07/2018 au 24/08/2018 <br>
			</div>
		</div>	
		<HR >
		<div style="text-align: center; ">
			<div class="large-4 medium-4 small-12 columns" style="background-color: #e5eed1; text-align: center; height: 120px">
		         &nbsp;
		          <h4>Vacances de noël</h4>
		          (Moyenne saison)
		          370€
		          <br><br>
			</div>
			<div class="large-8 medium-8 small-12 columns " style="background-color: #d7d8d5;height: 120px">
			<br>
                22/12/2018 au 04/01/2019<br>
			</div>
		</div>	
		
	</div>
	
	
		
<?php include('inc/footer.php'); ?>
	<script>
	$('.header ul li:nth-child(3)').addClass('active');
	</script>
	
</body>
</html>
