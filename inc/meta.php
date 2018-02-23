	<meta name="google-site-verification" content="r62lnt6PB2BWW-5kZLBmSocaY6savT26GlaSd6FcckM" />
	<meta name="msvalidate.01" content="0F652D91935F25317C22102440B50132" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-title" content="Le Nadalou" />
	
	<meta name="Content-Language" content="fr">
	<meta name="publisher" content="iconeo.fr">
	<meta name="author" content="iconeo.fr">
	<meta name="Revisit-After" content="16 days">
	<meta name="Robots" content="all">
	
	<link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico" />
	<link rel="apple-touch-icon" href="img/favicon.png" />
	<link rel="icon" href="img/favicon2.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="js/vendor/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="js/vendor/fancybox/helpers/jquery.fancybox-buttons.css" />
	<link rel="stylesheet" href="js/vendor/fancybox/helpers/jquery.fancybox-thumbs.css" />
	<link rel="stylesheet" type="text/css" href="js/vendor/slick/slick.css"/>
	<link rel="stylesheet" href="style.css" />
	<script src="js/vendor/modernizr.js"></script>
	
	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/vendor/jquery.mousewheel-3.0.6.pack.js"></script>
	<script src="js/vendor/fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<script src="js/vendor/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script src="js/vendor/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script src="js/vendor/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script src="js/scripts.js"></script>
	<script src="js/vendor/slick/slick.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			/* Slider références */
			$('.autoplay').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 5000,
				pauseOnHover: true,
				speed:1000
			});

			$('.autoplay2').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
				pauseOnHover: true,
				speed:1000
			});

			$('.fade').slick({
				  dots: true,
				  autoplay: true,
				  infinite: true,
				  speed: 300,
				  fade: true,
				  slide: 'div',
				  cssEase: 'linear'
			});
		});

		/*
		 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
		*/
		$('.fancybox-media')
			.attr('rel', 'media-gallery')
			.fancybox({
				openEffect : 'none',
				closeEffect : 'none',
				prevEffect : 'none',
				nextEffect : 'none',

				arrows : false,
				helpers : {
					media : {},
					buttons : {}
				}
			});
	</script>
	