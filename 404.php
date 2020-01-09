<?php

# Include the header file
get_header();

?>

<section class="min-vh-100 bg-primary-3 text-light py-5 o-hidden">
  <div class="container">
    <div class="row justify-content-center mb-md-6">
      <div class="col-auto">
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Welcome' ) ) ); ?>">
          <i class="far fa-2x fa-wifi mr-1"></i>
        </a>
      </div>
    </div>
    <div class="row text-center py-6">
      <div class="col layer-2">
        <h1 class="display-1 mb-0">404</h1>
        <h2 class="h1">Page not found</h2>
        <div class="lead mb-4">It appears the page you were looking for couldn’t be found.</div>
        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Welcome' ) ) ); ?>">Go back to home</a>
      </div>
    </div>
  </div>
  <div class="decoration-wrapper d-none d-md-block">
    <div class="decoration right middle-y scale-2" data-jarallax-element="200">
      <img class="bg-primary-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/decorations/deco-blob-3.svg" alt="deco-blob-3 decoration" data-inject-svg />
    </div>
    <div class="decoration right middle-y" data-jarallax-element="100">
      <img class="bg-primary" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/decorations/deco-lines-3.svg" alt="deco-lines-3 decoration" data-inject-svg />
    </div>
    <div class="decoration top left scale-3" data-jarallax-element="50">
      <img class="bg-white" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/decorations/deco-blob-9.svg" alt="deco-blob-9 decoration" data-inject-svg />
    </div>
    <div class="decoration top left scale-2 scale-3 blend-mode-multiply" data-jarallax-element="150 50">
      <img class="bg-primary-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/decorations/deco-dots-2.svg" alt="deco-dots-2 decoration" data-inject-svg />
    </div>
  </div>
</section>

<?php

# Footer
get_footer();
