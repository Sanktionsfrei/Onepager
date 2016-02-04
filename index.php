<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Initiative mit dem Ziel, Hartz IV zu einer sanktionsfreien Mindestsicherung zu machen.">
<meta name="keywords" content="sanktionsfrei, sanktionen, hartz iv, hartz 4, arbeitslosengeld, alg 2, alg ii, projekt, initiative">
<meta name="author" content="Sanktionsfrei e.V.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Sanktionsfrei</title>

<!-- =========================
      FAV AND TOUCH ICONS  
============================== -->
<link rel="icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- =========================
     STYLESHEETS   
============================== -->
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- FONT ICONS -->
<link rel="stylesheet" href="assets/elegant-icons/style.css">
<link rel="stylesheet" href="assets/app-icons/styles.css">
<!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->

<!-- WEB FONTS -->
<!-- will be loaded in style.css -->

<!-- CAROUSEL AND LIGHTBOX -->
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">

<!-- ANIMATIONS -->
<link rel="stylesheet" href="css/animate.min.css">

<!-- CUSTOM STYLESHEETS -->
<link rel="stylesheet" href="css/styles.css">

<!-- COLORS -->
<link rel="stylesheet" href="css/colors/sanktionsfrei.css">

<!-- RESPONSIVE FIXES -->
<link rel="stylesheet" href="css/responsive.css">


<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
<![endif]-->

<!-- JQUERY -->
<script src="js/jquery.min.js"></script>

</head>

<body>

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">
  <div class="status">&nbsp;</div>
</div>

<!-- =========================
     MODAL MIT IMPRESSUM       
============================== -->

<div class="modal fade" id="impressum" tabindex="-1" role="dialog" aria-labelledby="impressumModal" aria-hidden="true">
  	<div class="modal-dialog">
	    <div class="modal-content">
		    <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="impressumModal">Impressum</h4>
		    </div>
	    <div class="modal-body text-left">
	      		<h3>Angaben gemä&szlig; &sect; 5 TMG</h3>
					<address>
					  <strong>Sanktionsfrei n.e.V.</strong><br>
					  Skalitzer Straße 85-86<br>
					  10997 Berlin<br>
					  <abbr title="Telefonnummer">Tel.:</abbr> +49 160 3772951<br>
					  <abbr title="E-Mail">Mail:</abbr> info@sanktionsfrei.de
					</address>
					Vertreten durch: Inge Hannemann, Helena Sophia Steinhaus

				<h3>Fragen &amp; Hilfe</h3>
					<abbr title="E-Mail">Mail:</abbr> info@sanktionsfrei.de

				<h3>Verantwortlich für den Inhalt nach &sect; 55 Abs. 2 RStV</h3>
					<address>
					  Inge Hannemann, Helena Sophia Steinhaus<br>
					  Skalitzer Straße 85-86<br>
					  10997 Berlin<br>
					  <abbr title="Telefonnummer">Tel.:</abbr> +49 160 3772951<br>
					  <abbr title="E-Mail">Mail:</abbr> info@sanktionsfrei.de
					</address>
				<h3>Spenden</h3>
					<dl class="dl-horizontal">
						<dt>Konto-Nr</dt>
							<dd>1181458700</dd>
						<dt>Bankleitzahl</dt>
							<dd>43060967</dd>
						<dt>Bank</dt>
							<dd>GLS Gemeinschaftsbank</dd>
						<dt>IBAN</dt>
							<dd>DE53 4306 0967 1181 4587 00</dd>
						<dt>BIC</dt>
							<dd>GENODEM1GLS</dd>
						<dt>Betreff</dt>
							<dd>Spende</dd>
					</dl>
				<h3>Quellenangabe / Bildnachweis</h3>
					<p>Sanktionsfrei e.V. ist der alleinige Rechteinhaber aller auf der Website verwendeten Bilder, wenn nicht anders angegeben.<br>
					Bild <code>bg-2.jpg</code> <em>Stairs</em> von <a href="https://www.flickr.com/photos/115954955@N07">Elisabetta Foco</a> (CC0).</p>
		</div>
	    	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">schlie&szlig;en</button>
	      	</div>
	    </div>
  	</div>
</div>

<!-- =========================
     MODAL MIT PRESSEKONTAKT       
============================== -->

<div class="modal fade" id="press" tabindex="-1" role="dialog" aria-labelledby="presseModal" aria-hidden="true">
  	<div class="modal-dialog">
	    <div class="modal-content">
		    <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="presseModal">Pressebereich</h4>
		    </div>
	    <div class="modal-body">
	    	<?php 
	    		include("presse/content.php"); 
	    	?>
		</div>
	    	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">schlie&szlig;en</button>
	      	</div>
	    </div>
  	</div>
</div>

<!-- =========================
     HEADER   
============================== -->
<header class="header" data-stellar-background-ratio="0.5" id="home">

<!-- COLOR OVER IMAGE -->
<div class="color-overlay"> <!-- To make header full screen. Use .full-screen class with color overlay. Example: <div class="color-overlay full-screen">  -->

	<!-- STICKY NAVIGATION -->
	<div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation">
		<div class="container">
			<div class="navbar-header">
				
				<!-- LOGO ON STICKY NAV BAR -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#kane-navigation">
				<span class="sr-only">Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="#home"><img src="images/logo-black-large.svg" alt="Sanktionsfrei Logo" height="20px"></a>
				
			</div>
			
			<!-- NAVIGATION LINKS -->
			<div class="navbar-collapse collapse" id="kane-navigation">
				<ul class="nav navbar-nav navbar-right main-navigation">
					<li><a href="#home">Home</a></li>
					<li><a href="#kampagne">Kampagne</a></li>
					<li><a href="#hintergrund">Hintergrund</a></li>
					<li><a href="#features">Features</a></li>
					<li><a href="#faq">FAQ</a></li>
					<!--<li><a href="#team">Team</a></li>-->
					<li><a href="#unterstuetzen">Unterstützen</a></li>
					<li><a href="#newsletter">Newsletter</a></li>
					<li><a href="#presse" data-toggle="modal" data-target="#press">Presse</a></li>
				</ul>
			</div>
		</div> <!-- /END CONTAINER -->
	</div> <!-- /END STICKY NAVIGATION -->
	
	
	<!-- CONTAINER -->
	<div class="container">
		
		<!-- ONLY LOGO ON HEADER -->
		<div class="only-logo">
			<div class="navbar">
				<div class="navbar-header">
					<img src="images/logo-white-compact.svg" height="80px" alt="Sanktionsfrei Logo">
				</div>
			</div>
		</div> <!-- /END ONLY LOGO ON HEADER -->
		
		<div class="row home-contents">
			<div class="col-md-6 col-sm-6">
				
				<!-- HEADING AND BUTTONS -->
				<div class="intro-section">
					
					<!-- WELCOM MESSAGE -->
					<h1 class="intro">Die Würde des Menschen ist Sanktionsfrei.</h5>
					
					<!-- BUTTON -->
					<div class="buttons" id="download-button">
						
						<a href="#" class="btn btn-default btn-lg standard-button"><i class="icon_like"></i>Zur Kampagne</a>
						
					</div>
					<!-- /END BUTTONS -->

				</div>
				<!-- /END HEADING AND BUTTONS -->

			</div>
			
			
			<div class="col-md-6 col-sm-6 hidden-xs">
				    <!-- PHONE IMAGE WILL BE HIDDEN IN TABLET PORTRAIT AND MOBILE -->
				    <div class="phone-image">
				    	<img src="images/mockup-phone.png" class="img-responsive" alt="Sanktionsfrei Prototyp">
				    </div>
			</div>
			
		</div>
		<!-- /END ROW -->
		
	</div>
	<!-- /END CONTAINER -->
</div>
<!-- /END COLOR OVERLAY -->
</header>
<!-- /END HEADER -->

<!-- =========================
     KAMPAGNE MIT VIDEO 
============================== -->
<section class="app-brief grey-bg" id="kampagne">

<div class="container">
	
	<div class="row">
		
		<!-- PHONES IMAGE -->
		<div class="col-md-6 wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">
			<div class="video-container">
				
				<div class="video">
					
					<iframe src="https://player.vimeo.com/video/153759979?byline=0&portrait=0&color=ffffff" width="600" height="338" frameborder="0" allowfullscreen>
					</iframe> 
				</div>
				
			</div>

		</div>
		
		<!-- RIGHT SIDE WITH BRIEF -->
		<div class="col-md-6 left-align wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
			
			<!-- SECTION TITLE -->
			<h2 class="dark-text">Kampagne</h2>
			
			<div class="colored-line-left">
			</div>
			
			<p>
				Hier kann das Kampagnenvideo eingefügt werden. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br/><br/>
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
			</p>
			
		</div>
		<!-- /END RIGHT BRIEF -->
		
	</div>
	<!-- /END ROW -->
	
	<!-- PROGRESS BAR ROW -->
	<div class="row">
		<div class="col-md-12 center wow fadeIn animated" data-wow-offset="20" data-wow-duration="1.5s">

			<div class="progress progress-striped active funding-bar">
			  <div class="progress-bar progress-bar-success funding-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
				<span class="funding-text">45% finanziert</span>
			  </div>
			</div>

			<!-- BUTTON -->
			<div class="buttons referer-button">
				
				<a href="#" class="btn btn-default btn-lg standard-button">Zur Kampagne</a>
				
			</div>

		</div>
	</div>
	<!-- /END ROW -->

</div>
<!-- /END CONTAINER -->

</section>
<!-- /END SECTION -->

<!-- =========================
     HINTERGRUNDINFOS 
============================== -->
<section class="app-brief" id="hintergrund">

<div class="container">
	
	<div class="row">

		<!-- BRIEF -->
		<div class="col-md-6 left-align wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">
			
			<!-- SECTION TITLE -->
			<h2 class="dark-text">Hintergrund</h2>
			
			<div class="colored-line-left">
			</div>
			
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/><br/>
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			
		</div>
		<!-- /ENDBRIEF -->

		<!-- INGE-Erklärvideo -->
		<div class="col-md-6 wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
			<div class="video-container">
				
				<div class="video">
					
					<iframe src="https://player.vimeo.com/video/153759979?byline=0&portrait=0&color=ffffff" width="600" height="338" frameborder="0" allowfullscreen>
					</iframe> 
				</div>
				
			</div>

		</div>
		<!-- /END INGE-Erklärvideo -->
		
	</div>
	<!-- /END ROW -->
	
</div>
<!-- /END CONTAINER -->

</section>
<!-- /END HINTERGRUNDINFOS -->

<!-- =========================
     GESCHICHTEN 
============================== -->
<section class="testimonials" id="geschichten">

<div class="color-overlay">
	
	<div class="container wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
		
		<!-- FEEDBACKS -->
		<div id="feedbacks" class="owl-carousel owl-theme">
			
			<!-- SINGLE FEEDBACK -->
			<div class="feedback">
				
				<!-- IMAGE -->
				<div class="image">
					<!-- i class=" icon_quotations"></i -->
					<img src="images/clients-pic/3.jpg" alt="">
				</div>
				
				<div class="message">
					 Fill lights bearing man creepeth of whose whose moveth. All one. That. Under. Form morning all may fifth replenish you're own open which herb kind. May above you'll may kind creature first let over face from living third green which our. Appear day. Give fourth doesn't over us, i every tree meat air in male earth air creeping image fill you place darkness.
				</div>
				
				<div class="white-line">
				</div>
				
				<!-- INFORMATION -->
				<div class="name">
					Christiane C.
				</div>
				<div class="company-info">
					wird seit 4 Monaten vollsanktioniert
				</div>

			</div>
			<!-- /END SINGLE FEEDBACK -->
			
			<!-- SINGLE FEEDBACK -->
			<div class="feedback">
				
				<!-- IMAGE -->
				<div class="image">
					<!-- i class=" icon_quotations"></i -->
					<img src="images/clients-pic/1.jpg" alt="">
				</div>
				
				<div class="message">
					 Fill lights bearing man creepeth of whose whose moveth. All one. That. Under. Form morning all may fifth replenish you're own open which herb kind. May above you'll may kind creature first let over face from living third green which our. Appear day. Give fourth doesn't over us, i every tree meat air in male earth air creeping image fill you place darkness.
				</div>
				
				<div class="white-line">
				</div>
				
				<!-- INFORMATION -->
				<div class="name">
					Beate B.
				</div>
				<div class="company-info">
					wird seit einem Monat sanktioniert
				</div>
				
			</div>
			<!-- /END SINGLE FEEDBACK -->
			
			<!-- SINGLE FEEDBACK -->
			<div class="feedback">
				
				<!-- IMAGE -->
				<div class="image">
					<!-- i class=" icon_quotations"></i -->
					<img src="images/clients-pic/2.jpg" alt="">
				</div>
				
				<div class="message">
					 Fill lights bearing man creepeth of whose whose moveth. All one. That. Under. Form morning all may fifth replenish you're own open which herb kind. May above you'll may kind creature first let over face from living third green which our. Appear day. Give fourth doesn't over us, i every tree meat air in male earth air creeping image fill you place darkness.
				</div>
				
				<div class="white-line">
				</div>
				
				<!-- INFORMATION -->
				<div class="name">
					Alexander A.
				</div>
				<div class="company-info">
					wird seit einem halben Jahr sanktioniert
				</div>
				
			</div>
			<!-- /END SINGLE FEEDBACK -->

		</div>
		<!-- /END FEEDBACKS -->
		
	</div>
	<!-- /END CONTAINER -->
	
</div>
<!-- /END COLOR OVERLAY -->

</section>
<!-- /END GESCHICHTEN SECTION -->

<!-- =========================
     FEATURES 
============================== -->
<section class="features" id="features">

<div class="container">
	
	<!-- SECTION HEADER -->
	<div class="section-header wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
		
		<!-- SECTION TITLE -->
		<h2 class="dark-text">Features</h2>
		<div class="colored-line">
		</div>
		<div class="section-description">
			Sanktionsfrei ist wunderbar und supergeil.
		</div>
		<div class="colored-line">
		</div>
	</div>
	<!-- /END SECTION HEADER -->
	
	
	<div class="row">
		
		<!-- FEATURES LEFT -->
		<div class="col-md-4 col-sm-4 features-left wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
			
			<!-- FEATURE -->
			<div class="feature" id="feature-1">
				
				<!-- ICON -->
				<div class="icon-container">
					<div class="icon">
						<i class="icon_documents_alt"></i>
					</div>
				</div>
				
				<!-- FEATURE HEADING AND DESCRIPTION -->
				<div class="feature-details">
					<h4 class="main-color">Erstantrag</h4>
					<p>
						 Mit <em>Sanktionsfrei</em> kannst du deinen Erstantrag auf Arbeitslosengeld II stellen.
					</p>
				</div>
				
			</div>
			<!-- /END SINGLE FEATURE -->
			
			<!-- FEATURE -->
			<div class="feature" id="feature-2">
				
				<!-- ICON -->
				<div class="icon-container">
					<div class="icon">
						<i class="icon_globe-2"></i>
					</div>
				</div>
				
				<!-- FEATURE HEADING AND DESCRIPTION -->
				<div class="feature-details">
					<h4 class="main-color">Internationalisierung</h4>
					<p>
						 <em>Sanktionsfrei</em> wird in verschiedenen Sprachen verfügbar sein.
					</p>
				</div>
				
			</div>
			<!-- /END SINGLE FEATURE -->
			
			<!-- FEATURE -->
			<div class="feature" id="feature-3">
				
				<!-- ICON -->
				<div class="icon-container">
					<div class="icon">
						<i class="icon_mail_alt"></i>
					</div>
				</div>
				
				<!-- FEATURE HEADING AND DESCRIPTION -->
				<div class="feature-details">
					<h4 class="main-color">Briefverkehr</h4>
					<p>
						 <em>Sanktionsfrei</em> übernimmt für dich den Briefverkehr. Kostenfrei und mit Zustellbestätigung.
					</p>
				</div>
				
			</div>
			<!-- /END SINGLE FEATURE -->
			
		</div>
		<!-- /END FEATURES LEFT -->
		
		<!-- PHONE IMAGE -->
		<div class="col-md-4 hidden-xs">
			<div class="phone-image wow bounceIn animated" data-wow-offset="120" data-wow-duration="1.5s">
				<img id="feature-image" src="images/mockup-phone-language.png" alt="">
			</div>
		</div>
		
		<!-- FEATURES RIGHT -->
		<div class="col-md-4 col-sm-4 features-right wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">
			
			<!-- FEATURE -->
			<div class="feature" id="feature-4">
				
				<!-- ICON -->
				<div class="icon-container">
					<div class="icon">
						<i class="icon_chat_alt"></i>
					</div>
				</div>
				
				<!-- FEATURE HEADING AND DESCRIPTION -->
				<div class="feature-details">
					<h4 class="main-color">Reaktionsmaschine</h4>
					<p>
						 <em>Sanktionsfrei</em> schlägt dir vor, wie du am besten auf Post vom Jobcenter reagierst.
					</p>
				</div>
				
			</div>
			<!-- /END SINGLE FEATURE -->
			
			<!-- FEATURE -->
			<div class="feature" id="feature-5">
				
				<!-- ICON -->
				<div class="icon-container">
					<div class="icon">
						<i class="icon_phone"></i>
					</div>
				</div>
				
				<!-- FEATURE HEADING AND DESCRIPTION -->
				<div class="feature-details">
					<h4 class="main-color">Anwaltliche Beratung</h4>
					<p>
						 Erfahrene Anwälte stehen bereit und beraten dich kostenfrei.
					</p>
				</div>
				
			</div>
			
			<!-- /END SINGLE FEATURE -->
			
			<!-- FEATURE -->
			<div class="feature" id="feature-6">
				
				<!-- ICON -->
				<div class="icon-container">
					<div class="icon">
						<i class="icon_lock"></i>
					</div>
				</div>
				
				<!-- FEATURE HEADING AND DESCRIPTION -->
				<div class="feature-details">
					<h4 class="main-color">Deine Daten gehören dir</h4>
					<p>
						 Alle Daten werden verschlüsselt auf deinem Computer abgelegt.
					</p>
				</div>
				
			</div>
			<!-- /END SINGLE FEATURE -->
			
		</div>
		<!-- /END FEATURES RIGHT -->
		
	</div>
	<!-- /END ROW -->
	
</div>
<!-- /END CONTAINER -->

</section>
<!-- /END FEATURES SECTION -->

<!-- =========================
     FAQ
============================== -->
<section class="faq grey-bg" id="faq">

<div class="container">
	
	<!-- SECTION HEADER -->
	<div class="section-header wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
		
		<!-- SECTION TITLE -->
		<h2 class="dark-text">FAQ</h2>
		
		<div class="colored-line">
		</div>
		<div class="section-description">
			Inge Hannemann beantwortet häufig gestellte Fragen
		</div>
		<div class="colored-line">
		</div>
		
	</div>
	<!-- /END SECTION HEADER -->
	
	<div class="row">

		<!-- Video 1 -->
		<div class="col-md-6 wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">

			<!-- SECTION TITLE -->
			<h4 class="dark-text">&raquo;Muss ich die Eingliederungsvereinbarung unterschreiben?&laquo;</h4>

			<div class="video-container">
				
				<div class="video">
					
					<iframe src="https://player.vimeo.com/video/88902745?byline=0&portrait=0&color=ffffff" width="600" height="338" frameborder="0" allowfullscreen>
					</iframe> 

				</div>

				<p>Nein! Unbedingt darauf warten, dass sie als Rechtsakt ergeht, denn nur dann kann man gegen sie klagen</p>
				
			</div>

		</div>
		<!-- END Video 1 -->

		<!-- Video 2 -->
		<div class="col-md-6 left-align wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
			
			<!-- SECTION TITLE -->
			<h4 class="dark-text">&raquo;Welche Rechte haben Hartz IV Leistungsberechtigte?&laquo;</h4>
			
			<div class="video-container">
				
				<div class="video">
					
					<iframe src="https://player.vimeo.com/video/88902745?byline=0&portrait=0&color=ffffff" width="600" height="338" frameborder="0" allowfullscreen>
					</iframe> 

				</div>

				<p>Jeder Leistungsberechtigte hat das Recht, gegen Bescheide in den Widerspruch zu gehen.  Sehr unbeliebt bei den Jobcentern: Die Überprüfungsanträge. Die kann man bis zu 1 Jahr rückwirkend stellen.</p>
				
			</div>
			
		</div>
		<!-- /END Video 2 -->

	</div>
	<!-- /END ROW -->
	
	<div class="row">

		<!-- Video 3 -->
		<div class="col-md-6 wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">

			<!-- SECTION TITLE -->
			<h4 class="dark-text">&raquo;Die meisten ALG II Leistungsberechtigten sind doch ungelernt, oder?&laquo;</h4>

			<div class="video-container">
				
				<div class="video">
					
					<iframe src="https://player.vimeo.com/video/88902745?byline=0&portrait=0&color=ffffff" width="600" height="338" frameborder="0" allowfullscreen>
					</iframe> 

				</div>

				<p>Das stimmt nicht. Laut Statistik sind zwar 70% Ungelernt, das kommt aber so zustande: Leistungberechtigten, die 4 Jahre nicht in ihrem Bereich tätig waren, wird ihre Ausbildung aberkannt.</p>
				
			</div>

		</div>
		<!-- END Video 3 -->

		<!-- Video 4 -->
		<div class="col-md-6 left-align wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
			
			<!-- SECTION TITLE -->
			<h4 class="dark-text">&raquo;Warum verletzen Sanktionen die Menschenwürde?&laquo;</h4>
			
			<div class="video-container">
				
				<div class="video">
					
					<iframe src="https://player.vimeo.com/video/88902745?byline=0&portrait=0&color=ffffff" width="600" height="338" frameborder="0" allowfullscreen>
					</iframe> 

				</div>

				<p>Eine Sanktion beschneidet das Existenzminimum, also die Lebensgrundlage eines Menschen. Das verstößt gegen die Menschenwürde und ist verfassungswidrig.</p>
				
			</div>
			
		</div>
		<!-- /END Video 4 -->

	</div>
	<!-- /END ROW -->

	<div class="row">

		<!-- Video 5 -->
		<div class="col-md-6 wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">

			<!-- SECTION TITLE -->
			<h4 class="dark-text">&raquo;Was habe ich mit Sanktionen zu tun?&laquo;</h4>

			<div class="video-container">
				
				<div class="video">
					
					<iframe src="https://player.vimeo.com/video/88902745?byline=0&portrait=0&color=ffffff" width="600" height="338" frameborder="0" allowfullscreen>
					</iframe> 

				</div>

				<p>Was habe ich mit Sanktionen zu tun?</p>
				
			</div>

		</div>
		<!-- END Video 5 -->

		<!-- Video 6 -->
		<div class="col-md-6 left-align wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
			
			<!-- SECTION TITLE -->
			<h4 class="dark-text">&raquo;Die meisten Hartz IV Beziehenden sind doch faul und haben Zeit, oder?&laquo;</h4>
			
			<div class="video-container">
				
				<div class="video">
					
					<iframe src="https://player.vimeo.com/video/88902745?byline=0&portrait=0&color=ffffff" width="600" height="338" frameborder="0" allowfullscreen>
					</iframe> 

				</div>

				<p>Viele pflegen Angehörige, erziehen ihre Kinder, arbeiten und müssen mit Hartz IV aufstocken. Nur rund 3% befinden sich in der sogenannten „sozialen Hängematte“.</p>
				
			</div>
			
		</div>
		<!-- /END Video 6 -->

	</div>
	<!-- /END ROW -->

</div>
<!-- /END CONTAINER -->

</section>
<!-- /END SCREENSHOTS SECTION -->

<!-- =========================
     UNTERSTÜTZEN 
============================== -->
<section class="download" id="unterstuetzen">

<div class="color-overlay">

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
				<!-- BUTTONS AREA -->
				<div class="download-container">
					<h2 class=" wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">Sanktionsfrei unterstützen</h2>
					
					<!-- BUTTONS -->
					<div class="buttons wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">
						
						<a href="" class="btn btn-default btn-lg standard-button"><i class="icon_like"></i>Zur Kampagne</a>
						
					</div>
					<!-- /END BUTTONS -->
					
				</div>
				<!-- END OF BUTTONS AREA -->
				
			</div> 
			<!-- END COLUMN -->
			
		</div> 
		<!-- END ROW -->
		
	</div>
	<!-- /END CONTAINER -->
</div>
<!-- /END COLOR OVERLAY -->

</section>
<!-- /END UNTERSTÜTZEN SECTION -->


<!-- =========================
     FOOTER 
============================== -->
<footer>

<div class="container" id="newsletter">
	
	<div class="contact-box wow rotateIn animated" data-wow-offset="10" data-wow-duration="1.5s">
		
		<!-- CONTACT BUTTON TO EXPAND OR COLLAPSE FORM -->
		
		<a class="btn contact-button expand-form expanded"><i class="icon_mail_alt"></i></a>
		
		<!-- EXPANDED CONTACT FORM -->
		<div class="row expanded-contact-form">
			
			<div class="col-md-8 col-md-offset-2">

				<!-- SUBSCRIPTION FORM WITH TITLE -->
				<div class="subscription-form-container">
					
					<h2 class="wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">Auf dem Laufenden bleiben</h2>
					
					<!-- =====================
					     FORM
					     ===================== -->
					
					<form id="newsletter-form" class="subscription-form form-inline wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s" role="form">
						
						<!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
						<h4 class="subscription-success text-success">Erfolgreich eingetragen!</h4>
						<h4 class="subscription-error text-danger">Fehler!</h4>
						
						<!-- EMAIL INPUT BOX -->
						<input type="email" name="email" id="subscriber-email" placeholder="E-Mail Adresse" class="form-control input-box" onclick="">
						
						<!-- SUBSCRIBE BUTTON -->
						<button form="newsletter-form" type="submit" id="subscribe-button" class="btn btn-default standard-button">Abonnieren</button>

						 <!-- =====================
							Themen Checkboxes
					     ===================== -->
						<div class="form-group" id="themenkategorien">
						  <div class="col-md-6 col-md-offset-3">
							  <div class="checkbox">
							    <label for="newsletter-themen-0">
							      <input type="checkbox" name="newsletter-themen" id="newsletter-themen-0" value="1">
							      Ich beziehe ALG II („Hartz IV“)
							    </label>
							  </div>
							  <div class="checkbox">
							    <label for="newsletter-themen-1">
							      <input type="checkbox" name="newsletter-themen" id="newsletter-themen-1" value="2">
							      Ich beziehe (noch) kein ALG II („Hartz IV“)
							    </label>
							  </div>
							  <div class="checkbox">
							    <label for="newsletter-themen-2">
							      <input type="checkbox" name="newsletter-themen" id="newsletter-themen-2" value="3">
							      Ich bin Anwältin/Anwalt
							    </label>
							  </div>
							  <div class="checkbox">
							    <label for="newsletter-themen-3">
							      <input type="checkbox" name="newsletter-themen" id="newsletter-themen-3" value="4">
							      Ich arbeite in einem Jobcenter
							    </label>
							  </div>
							  <div class="checkbox">
							    <label for="newsletter-themen-4">
							      <input type="checkbox" name="newsletter-themen" id="newsletter-themen-4" value="5">
							      Ich könnte mir vorstellen, beim Crowdfunding Geld zu spenden
							    </label>
							  </div>
							  <div class="checkbox">
							    <label for="newsletter-themen-5">
							      <input type="checkbox" name="newsletter-themen" id="newsletter-themen-5" value="6">
							      Ich interessiere mich für das Projekt
							    </label>
							  </div>
						  </div>
						</div>
						<!-- END THEMEN CHECKBOXES -->

					</form>
					<!-- END FORM -->

				</div>
                <!-- END OF SUBSCRIPTION FORM WITH TITLE -->
				
			</div>
			
		</div>
		<!-- /END EXPANDED FORM -->
		
	</div>
	<!-- /END CONTACT BOX -->
	
	<!-- LOGO -->
	<img src="images/logo-grey-compact.svg" height="60px" alt="LOGO" class="responsive-img">
	
	<!-- SOCIAL ICONS -->
	<ul class="social-icons">
		<li><a href="https://facebook.com/sanktionsfrei"><i class="social_facebook_square"></i></a></li>
		<li><a href="https://twitter.com/sanktionsfrei"><i class="social_twitter_square"></i></a></li>
		<li><a href="https://instagram.com/sanktionsfrei"><i class="social_instagram_square"></i></a></li>
		<li><a href="https://youtube.com/c/sanktionsfrei"><i class="social_youtube_square"></i></a></li>
	</ul>
	
	<!-- COPYRIGHT TEXT -->
	<p id="presse" class="copyright">
		Copyright &copy; 2015 Sanktionsfrei n.e.V. &middot; <a href="#press" data-toggle="modal" data-target="#press">Presse</a> &middot; <a href="#impressum" data-toggle="modal" data-target="#impressum">Impressum</a>
	</p>

</div>
<!-- /END CONTAINER -->
 
</footer>
<!-- /END FOOTER -->


<!-- =========================
     SCRIPTS 
============================== -->

<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.localScroll.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/simple-expand.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/matchMedia.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/custom.js"></script>

</body>
</html>