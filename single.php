<?php

# Include the header file
get_header();


# What are we right now?
if ( have_posts() ) :
  while ( have_posts() ) : the_post();

    # Cover Section
    if ( has_post_thumbnail() ) {
      get_template_part('partials/nav/nav-page-transparent');
      get_template_part('partials/cover/cover-post-transparent');
    } else {
      get_template_part('partials/nav/nav-page-light');
      get_template_part('partials/cover/cover-light');
    }

    # Content Section
    get_template_part('partials/content/content-post');
  endwhile;
else :
  // When no posts are found, output this text.
  _e( 'Sorry, no posts matched your criteria.' );
endif;
wp_reset_postdata();

# Footer
get_template_part('partials/footer/footer-home');
get_footer();
