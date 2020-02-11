<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
			// conditionizr.com
			// configure environment tests
			conditionizr.config({
					assets: '<?php echo get_template_directory_uri(); ?>',
					tests: {}
			});
		</script>
		<script src="https://kit.fontawesome.com/92ab37b888.js" crossorigin="anonymous"></script>

	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
			<nav class="navbar navbar-expand-lg">
        		<a class="navbar-brand" href="#">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/wc-site-logo.png"  alt="WebCrumbs logo written with digital crumbs falling under letters">
				</a>
        		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <!-- <span class="navbar-toggler-icon"></span> -->
		  <span class="navbar-toggler-icon">   
    <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav pull-right ml-auto mr-5 mt-2">
            <li class="nav-item active">
				<div class="d-flex">
					<img class="navcrumb" src="<?php echo get_template_directory_uri(); ?>/img/crumb1.png" alt="digital bread crumb">
				
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			  	</div>
            </li>
            <li class="nav-item">
				<div class="d-flex">
					<img class="navcrumb" src="<?php echo get_template_directory_uri(); ?>/img/crumb2.png" alt="digital bread crumb">
					
              <a class="nav-link" href="#">About Us</a>
			  	</div>
            </li>
            <li class="nav-item">
			<div class="d-flex">
					<img class="navcrumb" src="<?php echo get_template_directory_uri(); ?>/img/crumb3.png" alt="digital bread crumb">
              <a class="nav-link" href="#">Process</a>
			  </div>
            </li>
            <li class="nav-item">
				<div class="d-flex">
					<img class="navcrumb" src="<?php echo get_template_directory_uri(); ?>/img/crumb1.png" alt="digital bread crumb">
				<a href="#" class="nav-link">Contact</a>
			</div>
			</li>
            <li class="nav-item">
				<div class="d-flex">
					<img class="navcrumb" src="<?php echo get_template_directory_uri(); ?>/img/crumb2.png" alt="digital bread crumb">
					<a href="#" class="nav-link">Blog</a>
				</div>
			</li>
          </ul>
        </div>
	  </nav>













				<!-- logo -->
				<div class="logo">
				
				</div>
				<!-- /logo -->

			</header>
			<!-- /header -->
