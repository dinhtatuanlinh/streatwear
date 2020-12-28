<?php

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 10,
        // 'term_id'       => get_query_var('termid'),
        'orderby' => 'date',
        'order'      => 'DESC',
        'hide_empty' => false,
        'product_cat' => get_query_var('cat_slug')
        // 'tax_query' => array(
        //     // 'taxonomy' => 'product_cat',
        //     'field'    => 'term_id',
        //     'terms'     =>  get_query_var('termid'), // When you have more term_id's seperate them by komma.
        //     'operator'  => 'IN'
        //     )
    );

    $query = new WP_Query( $args );
    // echo '<pre style="color: #fff">';
    // print_r(get_query_var('termid'));
    // echo '</pre>';
    
        

?>
<div class="wrapper">
        <div class="cattitle"><?php echo get_query_var('cat_name'); ?></div>
        <div class="w3-row-padding">
            <?php
                if ( $query->have_posts() ) :
                    while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn  
                    $product = wc_get_product( get_the_ID()); /* get the WC_Product Object */ 
            ?>
            <div class="w3-col s12 m4 l4">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div class="infowrapper">
                        <div class="name"><?php the_title(); ?></div>
                        <div class="price"><?php $product->get_price_html(); ?></div>
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