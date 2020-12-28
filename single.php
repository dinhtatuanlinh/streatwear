<?php 
get_header("top"); 
$upload_dir = wp_upload_dir();
// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
// echo '</pre>';
?>
<!-- Wrapper -->
<?php

    // echo '<pre style="color: #fff">';
    // print_r(get_post()->post_type);
    // echo '</pre>'
    switch (get_post()->post_type) {
        case 'post':
            get_template_part( 'single', 'post' );
            break;
        case 'product':
            get_template_part( 'single', 'proddetail' );
            break;
        default:
            get_template_part( 'single', 'default' );
    }
?>
<?php setPostViews(get_the_ID());//đếm số lượt xem bài post ?>


<?php get_footer(); ?>