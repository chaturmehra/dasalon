<?php
if (!function_exists('loadScript')) {
    function loadScript( $src = "" ) {
        global $footerScripts;

        if( !empty( $src ) ) {
            $footerScripts[] = $src;
        } else {

            if( !empty( $footerScripts ) ) {
                foreach($footerScripts as $key => $script ) {
                    echo '<script src="'. base_url() . $script .'"></script>';
                }
            }
        }
    }
}

            