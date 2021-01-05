<?php 
get_header(); 
get_header('menubackground');
$upload_dir = wp_upload_dir();

// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
//
?>
<?php
while (have_posts()) : the_post();

the_content();

endwhile;
?>

<?php 
    
    get_footer("footer");
    get_footer(); 
?>