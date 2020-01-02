<div class="navbar-container bg-theme-dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-theme-dark position-fixed" data-sticky="top">
    <div class="container">
      <a class="navbar-brand fade-page" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php get_template_part('partials/logo/logo-header'); ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fal fa-bars icon navbar-toggler-open"></i>
        <i class="fal fa-times icon navbar-toggler-close"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <?php get_template_part('partials/main-nav'); ?>
      </div>
    </div>
  </nav>
</div>

<!-- about navbar -->
<div class="collapse navdropdownpanel" id="aboutNavItem">
  <div class="dropdown-tab bg-theme-dark text-light border-bottom">
    <?php get_template_part('partials/about-nav'); ?>
  </div>
</div>
