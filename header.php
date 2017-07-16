<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>
            <?php 
            if(is_front_page()) { 
                bloginfo('name');
            } 
            else {
                 wp_title();
            } 
            ?>
        </title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/dist/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/dist/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
        
        <div id="container">
            <div class="c-ribbon" aria-hidden="true" role="decoration"></div>
            <header class="c-masthead" id="header" role="banner">
                <div class="o-container">
                    <div class="c-masthead__main">
                        <h1 class="c-masthead__main__logo">
                            <a href="<?php echo home_url(); ?>" rel="home" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
                                <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                                <img class="c-masthead__main__logo__image" src="<?php echo get_template_directory_uri(); ?>/dist/img/novuslogo.svg" alt="Novus Properties">
                                <span class="u-hiddenVisually">Novus Properties</span>
                            </a>
                            <span class="u-hiddenVisually"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
                        </h1>
                        <div class="c-masthead__main__business c-business" itemscope="" itemtype="http://schema.org/LocalBusiness">
                            <div class="c-business__contact">
                                <label class="c-business__label">Get in touch</label>
                                <div>
                                    <a href="mailto:info@novus-properties.com" itemprop="email">info@novus-properties.com</a>
                                </div>
                                <div>
                                    <a href="tel:571-384-5474" class="c-business__phone" itemprop="telephone"  content="571-384-5474">
                                        571-384-5474
                                    </a>
                                </div>
                            </div>

                            <div class="c-business__hours">
                                <label class="c-business__label">Office Hours</label>
                                <div itemprop="openingHours" content="Mo,Tu,We,Th, Fr 07:00-10:00">
                                    <div>Monday to Friday</div>
                                    <div>7am to 10pm</div>
                                </div>
                            </div>
                        </div>                         
                    </div>
                 </div>
                <nav class="c-masthead__nav js-menu" id="menu" role="navigation">
                    <div class="o-container">
                        <div class="o-container__inner">
                            <button class="c-masthead__nav__toggle showMenu js-menu-toggle">
                                <span class="showMenu__wrap"><span class="showMenu__icon"></span></span>
                                <span class="showMenu__text">Menu</span>
                            </button>
                            <?php html5blank_nav(); ?>
                        </div>
                    </div>
                </nav>
            </header>
