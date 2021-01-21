<?php
// tao hằng số lưu đường dẫn
define('STREETWEAR_THEME_DIR', get_template_directory());// đường dẫn tới thư mục theme dẫn tới các khu vực chứa file
define('STREETWEAR_THEME_URL', get_template_directory_uri());//
define('STREETWEAR_THEME_INC_DIR', STREETWEAR_THEME_DIR . '/inc');
define('STREETWEAR_THEME_ASSETS_DIR', STREETWEAR_THEME_DIR . '/assets');
define('STREETWEAR_THEME_CUSTOMIZER_DIR', STREETWEAR_THEME_INC_DIR . '/customizer');
define('STREETWEAR_THEME_URL_IMG', get_template_directory_uri() . '/img');

// 11. update cart icon
/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php            
    }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );
// -----------------
// 10. add some action hooks
// -----------------
/**
 * Add Cart icon and count to header if WC is active
 */
function my_wc_cart_count() {
 
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
        $count = WC()->cart->cart_contents_count;
        ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
        if ( $count > 0 ) {
            ?>
            <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
            <?php
        }
                ?></a><?php
    }
 
}
add_action( 'linh_cart_icon', 'my_wc_cart_count' );// header-menu.php

add_action('linh_rate', 'woocommerce_template_loop_rating', 5);// index.php
add_action('linh_addtocart', 'woocommerce_template_loop_add_to_cart', 5);// index.php
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_price', 20 );// woocomerce/content-product.php
// ------------------
// 10. admin bar
// -----------------------------
// function admin_bar(){

//     if(is_user_logged_in()){
//       add_filter( 'show_admin_bar', '__return_true' , 1000 );
//     }
//   }
//   add_action('init', 'admin_bar' );
// ---------------------------------
// 9. remove một số thành phần ko cần thiết trong trang single product
// ----------------------------------
// remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20);// woocommerce/archive-product.php
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 ); // woocommerce/content-product.php
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );// woocommerce/archive-product.php
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
// ----------------------------------
// 8. định nghĩa add woocommerce support to the theme
// ----------------------------
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}   


// ----------------------------
// 7. quản lý các hàm hỗ trợ
// lấy url từ ảnh trong bài viết
// resize lại kích thước của ảnh để tối ưu tốc độ load website
// ----------------------------
require_once STREETWEAR_THEME_INC_DIR . '/support-functions.php';


// ----------------------------
// 6. quản lý customizer
// ----------------------------
require_once STREETWEAR_THEME_INC_DIR . '/customizer-manager.php';
global $CustomizeVal;// khai báo biến $DDNCustomize để có thể sử dụng ở mọi nơi trong website
$CustomizeVal = new dttl_Theme_Customizer_Manager();


// ----------------------------
// 5. 
// gọi class html trong tệp tin html.php vào
// trước tiên kiểm tra xem tệp tin ZendvnHtml đã tồn tại trong plugin nào chưa nếu rồi thì ko sử dụng lại nữa
// ----------------------------
if(!class_exists('ZendvnHtml') && is_admin()){
    require_once STREETWEAR_THEME_INC_DIR . '/html.php';

}

// ----------------------------
// 4. quản lý menu
// ----------------------------
require_once STREETWEAR_THEME_INC_DIR . '/menu-manager.php';

// ----------------------------
// 3. khai báo các dạng format và features
// ----------------------------
add_action('after_setup_theme', 'STREETWEAR_THEME_post_format');
function STREETWEAR_THEME_post_format(){
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio') );
    add_theme_support( 'post-thumbnails');
}

// ----------------------------
// 2. nap tep tin js
// ----------------------------
require_once STREETWEAR_THEME_ASSETS_DIR . '/js/js-manager.php';
// ----------------------------
// 1. nap tep tin css
// ----------------------------
require_once STREETWEAR_THEME_ASSETS_DIR . '/css/css-manager.php';
// ----------------------------
// 0. đổi giao diện edit về giao diện cũ
// ----------------------------
add_filter('use_block_editor_for_post', '__return_false');



// $newImgUrl = aaget_new_img_url('http://localhost/OneDrive%20-%20hus.edu.vn/lythuyet/wordpress/ddn/wp-content/uploads/2020/10/ricoh-Ri-1000.jpg', 50, 50);
//     echo "<pre style='color: red;font-size: 14px'>";
//     	print_r($newImgUrl);
//     echo "</pre>";

