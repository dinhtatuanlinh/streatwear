<?php 
get_header();
get_header("menu"); 
$upload_dir = wp_upload_dir();
echo '<pre style="color: #fff">';
print_r(get_the_category());
echo '</pre>';
?>
<div class="wrapper">
        <div class="cattitle"><?php echo get_the_category()[0]->name; ?></div>
        <div class="w3-row-padding">
            <?php
                if ( have_posts() ) :
                    while (have_posts()) : the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn  
                    /* get the WC_Product Object */ 
            ?>
            <div class="w3-col s12 m4 l4">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div class="infowrapper">
                        <div class="name"><?php the_title(); ?></div>
                        
                    </div>
                </a>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </div>
    <?php
        endif;
        wp_reset_postdata();// reset lại đối tương wp_query
    ?>
    <ul class="pagination">
        <li><span class="button disabled">Prev</span></li>
        <li><a href="#" class="page active">1</a></li>
        <li><a href="#" class="page">2</a></li>
        <li><a href="#" class="page">3</a></li>
        <li><span>&hellip;</span></li>
        <li><a href="#" class="page">8</a></li>
        <li><a href="#" class="page">9</a></li>
        <li><a href="#" class="page">10</a></li>
        <li><a href="#" class="button">Next</a></li>
    </ul>

<?php 
get_footer("footer");
get_footer();
?>