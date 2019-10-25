<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Law
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Law &mdash;</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Law Website Template" />
    <meta name="keywords" content="template, html5, css3, mobile first, responsive" />
    <meta name="author" content="" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="index.html">Law<span>.</span></a></div>
                    </div>
                        <?php wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                            'container_class' => 'col-xs-10 text-right menu-1',
                            'walker' => new Law_Header_Menu_Walker
                        ) ); ?>
<!--                    <div class="col-xs-10 text-right menu-1">-->
<!--                        <ul>-->
<!--                            <li class="active"><a href="index.html">Home</a></li>-->
<!--                            <li><a href="practice.html">Practice Areas</a></li>-->
<!--                            <li><a href="won.html">Won Cases</a></li>-->
<!--                            <li class="has-dropdown">-->
<!--                                <a href="blog.html">Blog</a>-->
<!--                                <ul class="dropdown">-->
<!--                                    <li><a href="#">Web Design</a></li>-->
<!--                                    <li><a href="#">eCommerce</a></li>-->
<!--                                    <li><a href="#">Branding</a></li>-->
<!--                                    <li><a href="#">API</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li><a href="about.html">About</a></li>-->
<!--                            <li><a href="contact.html">Contact</a></li>-->
<!--                            <li class="btn-cta"><a href="#"><span>Login</span></a></li>-->
<!--                            <li class="btn-cta"><a href="#"><span>Sign Up</span></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>

            </div>
        </div>
    </nav>
