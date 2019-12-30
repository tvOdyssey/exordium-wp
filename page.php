<?php

# Include default page header
get_header();

# Include the header file
if ( is_front_page() ) {
  get_template_part('partials/nav/nav-home');
} else {
  get_template_part('partials/nav/nav-page');
}

# Page Content
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      if ( is_front_page() ) {
        the_content();
      } else {
        # Block for featured image
        if ( has_post_thumbnail() ) {
?>
<section class="bg-dark text-light header-inner p-0 jarallax o-hidden" data-overlay data-jarallax data-speed="0.2">
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="jarallax-img opacity-30">
  <div class="container py-0 layer-2">
    <div class="row my-3">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Pages</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Current Page</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row my-4 my-md-6" data-aos="fade-up">
      <div class="col-lg-9 col-xl-8">
        <h1 class="display-4">About Us</h1>
        <p class="lead mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
      </div>
    </div>
  </div>
  <div class="decoration-wrapper">
    <div class="decoration bottom right d-none d-md-block" data-jarallax-element="100 100">
      <img class="bg-primary-2" src="assets/img/decorations/deco-blob-1.svg" alt="deco-blob-1 decoration" data-inject-svg />
    </div>
  </div>
  <div class="divider flip-x">
    <img src="assets/img/dividers/divider-1.svg" alt="graphical divider" data-inject-svg />
  </div>
</section>
<?php
        }
?>
<section>
  <div class="container">
    <div class="row mb-4">
      <div class="col">
        <h2>At a glance</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
        <span class="display-4 text-primary d-block" data-countup data-start="4567" data-end="73000" data-duration="3" data-grouping="true"></span>
        <span class="h6">Monthly Active Users</span>
      </div>
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
        <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="25" data-duration="3" data-grouping="true"></span>
        <span class="h6">Team Members</span>
      </div>
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
        <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="5069" data-duration="3" data-grouping="true"></span>
        <span class="h6">User Projects Published</span>
      </div>
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
        <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="99.9" data-decimal-places="1" data-duration="3" data-grouping="true" data-suffix="%"></span>
        <span class="h6">Server Uptime</span>
      </div>
    </div>
  </div>
</section>
<?php
      }
    endwhile;
else :
    // When no posts are found, output this text.
    _e( 'Sorry, no posts matched your criteria.' );
endif;
wp_reset_postdata();

# Footer
get_footer();
