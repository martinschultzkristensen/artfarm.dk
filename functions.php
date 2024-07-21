<?php

/** 
 * Plugin name: Demo Bootstrap css
 */
function demo_include_bootstrap()
{
 wp_enqueue_style( 'demo_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', $deps:array, $ver:string|boolean|null, $media:string )
}
add_action( 'wp_enqueue_scripts', 'demo_include_bootstrap' )
?>