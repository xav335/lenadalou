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
	<title>Le Nadalou: gîte en location à Monceaux-sur-Dordogne en Corrèze</title>
<?php include('inc/meta.php'); ?>
</head>
<body>
	
<?php include('inc/header.php'); ?>
	
	

	
	<div class="row encart">
	      <h2>Location gîte à Monceaux-sur-Dordogne en Corrèze pour 6&nbsp;personnes</h2>
	      <img src="img/lenadalou.jpg" alt="" />
	      
		<div class="large-6 medium-6 small-12 columns">&nbsp;
			
			<p><br>
				Au cœur de la Corrèze, à deux pas des plus beaux sites de la Vallée de la Dordogne, Le Nadalou, 
				une maison indépendante de 90 m2, proche de la place village, au bout d'une voie sans issue, 
				vous accueille au calme, dans un environnement privilégié où la nature domine.<br><br>
 
                Bénéficiant de la qualification gîte de pêche, il est situé à moins d'un kilomètre de 
                la rivière La Dordogne et à proximité d'autres rivières, lacs, gorges et nombreux barrages, 
                ce qui séduira les passionnés de pêche à la mouche et aux carnassiers. Un paradis pour les pêcheurs !!! <br><br>
​
                Cette location saisonnière dispose de trois chambres, d'une salle à manger avec cheminée équipée d'un poêle à bois,
                 d'une cuisine indépendante, ainsi que d'une grande terrasse donnant sur un parc familial de 5000 m2 au milieu d'un écrin
                  de verdure. Vous serez bercés par les clapotis du petit ruisseau passant au pied de la maison.<br><br>
 
                <b>Cette nature douce et sauvage n'attend plus que vous...</b>
						
			</p>
        		<a href="img/lenadalou3.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou3.jpg" alt="" /></a>&nbsp;
        		<a href="img/lenadalou5.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou5.jpg" alt="" /></a>
		</div>
		<div class="large-6 medium-6 small-12 columns">
			<br><br><br>
			<a href="img/lenadalou6.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou6.jpg" alt="" /></a>&nbsp;
			<a href="img/lenadalou2.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou2.jpg" alt="" /></a>&nbsp;
			<a href="img/lenadalou4.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou4.jpg" alt="" /></a>
		</div>
	</div>

	
<?php include('inc/footer.php'); ?>
	<script>
		$('.header ul li:first-child').addClass('active');
	</script>
	
</body>
</html>
