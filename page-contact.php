<?php
    $args = array(
        'post_type' => 'page',
        'posts_per_page' => 10,
        'page_id' => get_query_var('pageId'),   
        // 'term_id'       => get_query_var('termid'),
        'orderby' => 'date',
        'order'      => 'DESC',
        'hide_empty' => false,
        // 'product_cat' => get_query_var('cat_slug')
        // 'tax_query' => array(
        //     // 'taxonomy' => 'product_cat',
        //     'field'    => 'term_id',
        //     'terms'     =>  get_query_var('termid'), // When you have more term_id's seperate them by komma.
        //     'operator'  => 'IN'
        //     )
    );
    $query = new WP_Query( $args );
    // echo '<pre style="color: #fff">';
    // print_r($query);
    // echo '</pre>';
?>
<div class="wrapper">
        <div class="w3-row-padding">

        
        <?php
            if ( $query->have_posts() ) :
                while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn  
                // $product = wc_get_product( get_the_ID()); /* get the WC_Product Object */ 
        ?>
        <div class="pagetitle"><?php echo get_query_var('post_title'); ?></div>
        <?php
                the_content();
                endwhile;
            endif;
            wp_reset_postdata();// reset lại đối tương wp_query
        ?>
        </div>
        <!-- <form action="" method="post">
            <div>
                <label for="">Name</label>
                <input type="text" value="" name="name">
            </div>
            <div>
                <label for="">Email</label>
                <input type="text" value="" name="email">
            </div>
            <div>
                <label for="">Phone</label>
                <input type="text" value="" name="phone">
            </div>
            <div>
                <label for="">Message</label>
                <textarea id="w3review" name="w3review" rows="6" cols="50"></textarea>

            </div>
        </form> -->
    </div>