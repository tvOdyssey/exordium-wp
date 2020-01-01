<!doctype html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

    <!-- pace -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/pace/pace.js"></script>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/pace/pace.css" type="text/css" media="all">

    <!-- default style -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/exordium-home.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/exordium-additions.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/exordium-wordpress.css" rel="stylesheet" type="text/css" media="all" />

    <!-- animate.css -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/animate/animate.css" type="text/css" media="all">

    <link rel="preload" as="font" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">

    <!-- loading style -->
    <style>
      @keyframes hideLoader {
        0% {
          width: 100%;
          height: 100%;
        }
        100%{
          width: 0;
          height: 0;
        }
      }
      body > div.loader {
        position: fixed;
        background: #222;
        width: 100%;
        height: 100%;
        z-index: 1071;
        opacity: 0;
        transition: opacity .5s ease;
        overflow: hidden;
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      body:not(.loaded) > div.loader{
        opacity: 1;
      }
      body:not(.loaded){
        overflow: hidden;
      }
      body.loaded > div.loader{
        animation: hideLoader .5s linear .5s forwards;
      }
      .loading-animation {
        display: block;
        position: relative;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #9370DB;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
      }
      .loading-animation:before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #BA55D3;
        -webkit-animation: spin 3s linear infinite;
        animation: spin 3s linear infinite;
      }
      .loading-animation:after {
        content: "";
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #FF00FF;
        -webkit-animation: spin 1.5s linear infinite;
        animation: spin 1.5s linear infinite;
      }

      @-webkit-keyframes spin {
        0% {
          -webkit-transform: rotate(0deg);
          -ms-transform: rotate(0deg);
          transform: rotate(0deg);
        }
        100% {
          -webkit-transform: rotate(360deg);
          -ms-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spin {
        0% {
          -webkit-transform: rotate(0deg);
          -ms-transform: rotate(0deg);
          transform: rotate(0deg);
        }
        100% {
          -webkit-transform: rotate(360deg);
          -ms-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {
        document.querySelector('body').classList.add('loaded');
      });
    </script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <?php
    wp_body_open();
    ?>

		<div class="loader">
      <div class="loading-animation"></div>
    </div>
