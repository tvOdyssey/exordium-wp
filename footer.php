    <!-- footer -->
    <footer class="pb-5 bg-theme-dark text-light">
      <div class="container">
        <div class="row mb-4 justify-content-center">
          <div class="col-auto">
            <?php get_template_part('partials/logo/logo-footer'); ?>
          </div>
        </div>
        <?php
          if (has_nav_menu( 'footer-menu' )) {
        ?>

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

          </div>
        </div>

        <?php
          }
        ?>

        <?php
          if (has_nav_menu( 'footer-menu-social' )) {
        ?>

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

        <?php
          }
        ?>
        <div class="row justify-content-center text-center">
          <div class="col-xl-10">
            <small class="text-muted">
              © <?php echo date("Y"); ?> All Rights Reserved. <?php echo esc_html( get_bloginfo( 'name' ) ); ?>.
            </small>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>

  </body>
</html>
