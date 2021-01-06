<?php 
get_header(); 
get_header('menubackground');
$upload_dir = wp_upload_dir();

// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
// echo '</pre>';
?>
<!-- Wrapper -->
<div id="necklaces">
        <div class="sectionTop">
            <div class="title">OUR TOP GIFT PICKS 🎁 </div>
            <div class="des">We curated our best pieces, you can take all the credit. 😏 </div>
        </div>
        <div class="wrapper">
            <div class="w3-row-padding">
                <?php 
                    
                    $default_posts_per_page = get_option( 'posts_per_page' );
                    $args = array(
                    'post_type' => 'product',
                    'term_id'       => 19 ,
                    'orderby'    => 'id',
                    'order'      => 'DESC',
                    'hide_empty' => false,
                    );


                    $query = new WP_Query( $args );
                    // echo '<pre style="color: #fff">';
                    // print_r($query);
                    // echo '</pre>';
                    if ( $query->have_posts() ) :
                        while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                        $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                ?>
                <div class="w3-col s6 m4 l4">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <div class="infowrapper">
                            <div class="name"><?php the_title(); ?></div>
                            <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_rating - 5
                                 */
                                do_action( 'linh_rate');
                            ?>
                            <div class="price"><?php echo $product->get_price_html(); ?></div>
                            <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                do_action( 'linh_addtocart');
                            ?>
                        </div>
                    </a>
                </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();// reset lại đối tương wp_query
                ?>
            </div>
        </div>
    </div>
    <div id="clothes">
        <img src="<?php echo $upload_dir['url']; ?>/wp2153682.jpg" alt="clothes" class="w3-hide-small w3-hide-medium">
        <img src="<?php echo $upload_dir['url']; ?>/wp2153682-mb.jpg" alt="clothes" class="w3-hide-large">
    </div>
    <div id="clothesslider">
        <div class="slidercontainer">
            <ul id="slidewrapper">
                <?php 
                    
                    $default_posts_per_page = get_option( 'posts_per_page' );
                    $args = array(
                    'post_type' => 'product',
                    'term_id'       => 19 ,
                    'orderby'    => 'id',
                    'order'      => 'DESC',
                    'hide_empty' => false,
                    );


                    $query = new WP_Query( $args );
                    // echo '<pre style="color: #fff">';
                    // print_r($query);
                    // echo '</pre>';
                    if ( $query->have_posts() ) :
                        while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                        $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                ?>
                <li>
                    <img src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div class="infowrapper">
                        <div class="name"><?php the_title(); ?></div>
                        <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_rating - 5
                                 */
                                do_action( 'linh_rate');
                            ?>
                        <div class="price"><?php echo $product->get_price_html(); ?></div>
                        <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                do_action( 'linh_addtocart');
                            ?>
                    </div>
                </li>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();// reset lại đối tương wp_query
                ?>
                
            </ul>
            <button id="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
            </button>
            <button id="next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
            </button>

        </div>
    </div>
    <div id="gifts">
        <div class="w3-row-padding">
            <div class="info w3-col s12 m6 l6">
                <div class="infowrapper">
                    <div class="title">BAG BOY HYBRIDS</div>
                    <div class="des">We remade some of our most hyped pieces with a Bag Boy twist. Secure yours now before they're gone.</div>
                    <button>shop now</button>
                </div>

            </div>
            <div class="imgs w3-col s12 m6 l6">
                <img src="<?php echo $upload_dir['url']; ?>/bag-boy-556_cb59fb09-df4f-4f77-b545-a85a220a0abc_360x.jpg" alt="">
                <img src="<?php echo $upload_dir['url']; ?>/graduation-bag-boy-959_d81ac870-fffd-4e02-ac9d-25027c5f9747_360x.jpg" alt="">
            </div>
        </div>

    </div>
    <div id="categories">
        <div class="wrapper">
            <div class="w3-row-padding">
                <?php
                    $taxonomy = 'product_cat';
                    $bracelets = get_term_by( 'slug', 'bracelets', $taxonomy );
                    $earrings = get_term_by( 'slug', 'earrings', $taxonomy );
                    $rings = get_term_by( 'slug', 'rings', $taxonomy );

                ?>
                <div class="catitems w3-col s6 m3 l3">
                    <a href="<?php echo get_term_link( $bracelets ); ?>">
                        <img src="<?php echo wp_get_attachment_url( get_woocommerce_term_meta( $bracelets->term_id, 'thumbnail_id', true ) ); ?>" alt="<?php echo $bracelets->name ?>">
                        <div class="catname"><?php echo $bracelets->name ?></div>
                    </a>
                </div>
                <div class="catitems w3-col s6 m3 l3">
                    <a href="<?php echo get_term_link( $earrings ); ?>">
                        <img src="<?php echo wp_get_attachment_url( get_woocommerce_term_meta( $earrings->term_id, 'thumbnail_id', true ) ); ?>" alt="<?php echo $earrings->name ?>">
                        <div class="catname"><?php echo $earrings->name ?></div>
                    </a>
                </div>
                <div class="catitems w3-col s6 m3 l3">
                    <a href="<?php echo get_term_link( $rings ); ?>">
                        <img src="<?php echo wp_get_attachment_url( get_woocommerce_term_meta( $rings->term_id, 'thumbnail_id', true ) ); ?>" alt="<?php echo $rings->name ?>">
                        <div class="catname"><?php echo $rings->name ?></div>
                    </a>
                </div>
                <div class="catitems w3-col s6 m3 l3">
                    <a href="">
                        <img src="<?php echo $upload_dir['url']; ?>/cupids-revenge-430_900x.png" alt="all products">
                        <div class="catname">all products</div>
                    </a>
                </div>
            </div>
        </div>

    </div>
    
    <div id="quality">
        <img src="<?php echo $upload_dir['url']; ?>/DSC00382_1728x.png" alt="quality">
        <div class="content contentdesktop w3-hide-small">
            <div class="contenttop">Quality you can trust</div>
            <div class="contenttitle">That's the Thryfty difference.</div>
            <p>We know there's a lot of other options for jewelry, but we're not like the other guys. If you want quality, you've come to the right place. 😏</p>
            <p>If you want cheap base metals that'll leave your skin itchy and green... try the other guys. 🤷🏻‍♂️</p>
            <button>read our story</button>
        </div>
        <div class="content2 w3-hide-medium w3-hide-large">
            <div class="contenttop">Quality you can trust</div>
            <div class="contenttitle">That's the Thryfty difference.</div>
            <p>We know there's a lot of other options for jewelry, but we're not like the other guys. If you want quality, you've come to the right place. 😏</p>
            <p>If you want cheap base metals that'll leave your skin itchy and green... try the other guys. 🤷🏻‍♂️</p>
            <button>read our story</button>
        </div>
    </div>
    <?php 
    
    get_footer("footer");
    get_footer(); 
    ?>