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
	<title>Le Nadalou : Activités aux alentours</title>
	<meta name="description" content="consultez nos produits alimentaire, cosmétiques" />
	<meta name="keywords" content="Alimentation, cosmétiques, légumes bio, fruits bio, épicerie, légumes bio, complément alimentaire, elixir floral, huile essencielle, huile végétale, huile florale, pain, pains, plante médicinale, propolis, montignac, propolis, solgar, atelier bio, bien être ,compléments alimentaires ,huiles essentielles ,aloe arborescens ,bio ,ladrome ,silicium ,pain bio ,commerce bio ,argent colloïdal ,fleur de bach ,quinton ,produits ayourvediques ,encens, seve de bouleau" />
<?php include('inc/meta.php'); ?>
</head>
<body>
	
<?php include('inc/header.php'); ?>
            	<div class="row actualites">
            	         <div class="large-10 medium-10 small-12 columns">
                    	      <h1>Loisirs et découverte</h1>
                    	      <p>
            				    Notre belle campagne Corrézienne vous propose de nombreuses activités. 
            				    </p>
                    	  </div>
                    	   <div class="large-3 medium-3 small-12 columns logopeche">  
                                 <a class="fancybox-media" href="https://www.youtube.com/watch?v=WHNVsCogMiU"><img src="img/video.jpg" alt="" /></a>
                           </div>
                    	   
            			
            	</div>
	
	
	           <div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" target="_blank">Loisirs aquatiques</a></h2>
						<p>
							A 5kms, dans la petite ville d’Argentat, vous pourrez aller vous baigner au centre aquarécréatif « Le Splash ». Ce complexe comprend plusieurs bassins, des toboggans, une plage ombragée, une aire de pique-nique…
						</p>
						
					</div>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/piscine.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/piscine.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
				</div>
		
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/peche2.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/peche2.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" >Pêche</a></h2>
						<p>
							La vallée de la Dordogne, destination de pêche la plus prisée d’Europe, comblera les amateurs et les passionnés. 
							<br><img src="img/peche.png"  alt=""   />
						</p>
					</div>
				</div>
				
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" >Randonnée - Vélo</a></h2>
						<p>
							Au départ du gîte, à pieds ou en VTT, vous découvrirez différents parcours au milieu de forêts de champignons et de châtaigniers. Cette nature verdoyante vous apportera une douce quiétude.
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
						<h2><a href="#" >Canyoning - Paddle</a></h2>
						<p>
							Si vous le souhaitez, notre belle Dordogne dans son écrin de verdure vous apportera dépaysement et détente, grâce à une large gamme de loisirs aquatiques, tels que le canoë, le stand up paddle, la promenade en gabare et la pêche. 
						</p>
						
					</div>
				</div>
				
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" >Parapente - Delta plane</a></h2>
						<p>
							Les amateurs de sensations fortes, pourront effectuer des baptêmes de delta plane à Monceaux sur Dordogne ou s’adonner au parcours d’escalade, escalad’arbre, Via Ferrata, tir à l'arc
						</p>
						
					</div>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/para.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/para.jpg"  alt="" padding: 20px 20px 20px 20px; " /></a>
					</div>
				</div>
			
			     <div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/chevaux.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chevaux.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" >Equitation</a></h2>
						<p>
							A 2kms du Nadalou, dans le village de Monceaux sur Dordogne, vous trouverez les écuries de Galou qui proposent des balades à cheval et à poney.
						</p>
						
					</div>
				</div>

	<!-- Fin Actualités -->
	
	
	
	
	<div class="row actualites">
            			<div class="large-12 medium-12 small-12 columns ">
            				<h1>Découvrez le patrimoine de notre région</h1>
            				<h5></h5>
            				<p>
            				    Aux alentours du gîtes, vous trouverez des sites, des monuments classés et des paysages superbes.<br>
            				    Découvrez les autres merveilles de notre belle vallée de la Dordogne sur le site de l’ office du tourisme et sur les nombreuses brochures mises à votre disposition au gîte.

            				    
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
							A proximité du gite le Nadalou, vous pourrez flâner le long des quais d’Argentat où coule notre belle Dordogne, vous installer en terrasse pour déguster des glaces, crêpes ou boire un verre.
						</p>
						
					</div>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/argentat.jpg" class="fancybox" data-fancybox-group="patrimoine"><img src="img/argentat.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
				</div>
		
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/merle.jpg" class="fancybox" data-fancybox-group="patrimoine"><img src="img/merle.jpg"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" >Les Tours de Merle</a></h2>
						<p>
							Un site incontournable, qui vous plongera dans le Limousin médiéval…
                            Une ancienne cité authentique dans une superbe nature préservée où trône ces magnifiques tours.
							
						</p>
					</div>
				</div>
				 <div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" target="_blank">Beaulieu-sur-Dordogne</a></h2>
						<p>
                            A une vingtaine de minutes du Nadalou,découvrez Beaulieu-sur-Dordogne, ou la rivière rencontre l’histoire…
                            Et prenez le temps d’apprécier un magnifique couché de soleil sur la rivière.
						</p>
						
					</div>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/beaulieu.png" class="fancybox" data-fancybox-group="patrimoine"><img src="img/beaulieu.png"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
				</div>
		
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/coulonge.png" class="fancybox" data-fancybox-group="patrimoine"><img src="img/coulonge.png"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" >Les plus beaux villages de France</a></h2>
						<p>
                            Dans un rayon de 30kms, visitez quelques villages labellisés « plus beaux villages de France ».
                            (Collonges-la-rouge, Curemonte, Turenne…)
						</p>
					</div>
				</div>
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" target="_blank">Curiosités</a></h2>
						<p>
							Enchantez les petits et les grands en suivant la route de la noix, pour vivre des expériences et des moments inoubliables à la forêt des singes, au rocher des aigles, mais aussi dans les profondeurs de la terre (gouffre de Padirac, grottes…)</p>
						
					</div>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/padirac.png" class="fancybox" data-fancybox-group="patrimoine"><img src="img/padirac.png"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
				</div>
		
				<div class="row actualites" style="border-bottom: 1px solid #61a141;padding-right: 35px;padding-bottom: 20px;">
					<br>
					<div class="large-6 medium-6 small-12 columns" >
						<a href="img/gastro.png" class="fancybox" data-fancybox-group="patrimoine"><img src="img/gastro.png"  alt=""  padding: 20px 20px 20px 20px; " /></a>
					</div>
					<div class="large-6 medium-6 small-12 columns" style="padding-left: 30px;">
						<h2><a href="#" >Gastronomie</a></h2>
						<p>
							Notre gastronomie et nos gourmandises Corréziennes, éveilleront vos papilles : chocolat, fraise, noix, miel, pommes, liqueurs aux fruits et baies sauvages, cidre, vin paillé…

                            Tous ces délices, venez les découvrir lors des marchés de producteurs de pays. Tout particulièrement celui de Monceaux sur Dordogne, marché festif placé sous le signe de la convivialité, qui vous permettra en période estivale de consommer sur place les produits du terroir.
							
						</p>
					</div>
				</div>
	
<?php include('inc/footer.php'); ?>
	<script>
		$('.header ul li:nth-child(4)').addClass('active');
	</script>
	
</body>
</html>
