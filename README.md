# wordpress_expire_shortcode
Simple Wordpress shortcode to allow content inside of a post/page/custom post type to expire on a specific date &amp; time.

Shortcode to expire any content on the date input

This allows expirations to be possible within text blocks, posts and pages
It does not require an entire post to expire when only one section of the post is outdated

Example:

  <code>[expire exp_on="20300326"]
  &lt;p&gt;Any content to be expired&lt;/p&gt;
  [/expire]</code>

This example will be displayed until March 26, 2030. After that time, nothing will show up in its place.

I recommend putting the code in your functions.php file, inside your theme's folder.
