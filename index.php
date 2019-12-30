<?php

/**
 * Exordium Wordpress Theme
 * Developer Version: 2019.12.29
 *
 * @package WordPress
 * @subpackage Exordium
 * @since 2019.12.29
 */

# Include the header file
get_header();

# Vars
$archive_title    = '';
$archive_subtitle = '';

if (is_search()) {
  # Search Bar
} elseif (!is_home()) {
  $archive_title    = get_the_archive_title();
	$archive_subtitle = get_the_archive_description();
}



# Footer
get_footer();
