<?php
function add_menu_admin_bar_link() {
    global $wp_admin_bar;
    //Add menu
    $args = array(
    'id' => 'menu_id',
    'title' => __('Quản đa kênh'),
    'href' => __('http://localhost/Alphamedia/wp-content/plugins/AME_Live/src/dash_board.php'),
    );
    $wp_admin_bar->add_menu( $args );
    //Add child menu
    $args = array(
    'id' => 'Facebook_chanel',
    'title' => 'Kênh Fanpage',
    'href' => __('http://localhost/Alphamedia/wp-content/plugins/AME_Live/src/dash_board.php'),
    'parent'=> 'menu_id'
     
    );
    $wp_admin_bar->add_node( $args );
    //Add child menu 1.1
    $args = array(
    'id' => 'child_menu_id_2',
    'title' => 'Sub Menu 1.1',
    'href' => __('https://levantoan.com'),
    'parent'=> 'child_menu_id'
     
    );
    $wp_admin_bar->add_node( $args );
    //Add child menu 1.2
    $args = array(
    'id' => 'child_menu_id_3',
    'title' => 'Sub Menu 1.2',
    'href' => __('https://levantoan.com'),
    'parent'=> 'child_menu_id'
     
    );
    $wp_admin_bar->add_node( $args );
    //Add child menu 2
    $args = array(
    'id' => 'child_menu2_id',
    'title' => 'Sub Menu 2',
    'href' => __('https://levantoan.com'),
    'parent'=> 'menu_id'
     
    );
    $wp_admin_bar->add_node( $args );
    //Add child menu 3
    $args = array(
    'id' => 'child_menu3_id',
    'title' => 'Sub Menu 3',
    'href' => __('https://levantoan.com'),
    'parent'=> 'menu_id'
     
    );
    $wp_admin_bar->add_node( $args );
   }
   add_action('admin_bar_menu', 'add_menu_admin_bar_link',81);