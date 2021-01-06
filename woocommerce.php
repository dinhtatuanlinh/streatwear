

<?php

if ( is_singular( 'product' ) ) {
    get_header();
    get_header('menu');
 woocommerce_content();
}else{
//For ANY product archive.
//Product taxonomy, product search or /shop landing
 woocommerce_get_template( 'archive-product.php' );// woocommerce có lỗi khi gọi tệp tin archive-product.php nên phải thêm dòng này để fix
}
?>


    <?php 
    // lấy dữ liệu từ customize footer info
    global $CustomizeVal;// gọi biến $DDNCustomize để có thể dùng ở đây
    $social_links_Data = $CustomizeVal->social_links_data(); // tham số desktop truyền vào để xác định các dữ liệu nằm trên giao diện desktop

    // echo '<pre style="color: #fff">';
    // print_r($social_links_Data);
    // echo '</pre>';
?>
<footer>
        <div class="wrapper">
            <div class="w3-row-padding">
                <div class="w3-col s12 m3 l3 brand">
                    <img src="imgs/Chrome_Logo_2_200x.webp" alt="">
                    <div>Prices shown in
                        <select name="currency" id="">
                            <option value="vietnamdong">VN</option>
                            <option value="USdollar">US</option>
                            <option value="Won">KR</option>
                        </select>
                    </div>
                    <div class="social">
                        <span><a href="www.<?php echo $social_links_Data['youtube']; ?>" class="dttlyoutube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </span>
                        <span><a href="www.<?php echo $social_links_Data['instagram']; ?>" class="dttlinstagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </span>
                        <span><a href="www.<?php echo $social_links_Data['facebook']; ?>" class="dttlfacebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </span>
                    </div>

                </div>
                <div class="w3-col s12 m3 l3 help">
                    <div class="footertitle">Help</div>
                    <?php
                        if(has_nav_menu('menu_1')){
                            $args = array(
                                'menu'                 => '',
                                'container'            => '',
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
                                'theme_location'       => 'menu_1',
                            );
                            wp_nav_menu( $args );
                        }
                    ?>
                    <!-- <ul>
                        <li><a href="">FAQ</a> </li>
                        <li><a href="">Track Your Order</a></li>
                        <li><a href="">Shipping Info</a></li>
                        <li><a href="">International Shipping Policy</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul> -->
                </div>
                <div class="w3-col s12 m3 l3 stayconnected">
                    <div class="footertitle">Stay Connected</div>
                    <?php
                        if(has_nav_menu('menu_2')){
                            $args = array(
                                'menu'                 => '',
                                'container'            => '',
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
                                'theme_location'       => 'menu_2',
                            );
                            wp_nav_menu( $args );
                        }
                    ?>
                    <!-- <ul>
                        <li><a href="">Newsletter</a> </li>
                        <li><a href="">Social Media</a></li>
                        <li><a href="">Thryfty: Unchained Podcast</a></li>
                    </ul> -->
                </div>
                <div class="w3-col s12 m3 l3 diff">
                    <div class="footertitle">The Thryfty Difference</div>
                    <?php
                        if(has_nav_menu('menu_3')){
                            $args = array(
                                'menu'                 => '',
                                'container'            => '',
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
                                'theme_location'       => 'menu_3',
                            );
                            wp_nav_menu( $args );
                        }
                    ?>
                    <ul>
                        <!-- <li><a href="">Our Story</a> </li>
                        <li><a href="">The Blog</a></li> -->
                    </ul>
                    <div class="footertitle">Work with Us</div>
                    <?php
                        if(has_nav_menu('menu_4')){
                            $args = array(
                                'menu'                 => '',
                                'container'            => '',
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
                                'theme_location'       => 'menu_4',
                            );
                            wp_nav_menu( $args );
                        }
                    ?>
                    <!-- <ul>
                        <li><a href="">Influencers</a> </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <?php wp_footer(); ?>

</body>

</html>