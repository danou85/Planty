<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php astra_head_top(); // Hook Astra avant le head ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); // Nécessaire pour charger les scripts/styles WordPress ?>
    <?php astra_head_bottom(); // Hook Astra après le head ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
    <?php astra_body_top(); // Hook Astra en début body ?>
    <?php wp_body_open(); // Hook WordPress 5.2+ ?>

    <!-- Lien d'accessibilité pour sauter au contenu -->
    <a class="skip-link screen-reader-text" href="#content" title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
        <?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
    </a>

    <!-- Conteneur global de la page -->
    <div <?php echo wp_kses_post( astra_attr( 'site', array( 'id' => 'page', 'class' => 'hfeed site' ) ) ); ?>>

        <?php astra_header_before(); // Hook Astra avant header ?>

        <!-- Ton header personnalisé avec tes classes CSS -->
        <header>
            <div class="site-header"> <!-- Flex, padding, bg blanc -->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="planty" class="header-image" />
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'menu' // ta classe menu en flex horizontal
                    ));
                    ?>
                </nav>
            </div>
        </header>

        <?php astra_header_after(); // Hook Astra après header ?>

        <?php astra_content_before(); // Hook Astra avant contenu ?>

        <!-- Zone contenu principale -->
        <div id="content" class="site-content">
            <div class="ast-container">
                <?php astra_content_top(); // Hook Astra top contenu ?>
