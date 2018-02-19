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
	      <h2>Le Nadalou</h2>
	      <h4>Location pour 6&nbsp;personnes</h4>
	      <p><br>
				3 chambres (2 à l'étage, un lit 2 place + une chambre avec deux lits deux place, 2 salles de bains) <br><br>
				<a href="https://goo.gl/1sBKfq" class="bt-plus" target="_blank">Voir la description sur gîte de france.</a>
						
			</p>
	</div>
	
	<!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-27.0.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/Jssor/jssor_init.js" ></script>
    <link rel="stylesheet" href="js/Jssor/jssor.css" />    
        


    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/1-ori.jpg" />
                <img data-u="thumb" src="img/qsn/1-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/2-ori.jpg" />
                <img data-u="thumb" src="img/qsn/2-thumb.jpg" />
            </div>
           <div data-p="150.00">
                <img data-u="image" src="img/qsn/3-ori.jpg" />
                <img data-u="thumb" src="img/qsn/3-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/4-ori.jpg" />
                <img data-u="thumb" src="img/qsn/4-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/5-ori.jpg" />
                <img data-u="thumb" src="img/qsn/5-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/6-ori.jpg" />
                <img data-u="thumb" src="img/qsn/6-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/7-ori.jpg" />
                <img data-u="thumb" src="img/qsn/7-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/8-ori.jpg" />
                <img data-u="thumb" src="img/qsn/8-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/9-ori.jpg" />
                <img data-u="thumb" src="img/qsn/9-thumb.jpg" />
            </div>
             <div data-p="150.00">
                <img data-u="image" src="img/qsn/10-ori.jpg" />
                <img data-u="thumb" src="img/qsn/10-thumb.jpg" />
            </div>
             <div data-p="150.00">
                <img data-u="image" src="img/qsn/11-ori.jpg" />
                <img data-u="thumb" src="img/qsn/11-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/12-ori.jpg" />
                <img data-u="thumb" src="img/qsn/12-thumb.jpg" />
            </div>
           <div data-p="150.00">
                <img data-u="image" src="img/qsn/13-ori.jpg" />
                <img data-u="thumb" src="img/qsn/13-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/14-ori.jpg" />
                <img data-u="thumb" src="img/qsn/14-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/15-ori.jpg" />
                <img data-u="thumb" src="img/qsn/15-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/16-ori.jpg" />
                <img data-u="thumb" src="img/qsn/16-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/17-ori.jpg" />
                <img data-u="thumb" src="img/qsn/7-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/18-ori.jpg" />
                <img data-u="thumb" src="img/qsn/18-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/qsn/19-ori.jpg" />
                <img data-u="thumb" src="img/qsn/9-thumb.jpg" />
            </div>
             <div data-p="150.00">
                <img data-u="image" src="img/qsn/20-ori.jpg" />
                <img data-u="thumb" src="img/qsn/20-thumb.jpg" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:99px;height:66px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
	
	
	

	
	<div class="row encart">
	      
	</div>

	
<?php include('inc/footer.php'); ?>
	<script>
	$('.header ul li:nth-child(2)').addClass('active');
	</script>
	
</body>
</html>
