<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

        <?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

                <!-- nav -->
                <nav class="nav" role="navigation">
                    <li class="nav_item">
                        <a href="/contact">
                            Contact
                        </a>
                        <div class="overlay"></div>
                    </li>
                    <li class="nav_item">
                        <a href="/category/music">
                            Music
                        </a>
                        <div class="overlay"></div>
                    </li>
                    <li class="nav_item">
                        <a href="/store">
                            Store
                        </a>
                        <div class="overlay"></div>
                    </li>
                    <li class="nav_item">
                        <a href="/cart">
                            Cart
                        </a>
                        <div class="overlay"></div>
                    </li>
                </nav>
                <!-- /nav -->

                <div class="socials">
                    <ul>
                        <li class="twitter">
                            <a target="_blank" rel="noreferrer" href="https://twitter.com/parkdtc">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="gmail">
                            <a target="_blank" rel="noreferrer" href="mailto:park@parkdtc.com">
                                <i class="far fa-envelope"></i>
                            </a>
                        </li>
                        <li class="soundcloud">
                            <a target="_blank" rel="noreferrer" href="https://soundcloud.com/parkdtc">
                                <i class="fab fa-soundcloud"></i>
                            </a>
                        </li>
                    </ul>
                </div>

					<!-- logo -->
					<div class="logo">
                        <div class="overlay"></div>
                            <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        <a href="/" class="logo-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.png" alt="Logo">
                        </a>
					</div>
					<!-- /logo -->

			</header>
			<!-- /header -->
