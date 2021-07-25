<?php

function PeroManMenuSupport() {
    register_nav_menu('Peroman_Top_Menu',__( 'Topbar' ));
}

add_action( 'init', 'PeroManMenuSupport' );