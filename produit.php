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
	
	<!-- Actualités -->
	           <div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					
					<div class="large-8 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="https://goo.gl/T2RzMQ" target="_blank">Parc aquatique</a></h2>
						<p>
							
						</p>
						
					</div>
					<div class="large-4 medium-6 small-12 columns" >
						<a href="https://goo.gl/T2RzMQ" target="_blank"><img src="img/piscine.jpg"  alt="" style="max-width: 320px; padding: 20px 20px 20px 20px; " /></a>
					</div>
				</div>
		
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/peche2.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/peche2.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="produit-detail.php?categorie=3" >Pêche</a></h2>
						<p>
							
						</p>
					</div>
				</div>
				
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="produit-detail.php?categorie=3" >Randonnée</a></h2>
						<p>
							
						</p>
						
					</div>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/rando.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/rando.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
				</div>
				
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/canoe.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/canoe.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="produit-detail.php?categorie=3" >Canioning - Paddle</a></h2>
						<p>
							
						</p>
						
					</div>
				</div>
				
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="produit-detail.php?categorie=3" >Parapente</a></h2>
						<p>
							
						</p>
						
					</div>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/para.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/para.jpg"  alt="" padding: 20px 20px 20px 20px; " /></a>
					</div>
				</div>
			
			     <div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/canoe.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/canoe.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="produit-detail.php?categorie=3" >Equitation</a></h2>
						<p>
							
						</p>
						
					</div>
				</div>

	<!-- Fin Actualités -->
	
<?php include('inc/footer.php'); ?>
	<script>
		$('.header ul li:nth-child(3)').addClass('active');
	</script>
	
</body>
</html>
