# Exordium Wordpress Theme

`exordium-wp` is a customized wordpress theme made for the https://exordium.dev website. Exordium is a virtual private networking software in the works.

![Screenshot of the Exordium theme](screenshot.png)

## Before we go live
- List of very useful plugins that should be setup and added when we initially go live
 - `bbPress`, for support forum.
   - `bbPress Voting`, topics and replies up or down to surface the best replies.
   - `BuddyPress`, adds community features to WordPress. Member Profiles, Activity Streams, Direct Messaging, Notifications, and more!
 - `WP Subtitle`, support has been added for this plugin on the theme side.
 - `WP User Avatar`, administrative users can choose to upload an avatar rather then use the gravatar function provided by Wordpress.

## Documentation

Below is some documentation to help with ones understanding of certain functions inside this theme.

`get_template_part()` as there are many different elements that make this theme work, and many customized designs for specific pages, like `is_front_page`, we need to repeatedly obtain the same code over and over.
