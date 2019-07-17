<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

</head>
<body <?php body_class(); ?> onscroll="dismisScollAni()" onresize="getviewPort()">

<!-- wrapper -->
<div class="wrapper overlay">

    <!-- header -->
    <header class="header clear" role="banner">
        <div class="containerMenuIcon" onclick="mobilMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <!--   <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4"> -->
            <source src="<?php echo get_template_directory_uri(); ?>/video/new.mp4" type="video/mp4">
        </video>
        <div class="frontText"><span><b>NITROGEN SENSOR FOR SOIL SUSTAINABILITY</b></span></div>
        <div class="container">
            <div class="topContainer">
                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
                    </a>
                </div>
                <!-- /logo -->

                <!-- nav -->
                <nav class="nav" role="navigation">
                    <?php html5blank_nav(); ?>
                </nav>
                <!-- /nav -->
                <?php get_template_part('searchform'); ?>
            </div>
            <div class='icon-scroll'><div/>
            </div>
        </div>

    </header>

    <!-- /header -->
