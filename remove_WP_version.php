//remove WP version
function remove_version_from_js_and_css($src) {
    if (strpos($src, 'ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}
add_filter('style_loader_src', 'remove_version_from_js_and_css', 9999);
add_filter('script_loader_src', 'remove_version_from_js_and_css', 9999);

remove_action( 'wp_head', 'wp_generator' );