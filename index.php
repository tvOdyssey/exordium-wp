<?php

# Include the header file
get_header();

# Last Resort
get_template_part('partials/nav/nav-page-light');

if ( is_search() ) {
  global $wp_query;

  $archive_title = 'Searching for ' . get_search_query();
  $archive_subtitle = 'There were a total of ' . $wp_query->found_posts . ' found';
} elseif ( !is_home() ) {
  $archive_title = get_the_archive_title();
  $archive_subtitle = get_the_archive_description();
}

set_query_var( 'archive_title', $archive_title );
set_query_var( 'archive_subtitle', $archive_subtitle );

if ( $archive_title || $archive_subtitle ) {
  get_template_part('partials/cover/cover-archive-transparent');
}

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
