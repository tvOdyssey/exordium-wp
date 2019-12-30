<?php

# Include default page header
get_header();

# Include the header file
if ( is_front_page() ) {
  get_template_part('partials/nav/nav-home');
} else {
  get_template_part('partials/nav/nav-page');
}

# Footer
get_footer();
