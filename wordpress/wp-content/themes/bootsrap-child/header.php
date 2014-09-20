<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
	<div class="container">
			<div class="row">
  					<div class="col-md-8"><a href="http://localhost:8888/"><img src="http://localhost:8888/wp-content/uploads/2014/09/FWC-site-home2.png" alt="Fresh Water Chicago"></a></div>
  					<div class="col-md-2"><img src="http://localhost:8888/wp-content/uploads/2014/09/FWC-site-home-logo1.png" alt="Fresh Water Chicago Logo"></div>
				</div>	<!--end row-->
			<div class="navbar navbar-default">
			
          
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>

						<?php //if(of_get_option('search_bar', '1')) {?>
						
						<div class="navbar-center">
							<div class="row">
								<div class="col-md-4"> <img src="http://localhost:8888/wp-content/uploads/2014/09/morstars.png" alt="Chicago flag stars"></div>
						
							<div class="row">
									<div class="col-md-2"><a href="http://localhost:8888/?page_id=8832#!/~/cart"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-shopping-cart"></i></button> CHECK OUT</a></div>

							</div><!--end row-->
						</div><!--end nav bar righ-->

						<!--<p class="navbar-text"><img src="http://localhost:8888/wp-content/uploads/2014/09/morestars.png" alt="Chicago flag stars"></p>

						<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>"
							<div class="form-group">
								<a href="http://localhost:8888/?page_id=8832#!/~/cart"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-shopping-cart"></i></button>  Check Out</a>
							</div>-->
						</form>
						<?php //} ?>
					</div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->
		
		<div class="container">
