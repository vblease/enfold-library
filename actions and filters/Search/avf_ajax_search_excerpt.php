<?

/**
 * Remove the AJAX Search Excerpt
 *
 * Use the "avf_ajax_search_excerpt" filter to remove the ajax search excerpt.
 * Related thread: http://www.kriesi.at/support/topic/search-results-preview-showing-shortcode/
 *
 **/

/** Add the following snippet in the functions.php file. **/

add_filter('avf_ajax_search_excerpt', '__return_false' );
