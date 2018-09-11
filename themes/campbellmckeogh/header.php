<!DOCTYPE html>
    <!--<html <?php language_attributes(); ?>-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <script src="https://use.fontawesome.com/ee7b489a71.js"></script>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>

    <div id="page" class="site">

        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'campbellmckeogh' ); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <?php
			if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
			endif; ?>
            </div><!-- .site-branding -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                        </nav>

                    </div>
                  </div>
                </div>
              
            </div><!-- #site-navigation -->
        </header><!-- #masthead -->



