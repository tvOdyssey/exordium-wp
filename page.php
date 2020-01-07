<?php

# Include default page header
get_header();

# Page Content
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    if ( is_front_page() && !has_post_thumbnail()) {
      get_template_part('partials/nav/nav-home');
      the_content();
    } else {
      # Block for featured image
      if ( has_post_thumbnail() ) {
        get_template_part('partials/nav/nav-page-transparent');
?>
<section class="bg-dark text-light header-inner p-0 jarallax o-hidden" data-overlay data-jarallax data-speed="0.2" style="padding-top: 73px !important;">
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="jarallax-img opacity-30">
  <div class="container py-0 layer-2">
    <?php if (!is_front_page()) { ?>
    <div class="row my-3">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Welcome</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
      </div>
    </div>
    <?php } ?>
    <div class="row my-4 my-md-6" data-aos="fade-up">
      <div class="col-lg-9 col-xl-8">
        <h1 class="display-4"><?php the_title(); ?></h1>
        <p class="lead mb-0"><?php the_subtitle(); ?></p>
      </div>
    </div>
  </div>
  <div class="decoration-wrapper">
    <div class="decoration bottom right d-none d-md-block" data-jarallax-element="100 100">
      <img class="bg-primary-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/decorations/deco-blob-1.svg" alt="deco-blob-1 decoration" data-inject-svg />
    </div>
  </div>
  <div class="divider flip-x">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dividers/divider-1.svg" alt="graphical divider" data-inject-svg />
  </div>
</section>
<?php
        the_content();
      } else {
        get_template_part('partials/nav/nav-page-light');
?>
<section class="bg-primary-alt header-inner o-hidden">
  <div class="container">
    <div class="row my-3">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Welcome</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row py-6 text-center justify-content-center align-items-center">
      <div class="col-xl-8 col-lg-10">
        <h1 class="display-4"><?php the_title(); ?></h1>
        <p class="lead mb-0"><?php the_subtitle(); ?></p>
      </div>
    </div>
  </div>
  <div class="decoration-wrapper d-none d-md-block">
    <div class="decoration left middle-y scale-2" data-jarallax-element="100">
      <img class="bg-primary" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/decorations/deco-dots-4.svg" alt="deco-dots-4 decoration" data-inject-svg />
    </div>
    <div class="decoration bottom right scale-2" data-jarallax-element="100 100">
      <img class="bg-primary-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/decorations/deco-blob-6.svg" alt="deco-blob-6 decoration" data-inject-svg />
    </div>
  </div>
  <div class="divider">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dividers/divider-1.svg" alt="graphical divider" data-inject-svg />
  </div>
</section>
<section>
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>
<?php
        }
      }
    endwhile;
else :
  // When no posts are found, output this text.
  _e( 'Sorry, no posts matched your criteria.' );
endif;
wp_reset_postdata();

# Footer
get_footer();
