<?php
//jpeg_qualityを100にする
add_filter( 'wp_editor_set_quality', function( $quality ) {
return 100;
} );
?>