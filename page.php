<?php 
get_header();
if (is_home()){
    get_header('menubackground');
}else{
    get_header("menu"); 
}

$upload_dir = wp_upload_dir();
// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
// echo '</pre>';
?>
<?php
    // global $post;
    // echo '<pre style="color: #fff">';
    // print_r(get_pages());
    // echo '</pre>';
    // echo get_post()->post_title;
    // echo get_query_var('post_type');,6
    $page = get_queried_object();
    // $pageID = $page->term_id;
    
    // echo '<pre style="color: #fff">';
    // print_r($page);
    // echo '</pre>';
    set_query_var('termid', $page->term_id);// truyền biến tới template part
    set_query_var('cat_name', $page->name);
    set_query_var('cat_slug', $page->slug);
    set_query_var('pageId', $page->ID);
    set_query_var('post_title', $page->post_title);
?>
<?php
while (have_posts()) : the_post();

the_content();

endwhile;

// echo '<pre style="color: #fff">';
// print_r(get_post()->post_type);
// echo '</pre>'
// if($page->post_type == "page"){
//     // echo get_post()->post_type;
//     switch ($page->post_title) {
//         case 'Liên hệ':
//             get_template_part( 'page', 'contact' );
//             break;
//         // case 'Cart':
//         //     get_template_part( 'page', 'cart' );
//         //     break;
//         // default:
//         //     get_template_part( 'page', 'normal' );
//     }
//     // echo get_post()->post_type;
//     // get_template_part( 'page', 'normal' );
    
// } else if ($page->taxonomy == "product_cat"){
//     get_template_part( 'page', 'productcat' );
// }
// switch (get_post()->post_type) {
//     case 'post':
//         get_template_part( 'single', 'post' );
//         break;
//     case 'product':
//         get_template_part( 'single', 'proddetail' );
//         break;
//     default:
//         get_template_part( 'single', 'default' );
// }
?>
<?php 
get_footer("footer");
get_footer();
?>