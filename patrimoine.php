<?php 
require 'admin/classes/utils.php';
require 'admin/classes/Catproduct.php';
require 'admin/classes/Planning.php';
session_start();

$catproduct = new Catproduct();
$catproduct->catproduitViewIterative(null);
$result = $catproduct->tabView;
$catproduct = null;


$planning = new Planning();
$result2 = $planning->planningGet();
//print_r($result);
$planning = null;

$titre= null;
$url= null;
$pdf= null;
if (!empty($result)) {
	$titre= $result2[0]['titre'];
	$url= $result2[0]['url'];
	$pdf= '/photos/bdc'. $result2[0]['pdf'];
}
	
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<title>Le Nadalou : Tous nos produits bio</title>
	<meta name="description" content="consultez nos produits alimentaire, cosmétiques" />
	<meta name="keywords" content="Alimentation, cosmétiques, légumes bio, fruits bio, épicerie, légumes bio, complément alimentaire, elixir floral, huile essencielle, huile végétale, huile florale, pain, pains, plante médicinale, propolis, montignac, propolis, solgar, atelier bio, bien être ,compléments alimentaires ,huiles essentielles ,aloe arborescens ,bio ,ladrome ,silicium ,pain bio ,commerce bio ,argent colloïdal ,fleur de bach ,quinton ,produits ayourvediques ,encens, seve de bouleau" />
<?php include('inc/meta.php'); ?>
</head>
<body>
	
<?php include('inc/header.php'); ?>
            	<div class="row actualites">
            			<div class="large-12 medium-12 small-12 columns ">
            				<h1>Découvrez le patrimoine de notre région</h1>
            				<h5></h5>
            				<p>
            				    Aux alentours du gîtes, vous trouverez des sites, des monuments classés et des paysages superbes.
            				</p>
            				 <img alt="" src="img/logoOTourisme.png" style="max-width: 120px;">
            				 <a href="https://goo.gl/85oxh3" class="bt-plus" target="_blank">Office du tourisme</a>
            			</div>	
            			
            	</div>
	
	
	           <div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" target="_blank">Les Quais d'Argentat</a></h2>
						<p>
							A proximité du gîte ....
						</p>
						
					</div>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/argentat.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/argentat.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
				</div>
		
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/merle.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/merle.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" >Les Tours de Merle</a></h2>
						<p>
							
						</p>
					</div>
				</div>
				
				

	<!-- Fin Actualités -->
	
<?php include('inc/footer.php'); ?>
	<script>
		$('.header ul li:nth-child(4)').addClass('active');
	</script>
	
</body>
</html>
