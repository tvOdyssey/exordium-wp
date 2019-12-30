<?php

# Include default page header
get_header();

# Include the header file
if ( is_front_page() ) {
  include('partials/nav/nav-home.php');
} else {
  include('partials/nav/nav-page.php');
}

# Footer
get_footer();
