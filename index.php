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
	      <div class="large-9 medium-9 small-12 columns">
    	      <h2>Gîte à Monceaux-sur-Dordogne en Corrèze</h2>
    	      <h4>Location pour 6&nbsp;personnes</h4>
    	  </div>
    	  <div class="large-3 medium-3 small-12 columns logopeche">  
                 <a class="fancybox-media" href="https://www.youtube.com/watch?v=WHNVsCogMiU"><img src="img/video.jpg" alt="" /></a>
           </div>
    	  
	      
	      <img src="img/lenadalou.jpg" alt="" />
	      
		<div class="large-6 medium-6 small-12 columns">&nbsp;
			
			<p><br>
				Au cœur de la Corrèze, à deux pas des plus beaux sites de la Vallée de la Dordogne, Le Nadalou, 
				une maison indépendante de 90 m2, proche de la place village, au bout d'une voie sans issue, 
				vous accueille au calme, dans un environnement privilégié où la nature domine.<br><br>
 
                Bénéficiant de la qualification gîte de pêche, il est situé à moins d'un kilomètre de 
                la rivière La Dordogne et à proximité d'autres rivières, lacs, gorges et nombreux barrages, 
                ce qui séduira les passionnés de pêche à la mouche et aux carnassiers. Un paradis pour les pêcheurs&nbsp;!!! 
​
						
			</p>
        		<a href="img/lenadalou3.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou3.jpg" alt="" /></a>&nbsp;
        		
		</div>
		<div class="large-6 medium-6 small-12 columns">
			<br><br><br>
			<a href="img/lenadalou2.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou2.jpg" alt="" /></a>&nbsp;
			<p><br>
​
                Cette location saisonnière dispose de trois chambres, d'une salle à manger avec cheminée équipée d'un poêle à bois,
                 d'une cuisine indépendante, ainsi que d'une grande terrasse donnant sur un parc familial de 5000 m2 au milieu d'un écrin
                  de verdure. Vous serez bercés par les clapotis du petit ruisseau passant au pied de la maison.<br><br>
 
                <h5>Cette nature douce et sauvage n'attend plus que vous...</h5>
                <br><br>
                <a href="https://goo.gl/1sBKfq" class="bt-plus-rose" target="_blank">Voir les disponibilité et réserver le gîte ici</a>
						
			
		</div>
	</div>

	<!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-27.0.4.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Cols: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 5,
                $SpacingX: 5,
                $SpacingY: 5,
                $Align: 390
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 106 css*/
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
     <div class="row encart">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
             <div data-p="150.00">
                <img data-u="image" src="img/index/10-ori.jpg" />
                <img data-u="thumb" src="img/index/10-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/index/1-ori.jpg" />
                <img data-u="thumb" src="img/index/1-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/index/2-ori.jpg" />
                <img data-u="thumb" src="img/index/2-thumb.jpg" />
            </div>
           <div data-p="150.00">
                <img data-u="image" src="img/index/3-ori.jpg" />
                <img data-u="thumb" src="img/index/3-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/index/4-ori.jpg" />
                <img data-u="thumb" src="img/index/4-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/index/5-ori.jpg" />
                <img data-u="thumb" src="img/index/5-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/index/6-ori.jpg" />
                <img data-u="thumb" src="img/index/6-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/index/7-ori.jpg" />
                <img data-u="thumb" src="img/index/7-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/index/8-ori.jpg" />
                <img data-u="thumb" src="img/index/8-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/index/9-ori.jpg" />
                <img data-u="thumb" src="img/index/9-thumb.jpg" />
            </div>
             <div data-p="150.00">
                <img data-u="image" src="img/index/11-ori.jpg" />
                <img data-u="thumb" src="img/index/11-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/index/12-ori.jpg" />
                <img data-u="thumb" src="img/index/12-thumb.jpg" />
            </div>
           <div data-p="150.00">
                <img data-u="image" src="img/index/13-ori.jpg" />
                <img data-u="thumb" src="img/index/13-thumb.jpg" />
            </div>
            <div data-p="150.00">
                <img data-u="image" src="img/index/14-ori.jpg" />
                <img data-u="thumb" src="img/index/14-thumb.jpg" />
            </div>
            
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
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
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
	
	
	<div class="row encart">
	      
		<div class="large-6 medium-6 small-12 columns">
			
        		<a href="img/lenadalou4.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou4.jpg" alt="" /></a>&nbsp;
        		<a href="img/lenadalou5.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou5.jpg" alt="" /></a>
		</div>
		<div class="large-6 medium-6 small-12 columns">
			
						
			<a href="img/lenadalou7.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou7.jpg" alt="" /></a>&nbsp;
			<a href="img/lenadalou6.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/lenadalou6.jpg" alt="" /></a>
		</div>
	</div>
	
<?php include('inc/footer.php'); ?>
	<script>
		$('.header ul li:first-child').addClass('active');
	</script>
	
</body>
</html>
