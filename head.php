<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script src="https://www.googletagmanager.com/gtag/js?id=UA-73735754-1"></script>
  
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-73735754-1');
  </script>

  <title>Watercress Studios</title>
  <!--    This is the icon stuff -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="img/logo/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="img/logo/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="img/logo/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/logo/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="img/logo/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="img/logo/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="img/logo/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="img/logo/apple-touch-icon-180x180.png" />	
  <!-- Before doing any css changes, link back to styles.css not min please.  -->
	<link rel="stylesheet" type="text/css" href="min.styles.css" />
  <!-- Note to self or future developer, I did not use babel or webpack to minify the production files, 
I kinda need to learn how to at some point. -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=500, initial-scale=1">
  <!-- Keep an eye out on this line of code, in case scripts act funny. -->
  <!-- <meta http-equiv="Content-Security-Policy" content="
		default-src 'self';
		script-src 'self' 'unsafe-inline' https://www.google-analytics.com/ https://code.jquery.com/jquery-3.3.1.min.js https://www.googletagmanager.com/gtag/js?id=UA-73735754-1;
		style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://use.fontawesome.com;
		font-src 'self' https://fonts.gstatic.com https://use.fontawesome.com;
    img-src 'self' https://www.google-analytics.com/;
  "> 
Fuck the CSP until we learn how to do it properly when the form comes around.
-->

  <meta name="description" content="We are the largest freeware Visual Novel studio in the US!"/>
  <meta name="keywords" content="Visual Novels, EVN, OELVN,"/>
  <meta name="author" content="Happiness+"/>
  <!-- Open graph meta tags -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Watercress"/>
  <meta property="og:description" content="We are the largest freeware Visual Novel studio in the US!"/>
  <meta property="og:url" content="https://watercressstudios.com/"/>
  <meta property="og:image" content="https://watercressstudios.com/img/logo/logo.png" />
  <meta property="og:site_name" content="Watercress" />
<!-- Twitter card stuff -->
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:title" content="Watercress Studios"/>
  <meta name="twitter:url" content="https://watercressstudios.com"/>
  <meta name="twitter:description" content="The Largest Visual Novel Studio in USA"/>
  <meta name="twitter:site" content="@TeamWatercress"/>
  <meta name="twitter:image" content="https://watercressstudios.com/img/logo/logo.png"/>
  <meta name="twitter:creator" content="@Happinessplus__"/>

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Lato&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  <script>
		$(document).ready(function() {
			$(".open-nav").click(function() {
				$(".navigation").toggleClass("show");
				$(".open-nav").toggleClass("active-green");
			});
			$(".open-project").click(function() {
				$(".project-subblock").toggleClass("open");
				$(".project-hover").toggleClass("open");
			});
		});
  </script>
</head>