<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Personal_Portfolio_of_Campbell_Mckeogh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="nRr5TgKKNCrdqBV4b16x9dk9HC4nWT3gsUJNYxGqsjo" />
    <meta name="msvalidate.01" content="676B153ACCB762E07E94AC4B64C9230E" />
    <meta name="p:domain_verify" content="1de8428d85b2f0e1784db379102a6967"/>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113556689-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-113556689-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WJJSLC4');</script>
    <!-- End Google Tag Manager -->
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <link type="text/css" title="blue" rel="alternate stylesheet"  href="../campbell_portfolio_underscores/style_blue.css" id="theme_css1" />
    <link type="text/css" title="red" rel="alternate stylesheet" href="../campbell_portfolio_underscores/style_red.css" id="theme_css2" />
    <link type="text/css" title="yellow" rel="alternate stylesheet" href="../campbell_portfolio_underscores/style_yellow.css" id="theme_css3" />
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJJSLC4"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'campbell_mckeogh_portfolio' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="site-branding">
			<?php
			the_custom_logo();
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

            
            <nav id="site-navigation" class="main-navigation">

                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'campbell_mckeogh_portfolio' ); ?></button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>

            </nav><!-- #site-navigation -->

		</div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
