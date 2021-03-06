<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title><?php 
        wp_title('|', true, 'right');
        bloginfo('name');
    ?></title>
    <!-- <link rel="icon" href="https://www.vivosmartphone.vn/themes/vivo/favicon.ico"> -->
    <meta name="title" content="" />
    <meta name="description" content="" />
    <meta property="og:locale" content="vi" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Trang chủ" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <?php $default_posts_per_page = get_option( 'posts_per_page' ); ?>

</head>

<body>
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="menusidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
        <?php
                        if(has_nav_menu('mobile_menu')){
                            $args = array(
                                'menu'                 => '',
                                'container'            => 'nav',
                                'container_class'      => '',
                                'container_id'         => '',
                                'container_aria_label' => '',
                                'menu_class'           => '',
                                'menu_id'              => '',
                                'echo'                 => true,
                                'fallback_cb'          => 'wp_page_menu',
                                'before'               => '',
                                'after'                => '',
                                'link_before'          => '',
                                'link_after'           => '',
                                'items_wrap'           => '<ul>%3$s</ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                                'item_spacing'         => 'preserve',
                                'depth'                => 2,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                                'walker'               => '',
                                'theme_location'       => 'mobile_menu',
                            );
                            wp_nav_menu( $args );
                        }
                    ?>
        <div class="iconmenu"><a href=""><i class="fa fa-user-o" aria-hidden="true"></i></a> <a href=""><i class="fa fa-search" aria-hidden="true"></i></a> <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
        
        <!-- <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li>
                    Jewelry
                    <ul>
                        <li><a href="">Necklaces</a></li>
                        <li><a href="">Bracelets</a></li>
                        <li><a href="">Rings</a></li>
                        <li><a href="">Earrings</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Clothing</a>
                    <ul>
                        <li><a href="">All clothing</a></li>
                        <li><a href="">Sweatshirts</a></li>
                        <li><a href="">T-shirts</a></li>
                        <li><a href="">Hats</a></li>
                        <li><a href="">Bag boy capsule 1</a></li>
                    </ul>

                </li>
                <li><a href="">Blackout capsule</a></li>
                <li><a href=""><i class="fa fa-user-o" aria-hidden="true"></i></a> <a href=""><i class="fa fa-search" aria-hidden="true"></i></a> <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
            </ul>
        </nav> -->
    </div>
    <?php 
        // lấy dữ liệu từ customize footer info
        global $CustomizeVal;// gọi biến $DDNCustomize để có thể dùng ở đây
        $background_data = $CustomizeVal->background_data(); // tham số desktop truyền vào để xác định các dữ liệu nằm trên giao diện desktop
        $logo_data = $CustomizeVal->logo_data();
        // echo '<pre style="color: #fff">';
        // print_r($logo_data);
        // echo '</pre>';
    ?>
    <div id="notif">FREE U.S. SHIPPING ON ALL JEWELRY ORDERS</div>
    <div id="background">

        <div id="top" class="w3-hide-small w3-hide-medium">
            <div id="logo"><img class="dttllogo" src="<?php echo $logo_data['logo']; ?>" alt="logo"></div>
            <div class="menuwrapper">
            <?php
                        if(has_nav_menu('main_menu')){
                            $args = array(
                                'menu'                 => '',
                                'container'            => 'nav',
                                'container_class'      => '',
                                'container_id'         => '',
                                'container_aria_label' => '',
                                'menu_class'           => '',
                                'menu_id'              => '',
                                'echo'                 => true,
                                'fallback_cb'          => 'wp_page_menu',
                                'before'               => '',
                                'after'                => '',
                                'link_before'          => '',
                                'link_after'           => '',
                                'items_wrap'           => '<ul>%3$s<hr/></ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                                'item_spacing'         => 'preserve',
                                'depth'                => 2,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                                'walker'               => '',
                                'theme_location'       => 'main_menu',
                            );
                            wp_nav_menu( $args );
                        }
                    ?>
<div class="iconmenu"><a href=""><i class="fa fa-user-o" aria-hidden="true"></i></a> <a href=""><i class="fa fa-search" aria-hidden="true"></i></a> <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
                    </div>
            <!-- <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>

                        <a href="category.html">Jewelry</a>
                        <ul>
                            <li><a href="">Necklaces</a></li>
                            <li><a href="">Bracelets</a></li>
                            <li><a href="">Rings</a></li>
                            <li><a href="">Earrings</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Clothing</a>
                        <ul>
                            <li><a href="">All clothing</a></li>
                            <li><a href="">Sweatshirts</a></li>
                            <li><a href="">T-shirts</a></li>
                            <li><a href="">Hats</a></li>
                            <li><a href="">Bag boy capsule 1</a></li>
                        </ul>

                    </li>
                    <li><a href="">Blackout capsule</a></li>
                    <li><a href=""><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                    <hr />
                </ul>
            </nav> -->
        </div>
        <div id="mobile-top" class="w3-hide-large">
            <div id="mobile-nav" onclick="w3_open()"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <div id="mobile-logo">
                <a href=""><img src="<?php echo $logo_data['logo']; ?>" alt="logo"></a>
            </div>
            <div id="mobile-search"><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></div>
        </div>

    </div>