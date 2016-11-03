<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico?v=2">
		<link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico?v=2">
		<link rel="icon" type="image/png" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-192.png">
		<link rel="icon" type="image/png" sizes="160x160" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-160.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96.png">
		<link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-64.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-180.png">
		<meta name="msapplication-TileColor" content="#FFFFFF">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-144.png">
		<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/icons/browserconfig.xml">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

		<script type="text/javascript">
		  var switchTo5x=true;
		</script>

		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">
		  stLight.options({publisher: "3c73e49e-8bdc-493e-ae56-2dc28c368954", doNotHash: false, doNotCopy: false, hashAddressBar: false});
		</script>

		<div id="fb-root"></div>

		<script>
		  (function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6";
			fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));
		</script>

	</head>
	<body <?php body_class('body-shape'); ?>>

		<body class="body-shape">

			<div class="rodape w-nav" data-animation="default" data-collapse="medium" data-contain="1" data-duration="400">
			  <div class="w-container">
				  <a href="<?php echo get_home_url(); ?>" class="w-nav-brand"><img width="132" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logo"></a>

				<nav class="div-menu w-nav-menu" role="navigation">
					<a class="categoria w-nav-link" href="<?php echo get_home_url(); ?>">Lorem Ipsum</a>
					<a class="categoria w-nav-link" href="<?php echo get_home_url();?>">Dolor site amet</a>
					<a class="categoria w-nav-link" href="<?php echo get_home_url();?>">Consectetur</a>
					<a class="categoria ultimo w-nav-link" href="<?php echo get_home_url();?>">Materiais Educativos</a>
				</nav>

				<div class="w-nav-button">
				  <div class="w-icon-nav-menu"></div>
				</div>

			  </div>
			</div>
