<?php

function add_svg_to_upload_mimes( $types ) {
    $types[ 'svg' ] = 'image/svg+xml';
    return $types;
}
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes' );