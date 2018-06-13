<?php // On démarre la session AVANT d'écrire du code HTML
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	
	<!-- Ajouts liés à l'admin Remixweb -->	
	
		<!-- GOOGLE ANALYTICS -->
		<?	list($mail1, $script_google, $nom_titre_meta, $url_site, $url_facebook, $url_linkedin, $url_twitter, $url_instagram, $adresse, $cp, $ville, $pays, $tel) = mysqli_fetch_array(mysqli_query($link, "SELECT mail1, google_stats, nom_titre_meta, url_site, url_facebook, url_linkedin, url_twitter, url_instagram, adresse, cp, ville, pays, tel FROM ".$table_prefix."_divers WHERE ID=1 "));
	        echo ("$script_google"); 
	    ?>
	    <?php include ("inc/meta.php"); ?>
	    <?php 
		
		date_default_timezone_set('Europe/Paris');
		// --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
		setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK
		$DTZ = new DateTimeZone('Europe/Paris');

		?>
		
		
		
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="author" content="Remixweb" />

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- Jasny CSS -->
<link href="assets/css/jasny-bootstrap.min.css" rel="stylesheet">
<!-- Animate CSS -->
<link href="assets/css/animate.css" rel="stylesheet">
<!-- Code CSS -->
<link href="assets/css/tomorrow-night.css" rel="stylesheet" />
<!-- Gallery CSS -->
<link href="assets/css/bootstrap-gallery.css" rel="stylesheet">
<!-- ColorBox CSS -->
<link href="assets/css/colorbox.css" rel="stylesheet">
<!-- Custom font -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<div class="page-loader">
		<div class="loader-in">Site en cours de chargement...</div>
		<div class="loader-out">Site en cours de chargement...</div>
	</div>

	<?php if($pg == $defaultpg) { ?>
	<div class="canvas intro-effect-push" id="container">
		<div class="canvas-overlay"></div>
	<?php } else { ?>
	<div class="canvas post-striped">
	<?php } ?>
		
		
		<header>
			
			<nav class="navbar navbar-fixed-top navbar-laread-white <?php if($pg != $defaultpg) { echo "border-black"; } ?>">
						
				<div class="container">
					<div class="navbar-header">
						<a class="" href="<?php echo $defaultpg; ?>.php"><img height="64" src="images/logo.jpg" alt="<?php echo $nom_titre_meta; ?>"></a>
					</div>
					<button type="button" class="navbar-toggle collapsed menu-collapse" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					<a href="#" class="banner-search-close"><i class="fa fa-times"></i></a>
					<a href="#" class="banner-search"><i class="fa fa-search"></i></a>

					<form method="GET" action="recherche--R--page-blog" class="banner-search-form">
						<input type="text" name="s" placeholder="Rechercher">
					</form>

					<div class="collapse navbar-collapse" id="main-nav">
						<ul class="nav navbar-nav">
							<li>
								<a href="actualites-aero-design-concept-store--206--page-blog" class="" data-toggle="" role="button" aria-expanded="false">QUOI DE NEUF ?</a>
							</li>
							<li>
								<a href="aero-design-concept-store--207--page" class="" role="button" aria-expanded="false">LE CONCEPT STORE</a>
							</li>
							<li>
								<a href="exposition-artistes-mobilier-objet-aviation--208--page-blog" class="" role="button" aria-expanded="false">LES ARTISTES</a>
							</li>
							<li>
								<a href="vente-exposition-mobilier-aviation-objet-d-art--209--page-blog" class=""  role="button" aria-expanded="false">BOUTIQUE EN LIGNE</a>
							</li>
							<li>
								<a href="contacter-aero-design-galerie-aviation--135--contact" class="" role="button" aria-expanded="false">CONTACT</a>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
		</header>
		
	
		<div id="fullpage">
	
				<div class="banner-mod" id="section0">
					
	
					<!-- Contenu principal
					================================================== -->
					<?php include ("pages/".$pg.".php"); ?>
	
					<footer class="container-fluid footer">
						<div class="container text-center">
							<div class="logo-footer"><img style="width: 140px; height: auto;" src="images/logo-footer-1.png" alt="<?php echo $nom_titre_meta; ?>"></div>
							
							<div class="laread-social">
								<a href="<?php echo $url_facebook; ?>" target="_blank" class="fa fa-twitter"></a>
								<a href="<?php echo $url_linkedin; ?>" target="_blank" class="fa fa-linkedin"></a>
								<a href="<?php echo $url_instagram; ?>" target="_blank" class="fa fa-instagram"></a>
								
								<div class="coordonnees">
									<p><?php echo $nom_titre_meta; ?></p>
									<p><?php echo $adresse."<br />";
										echo $cp." - ".$ville."<br />";
										echo "<a href='callto:".$tel."'>".$tel."</a>";
									?></p>
								</div>
							</div>
						</div>
					</footer>
	
				</div>
				
	
			<div class="banner-bottom bbottom-3">
				<div class="pull-left">
					<p>© 2018 Aero Design</p>
					<div class="banner-links">
						<a href="aero-design-mentions-legales--1--page">Mentions légales</a>   •   
						<a href="contacter-aero-design-galerie-aviation--135--contact">Contactez-nous</a>
					</div>
				</div>
	
				<div class="pull-right">
					<div class="banner-sharebox">
						<span>Suivez-nous</span>
						<a href="<?php echo $url_facebook; ?>" target="_blank"><i class='fa fa-facebook'></i></a>
						<a href="<?php echo $url_linkedin; ?>" target="_blank"><i class='fa fa-linkedin'></i></a>
						<a href="<?php echo $url_instagram; ?>" target="_blank"><i class='fa fa-instagram'></i></a>
					</div>
				</div>
			</div>
			
			
		</div>

</div>

	

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jasny-bootstrap.min.js"></script>
	<script src="assets/js/prettify.js"></script>
	<script src="assets/js/lang-css.js"></script>
	<script src="assets/js/jquery.blueimp-gallery.min.js"></script>
	<script src="assets/js/imagesloaded.js"></script>
	<script src="assets/js/jquery.dotdotdot.min.js"></script>
	<script src="assets/js/jquery.colorbox-min.js"></script>
	<script src="assets/js/jquery.nicescroll.min.js"></script>
	<script src="assets/js/masonry.js"></script>
	<script src="assets/js/viewportchecker.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/calendar.js"></script>
	<script src="assets/js/jquery.ellipsis.min.js"></script>
	<script src="assets/js/classie.js"></script>
	<script src="assets/js/jquery.touchSwipe.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<script src="assets/js/modernizr.custom.js"></script>
	<script src="assets/js/uiProgressButton.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA5VUcLfsIR19n-mkuTd-OkQ5w4uA7nPnU&sensor=false&extension=.js'></script> 
	
	<script type="text/javascript">
			var map;
			$(document).ready(function(){
		
				//var touchSupport = document.createEvent("TouchEvent");
		
				function touchSupport(){
					try{
						document.createEvent("TouchEvent");
						return true;
					} catch(e) {
						return false;
					}
				}
		
		
		
				//console.log(touchSupport());
		
		
		
				map = new GMaps({
				el: '#map',
				lat: 50.1401252,
				lng: 6.0765368,
				styles: [{featureType:'all',stylers:[{saturation:-100},{gamma:0.50}]}],
				zoomControl : false,
				panControl : false,
				scrollwheel:false,
				mapTypeControl:false,
				draggable: true, //(touchSupport() == false && screen.width > 768 ? true : false),
				streetViewControl : false,
				mapTypeControl: false,
				overviewMapControl: false,
				});
		
				map.addMarker({
					lat: 50.1401252,
					lng: 6.0765368,
					title: 'LaRead started at this point',
					infoWindow: {
						content: '<div class="map-infowindow clearfix"><p>Aéro design</p></div>'
					}
				});
				google.maps.event.trigger(map.markers[0], 'click');
			});
			</script>

	
	<script>
		(function() {

			// detect if IE : from http://stackoverflow.com/a/16657946
			var ie = (function(){
				var undef,rv = -1; // Return value assumes failure.
				var ua = window.navigator.userAgent;
				var msie = ua.indexOf('MSIE ');
				var trident = ua.indexOf('Trident/');

				if (msie > 0) {
					// IE 10 or older => return version number
					rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
				} else if (trident > 0) {
					// IE 11 (or newer) => return version number
					var rvNum = ua.indexOf('rv:');
					rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
				}

				return ((rv > -1) ? rv : undef);
			}());

			// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179
			// left: 37, up: 38, right: 39, down: 40,
			// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
			var keys = [37, 38, 39, 40], wheelIter = 0;

			function preventDefault(e) {
				e = e || window.event;
				if (e.preventDefault)
				e.preventDefault();
				e.returnValue = false;
			}

			function keydown(e) {
				for (var i = keys.length; i--;) {
					if (e.keyCode === keys[i]) {
						preventDefault(e);
						return;
					}
				}
			}

			function touchmove(e) {
				/*preventDefault(e);*/
			}

			function wheel(e) {
				// for IE
				//if( ie ) {
					//preventDefault(e);
				//}
			}

			function disable_scroll() {
				window.onmousewheel = document.onmousewheel = wheel;
				document.onkeydown = keydown;
				document.body.ontouchmove = touchmove;
			}

			function enable_scroll() {
				window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;
			}

			var docElem = window.document.documentElement,
				scrollVal,
				isRevealed,
				noscroll,
				isAnimating,
				container = document.getElementById( 'container' ),
				trigger = container.querySelector( 'a.caption-more' );

			function scrollY() {
				return window.pageYOffset || docElem.scrollTop;
			}

			function scrollPage() {
				scrollVal = scrollY();

				if( noscroll && !ie ) {
					if( scrollVal < 0 ) return false;
					// keep it that way
					window.scrollTo( 0, 0 );
				}

				if( classie.has( container, 'notrans' ) ) {
					classie.remove( container, 'notrans' );
					return false;
				}

				if( isAnimating ) {
					return false;
				}

				if( scrollVal <= 0 && isRevealed && !$('body').hasClass('noscroll') ) {
					toggle(0);
				}
				else if( scrollVal > 0 && !isRevealed ){
					toggle(1);
				}
			}

			function toggle( reveal ) {
				isAnimating = true;

				if( reveal ) {
					classie.add( container, 'modify' );
					$('.banner-bottom').fadeOut('slow');
					$('.banner-mod > .carousel > .carousel-control').fadeOut('slow');
					$('.carousel-control').fadeOut('slow');
					$('.banner-mod > .carousel > .caption-more').fadeOut('slow');
				}
				else {
					noscroll = true;
					disable_scroll();
					classie.remove( container, 'modify' );
					classie.remove( container, 'no-fixed' );
					$('.banner-bottom').fadeIn('slow');
					//$('.carousel-control').fadeIn('slow');
				}

				// simulating the end of the transition:
				setTimeout( function() {
					isRevealed = !isRevealed;
					isAnimating = false;
					if( reveal ) {
						noscroll = false;
						enable_scroll();
						classie.add( container, 'no-fixed' );
					} else {
						$('.banner-mod > .carousel > .carousel-control').fadeIn('slow');
						$('.carousel-control').fadeIn('slow');
						$('.banner-mod > .carousel > .caption-more').fadeIn('slow');
					}
				}, 1200 );
			}

			// refreshing the page...
			var pageScroll = scrollY();
			noscroll = pageScroll === 0;

			disable_scroll();
			if( pageScroll ) {
				isRevealed = true;
				classie.add( container, 'notrans' );
				classie.add( container, 'modify' );
				$('.banner-bottom').fadeOut('slow');
			}

			window.addEventListener( 'scroll', scrollPage );

			$('a.caption-more').click(function(e){
				toggle( 'reveal' );
				e.preventDefault();
			});



			$(".item .item-cover").swipe({
				swipeUp:function(event, direction, distance, duration, fingerCount){
					//$('.caption-more').click();
					toggle( 'reveal' );
				}
			});
		})();
	</script>
</body>
</html>

