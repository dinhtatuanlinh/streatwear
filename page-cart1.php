<?php
    get_header();

?>
<div class="wrapper">
    <div class="w3-row-padding">
        <div class="w3-col s12 m4 l4">
            <div class="total">
                <div class="text">Total: </div>
                <div class="totalprice"></div>
            </div>
            <div class="items">
                <div class="itemthumbnail"><img src="" alt=""></div>
                <div class="itemname"><div class="name"></div><div class="material"></div><div class="option"></div></div>
                <div class="unitprice"></div>
            </div>
            <div class="discount"><input type="text"></div>
            <div class="shipping"><p>Shipping</p><div class="shippingprice"></div></div>
        </div>
        <div class="w3-col s12 m8 l8">
            <div class="info">Thông tin khách hàng</div>
            
        </div>
    </div>
</div>
<?php
    get_footer();
?>