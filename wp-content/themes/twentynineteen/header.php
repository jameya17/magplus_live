<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="medium" content="mult">
    <meta name="title" content="">
    <meta name="robots" content="noindex,follow">

    <meta property="og:title" content="">
    <meta property="og:url" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/og-image.png>">
    <meta property="og:type" content="">
    <meta property="og:site_name" content="">
    <meta property="og:locale" content="en_US">

    <meta itemprop="name" content="">
    <meta itemprop="url" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/magplus-favicon.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

   
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<?php include("includes/css-js.php"); ?> 
    <?php 
        $pageId = get_the_ID();
    ?>
</head>
<header class="header">
    <div class="header-wrap">
        <div class="header-pad clearfix">
            <a class="logo" href="<?php echo get_permalink(29200); ?>">
                <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="mag+ Logo" title="Magplus Logo">
            </a>

            <div class="icon-burger">
                <span class="burger-patty"></span>
                <span class="burger-patty"></span>
                <span class="burger-patty"></span>
            </div>

            <nav class="sticky-nav-tabs">
                <ul class="sticky-nav-tabs-container">
                    <li class="<?php if($pageId == 22485 || $pageId == 9057 || $pageId == 31538 || $pageId == 31540){ ?>active<?php } ?> services">
                        <a href="<?php echo get_permalink(22485); ?>" class="sticky-nav-tab">Services</a>
                        <ul class="sub-menu">
                            <li class="<?php if($pageId == 9057){ ?>active<?php } ?>"><a href="<?php echo get_permalink(9057); ?>" class="sticky-nav-tab" title="Creative Services">Creative Services</a></li>
                            <li class="<?php if($pageId == 31538){ ?>active<?php } ?>"><a href="<?php echo get_permalink(31538); ?>" class="sticky-nav-tab" title="App submission">App submission</a></li>
                            <li class="<?php if($pageId == 31540){ ?>active<?php } ?>"><a href="<?php echo get_permalink(31540); ?>" class="sticky-nav-tab" title="App Updation">App Updation</a></li> 
                        </ul>
                    </li>
                    <li class="<?php if($pageId == 31519 || $pageId == 31525 || $pageId == 31523 || $pageId == 19){ ?>active<?php } ?> support">
                        <a href="<?php echo get_permalink(31519); ?>" class="sticky-nav-tab">Support</a>
                        <ul class="sub-menu">
                            <li class="<?php if($pageId == 31523){ ?>active<?php } ?>"><a href="<?php echo get_permalink(31523); ?>" class="sticky-nav-tab" title="Tutorials">Tutorials</a></li>
                            <li class="<?php if($pageId == 31525){ ?>active<?php } ?>"><a href="<?php echo get_permalink(31525); ?>" class="sticky-nav-tab" title="Case Studies">Case Studies</a></li>
                            <li class="<?php if($pageId == 19){ ?>active<?php } ?>"><a href="<?php echo get_permalink(19); ?>" class="sticky-nav-tab" title="Blogs">Blogs</a></li> 
                        </ul>
                    </li>
                    <li class="<?php if($pageId == 27659){ ?>active<?php } ?>"><a href="<?php echo get_permalink(27659); ?>" class="sticky-nav-tab">Pricing</a></li>
                    <li class="<?php if($pageId == 31528){ ?>active<?php } ?>"><a href="<?php echo get_permalink(31528); ?>" class="sticky-nav-tab">mag+ Now</a></li>
                    <!-- <li class=""><a href="" class="sticky-nav-tab">Logout</a></li> -->
                    <li><a href="<?php echo get_permalink(31257); ?>" class="sticky-nav-tab mob-view">FAQs</a></li>
                    <li class="try-free-block">
                        <!-- <a class="btn" id="navLoginBtn" href="?page_id=31551">Download</a> -->
                        <a class="btn" id="navLoginBtn" href="<?php echo get_permalink(31549); ?>">Try for free</a>
                        <div class="mob-view">
                            <ul class="sidebar-listing follow-us-listing">
                                <li><a href="https://twitter.com/magplus/" title="Twitter" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icons/grey-twitter.svg" alt="Twitter" /></a></li>
                                <li><a href="https://www.facebook.com/magplus" target="_blank" title="facebook"><img src="<?php bloginfo('template_directory'); ?>/images/icons/grey-facebook.svg" alt="facebook" /></a></li>
                                <li><a href="https://www.instagram.com/magplus/" target="_blank" title="Instagram"><img src="<?php bloginfo('template_directory'); ?>/images/icons/grey-instagram.svg" alt="Instagram" /></a></li>
                                <li><a href="https://www.youtube.com/user/magplus" target="_blank" title="youTube"><img src="<?php bloginfo('template_directory'); ?>/images/icons/youtube.svg" alt="youTube" /></a></li>
                            </ul>    
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>       
</header>
<body>
<?php wp_body_open(); ?>
