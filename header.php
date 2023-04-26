<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-white bg-white' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <a href="#main" class="sr-only sr-only-focusable"><?php esc_html_e( 'Skip to main content', 'weable' ); ?></a>

    <div id="wrapper">
       
        <header id="header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-3">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="logo px-5 d-block">
                        <?php
                            $header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

                            if ( ! empty( $header_logo ) ) :
                        ?>
                            <img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="img-fluid">
                            <?php
                            else :
                                echo esc_attr( get_bloginfo( 'name', 'display' ) );
                            endif;
                        ?>
                    </a>
                </div>
                <div class="col-12 d-lg-none d-block">
                    <div class="mobile-right d-flex d-lg-none justify-content-center align-items-center">
				
                        <div class="hamburger-menu d-block d-lg-none mr-2" id="hamburger-menu">
                            <div class="menu-bar1"></div>
                            <div class="menu-bar2"></div>
                            <div class="menu-bar3"></div>
                        </div>
                        Menu
                    </div>
                </div>
                <div class="col-md-4">
                    <?php
                        // Loading WordPress Custom Menu (theme_location).
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'container'      => '',
                                'menu_class'     => 'navbar-nav nav flex-row w-100 justify-content-start ',
                                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'         => new WP_Bootstrap_Navwalker(),
                            )
                        );

                    ?>
                </div>
                <div class="col-md-4 pr-3">
                    <?php echo get_search_form() ?>
                </div>
            </div>
            <div class="m-menu d-lg-none d-block">
                <div class="btn">
                    <button>
                        <i class="bi bi-x"></i>
                    </button>
                </div>
                <?php 
				wp_nav_menu(
					array(
						'theme_location' => 'mobile-menu',
						'container'      => '',
						'menu_class'     => 'navbar-nav mr-auto',
						'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
						'walker'         => new WP_Bootstrap_Navwalker(),
					)
				);
			?>
            </div>
        </div>
		<div class="overlay"></div>

    </header>
	<main id="main" class="<?= (is_page_template('page-full.php')) || (is_page_template('page-blog.php')) || (is_page_template('page-fish.php'))  || (is_page_template('page-gambling.php')) || (is_page_template('page-sport.php')) || (is_page_template('page-slots.php')) || (is_page_template('page-fightchicken.php')) || (is_page_template('page-casino.php')) || (is_page_template('page-lottery.php')) || (is_page_template('archive.php')) || (is_page_template('category.php')) ? 'w-builder' : 'container' ?>" <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 57px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
            <div class="row">
                <div class="col-12">
                    <?php
			endif;
		?>