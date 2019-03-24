<html>

<head>
    <title>Vincze László honlapja</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <link href="wp-content/themes/vinczelaszlo/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid">
        <div id="header">

            <nav class="menu main">


                <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'header-menu' ) ); ?>

            </nav><!-- .main -->

        </div>