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

    <div class="navbar-container bg-primary-3">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary-3" data-sticky="top">
        <div class="container">
          <a class="navbar-brand fade-page" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <i class="far fa-wifi mr-1"></i>
            <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fal fa-bars icon navbar-toggler-open"></i>
            <i class="fal fa-times icon navbar-toggler-close"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <div class="py-2 py-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-fw fa-home"></i>
                    Welcome
                  </a>
                </li>
                <!-- mobile only version -->
                <li class="nav-item d-xs-block d-lg-none">
                  <a href="#" class="nav-link">
                    <i class="far fa-fw fa-users"></i>
                    About
                  </a>
                </li>
                <!-- desktop only version -->
                <li class="nav-item d-none d-lg-block">
                  <a href="#" class="nav-link" data-toggle="collapse" data-target="#aboutNavItem" aria-controls="aboutNavItem" aria-expanded="false" aria-label="About">
                    <i class="far fa-fw fa-users"></i>
                    About
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-fw fa-comments"></i>
                    Contact
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                    <i class="far fa-fw fa-question-circle"></i>
                    Support
                  </a>
                  <div class="dropdown-menu row">
                    <div class="col-auto px-0" data-dropdown-content>
                      <div class="bg-white rounded border shadow-lg o-hidden">
                        <div class="p-3">
                          <h6 class="mb-0">Support</h6>
                        </div>
                        <div class="list-group list-group-flush">
                          <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-3">
                            <i class="fa icon icon-md fa-fw fa-file-alt"></i>
                            <div class="text-body ml-3">
                              <span>Documentation</span>
                              <div class="text-small text-muted">Get all the information you need</div>
                            </div>
                          </a>
                          <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-3">
                            <i class="fa icon icon-md fa-fw fa-comment-alt"></i>
                            <div class="text-body ml-3">
                              <span>Looking for answers?</span>
                              <div class="text-small text-muted">Get support</div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-fw fa-user-circle"></i>
                    Members
                  </a>
                </li>
              </ul>
            </div>
            <a href="#" class="btn btn-theme ml-lg-3">Download</a>
          </div>
        </div>
      </nav>
    </div>

    <!-- about navbar -->
    <div class="collapse navdropdownpanel" id="aboutNavItem">
      <div class="dropdown-tab bg-theme-dark text-light border-bottom">
        <div class="container py-4" data-dropdown-content>
          <div class="row">
            <div class="col-lg col-md-6 mb-3 mb-lg-0">
              <h5>General</h5>
              <div>
                <a class="dropdown-item fade-page" href="#">Locations</a>
                <a class="dropdown-item fade-page" href="#">Network Status</a>
              </div>
            </div>
            <div class="col-lg col-md-6 mb-3 mb-lg-0">
              <h5>Resources</h5>
              <div>
                <a class="dropdown-item fade-page" href="#">Reasons for a VPN</a>
                <a class="dropdown-item fade-page" href="#">Tutorials</a>
                <a class="dropdown-item fade-page" href="#">Documentation</a>
              </div>
            </div>
            <div class="col-lg col-md-6 mb-3 mb-lg-0">
              <h5>Blog</h5>
              <div>
                <a class="dropdown-item fade-page" href="#">Why Odyssey?</a>
                <a class="dropdown-item fade-page" href="#">Browsing Anonymously</a>
                <a class="dropdown-item fade-page" href="#">Public Security</a>
                <a class="dropdown-item fade-page" href="#">Data Theft</a>
                <a class="dropdown-item fade-page" href="#">Hiding Your Real Location</a>
              </div>
            </div>
            <div class="col-lg col-md-6 mb-3 mb-lg-0">
              <h5>Company</h5>
              <div><a class="dropdown-item fade-page" href="#">About Us</a>
                <a class="dropdown-item fade-page" href="#">Our Team</a>
                <a class="dropdown-item fade-page" href="#">Service Reviews</a>
                <a class="dropdown-item fade-page" href="#">Jobs at Odyssey</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
