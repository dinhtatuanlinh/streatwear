<?php
        global $post;

        // $attachment_ids =  $product->get_gallery_image_ids();
        // $product = new WC_product($post->id);
        // $attachment_ids = $product->get_gallery_image_ids();
        // $post_thumbnail_id = WC_Product::get_image_id();
        
        // $loop = new WP_Query( array('name'=> $post->post_name) );
        // $_product = wc_get_product( $post->ID );
        $product = new WC_Product($post->ID);
        $data = $product->get_data();
        $image_ids = $product->get_gallery_image_ids();
        // echo '<pre style="color: #fff">';
        // print_r(get_post_meta( $post->ID, '_product_attributes' ));
        // echo '</pre>'
        
    ?>
    <div id="detail">
        <div class="productwrapper">
            <div class="thumbnailwrapper w3-hide-small">
                <div class="thumbnail">
                    <?php 
                        for($i = 0; $i < count($image_ids); $i++){
                            $image_link = wp_get_attachment_url( $image_ids[$i] );
                    ?>
                            <a href="#img-<?php echo $i+1; ?>"><img src="<?php echo $image_link; ?>" alt=""></a>
                    <?php }  ?>

                </div>
            </div>
            <div class="maindetail">
                <div class="pictures">
                    <?php 
                        for($i = 0; $i < count($image_ids); $i++){
                            $image_link = wp_get_attachment_url( $image_ids[$i] );
                    ?>
                            <img id="img-<?php echo $i+1; ?>" class="w3-hide-small" src="<?php echo $image_link; ?>" alt="">
                    <?php }  ?>
                    

                    <?php 
                        for($i = 0; $i < count($image_ids); $i++){
                            $image_link = wp_get_attachment_url( $image_ids[$i] );
                    ?>
                            <img id="img-<?php echo $i+1; ?>" class="mobileslider w3-hide-large w3-hide-medium" src="<?php echo $image_link; ?>" alt="">
                    <?php }  ?>

                    <button class="w3-button w3-white w3-display-left w3-hide-large w3-hide-medium" onclick="mb_plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-white w3-display-right w3-hide-large w3-hide-medium" onclick="mb_plusDivs(1)">&#10095;</button>
                </div>
                <div class="description">
                    <h1><?php the_title(); ?></h1>
                    <div class="review">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>171 reviews</span>
                    </div>
                    <div class="price">
                        <?php echo $product->get_price(); ?>
                    </div>
                    <fieldset>
                        <legend>choose your finish: </legend>
                        <div class="whitebox"></div>
                        <div class="yellowbox"></div>
                    </fieldset>
                    <fieldset>
                        <legend>choose your chain: </legend>
                        <div class="chainbox">
                            <span>Size</span>
                            <select name="size" id="size">
                                <option value="20-22">20-22"</option>
                                <option value="22-24">22-24"</option>
                                <option value="18">18"</option>
                            </select>
                            <span>Style</span>
                            <select name="style" id="style">
                                <option value="curb">Curb</option>
                                <option value="figaro">Figaro</option>
                                <option value="snake">Snake</option>
                                <option value="3.0mmrope">3.0mm Rope</option>
                                <option value="5.2mmcurb">5.2mm Curb</option>
                            </select>
                        </div>
                    </fieldset>
                    <button class="addtocart">add to cart</button>
                    <div class="tabs">
                        <div class="titletabs"><span>Desciption</span><i class="fa fa-chevron-up" aria-hidden="true" style="display: none;"></i><i class="fa fa-chevron-down" aria-hidden="true" style="display: block;"></i></div>
                        <div class="contenttabs">
                            <h3>Product Detail:</h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="tabs">
                        <div class="titletabs"><span>Chain Style</span><i class="fa fa-chevron-up" aria-hidden="true" style="display: none;"></i><i class="fa fa-chevron-down" aria-hidden="true" style="display: block;"></i></div>
                        <div class="contenttabs">
                            <img src="imgs/Screen_Shot_2020-11-18_at_3.51.56_AM_2048x2048.webp" alt="">
                        </div>
                    </div>
                    <div class="tabs">
                        <div class="titletabs"><span>Shipping Info</span><i class="fa fa-chevron-up" aria-hidden="true" style="display: none;"></i><i class="fa fa-chevron-down" aria-hidden="true" style="display: block;"></i></div>
                        <div class="contenttabs">
                            <p style="text-align: center;"><strong>Please note:</strong> Due to the current COVID-19 pandemic, delivery speeds have varied much more than usual. We have experienced very inconsistent service recently from our shipping carrier, USPS. Therefore, some of
                                the time estimates below may not&nbsp;be accurate at this time.</p>
                            <p style="text-align: center;">All orders are shipped out within 48 hours from our warehouse located in Michigan, USA.&nbsp;</p>
                            <p><span style="text-decoration: underline;">U.S. orders</span></p>
                            <p>Typically deliver 2-5 days after leaving our warehouse. Shipping is FREE to the United States on all jewelry and light clothing items.</p>
                            <p>Heavy items such as sweatshirts are subject to a mandatory shipping upgrade at an additional cost and will deliver in 1-3 days.</p>
                            <p><span style="text-decoration: underline;">International orders</span></p>
                            <p>Typically deliver in 1-3 weeks after leaving our warehouse. This range varies by country, with the shortest delivery times being to countries closest to the United States, such as Canada. Shipping is $9.95 USD or FREE if you
                                spend over $50 USD.</p>
                            <p>Heavy items such as sweatshirts are subject to a mandatory shipping upgrade at an additional cost and are excluded from the Free Shipping policy.</p>
                            <meta charset="utf-8">
                            <p><span>All international orders are subject to local customs fees and are your responsibility to pay. Please check your country's customs website for more information on how customs fees are accessed. We cannot change a package's value and are not responsible for any fees incurred. Packages returned due to failure to pay will be refunded minus a shipping and 15% restocking fee.</span></p>
                            <p style="text-align: center;">If you have any further questions, please contact <strong>support@shopthryfty.com&nbsp;</strong>and we'll get back to you in a timely manner.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="comment">
        <div class="starpercent">
            <div class="commenttitle">Verified Customer Reviews</div>
            <div class="ratebox">
                <div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span>Based on 171 reviews</span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>96% (164)</span>
                    </p>
                    <p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <span>4% (6)</span>
                    </p>
                    <p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <span>1% (1)</span>
                    </p>
                    <p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <span>0% (0)</span>
                    </p>
                    <p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <span>0% (0)</span>
                    </p>
                </div>
            </div>
            <div class="commentrecent">Most Recent</div>
        </div>
        <div class="comments">
            <div class="topcomment">
                <div class="ava"><img src="imgs/NoProfileLarge.png" alt="avatar"></div>
                <div class="rateuser">
                    <div class="rate">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <span>Tuna</span>
                </div>

            </div>
            <div class="maincomment">
                <div class="short">Great</div>
                <p>It took about a week for me to get my piece but it was well worth it when it arrived. I like how it looks on me. Can’t wait order another one. This is a great first chain.</p>
                <div class="imgcomment">
                    <img src="imgs/1606779978__BAE66ED9-3FDF-43D1-A54B-FFEF4C8850DC__original.webp" alt="">
                </div>
            </div>
        </div>
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
    </div>
    <?php
        // endif;
        // wp_reset_postdata();// reset lại đối tương wp_query
    ?>