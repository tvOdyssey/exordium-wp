    <!-- footer -->
    <footer class="pb-5 bg-theme-dark text-light">
      <div class="container">
        <div class="row mb-4 justify-content-center">
          <div class="col-auto">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <i class="fal fa-2x fa-wifi icon icon-lg"></i>
            </a>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col">

            <?php
              wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => 'nav justify-content-center'
                )
              );
            ?>

            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a href="#" class="nav-link">Welcome</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Support</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Members</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center mt-5 mb-5">
          <div class="col-auto">
            <ul class="nav">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fab fa-2x fa-fw fa-instagram icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fab fa-2x fa-fw fa-twitter icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fab fa-2x fa-fw fa-youtube icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fab fa-2x fa-fw fa-facebook icon"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-xl-10">
            <small class="text-muted">
              © 2019 All Rights Reserved. <?php echo esc_html( get_bloginfo( 'name' ) ); ?>.
            </small>
          </div>
        </div>
      </div>
    </footer>


    <!-- required vendors -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- plugin vendors -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/fancyapps/jquery.fancybox.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/jarallax/jarallax.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/jarallax/jarallax-video.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/jarallax/jarallax-element.min.js"></script>

    <?php wp_footer(); ?>

  </body>
</html>
