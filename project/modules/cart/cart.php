<?php
get_header();
?>

<?php
$list_buy = get_list_buy_cart();
// show_array($list_buy);
?>
<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Shopping Cart</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php if ($list_buy != false) {
                                                                                    echo 'Shopping Cart';
                                                                                } else {
                                                                                    echo 'EMPTY';
                                                                                } ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->



<!--================Cart Area =================-->
<?php
if ($list_buy != false) {
?>
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <form action="?mod=cart&act=update" method="post">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($list_buy as $value) {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img style="height: 100px; width: 100px;" src="<?php echo $value['product_thumb']; ?>" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p><a href="<?php echo $value['url']; ?>"><?php echo $value['product_title']; ?></a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5><?php echo currency_format($value['price']); ?></h5>
                                        </td>
                                        <td>
                                            <div class="product_count">
                                                <input type="number" min="1" max="100" name="qty[<?php echo $value['id']; ?>]" data-id="<?php echo $value['id']; ?>" id="sst" maxlength="12" value="<?php echo $value['qty']; ?>" title="Quantity:" class="input-text qty num-order">
                                                <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="fa-solid fa-angle-up"></i></button> -->
                                                <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa-solid fa-angle-down"></i></button> -->
                                            </div>
                                        </td>
                                        <td>
                                            <h5 id="sub-total<?php echo $value['id']; ?>"><?php echo currency_format($value['qty'] * $value['price']); ?></h5>
                                        </td>
                                        <td>
                                            <a href="<?php echo $value['url_delete_cart'] ?>" style="color: red;"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                                <tr class="bottom_button">
                                    <td>
                                        <input class="button" type="submit" value="Update Cart" name="update_cart">
                                        <!-- <a class="button" href="#">Update Cart</a> -->
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <div class="cupon_text d-flex align-items-center">
                                            <a class="button" href="?mod=cart&act=delete_all">Delete All</a>
                                            <a class="primary-btn" href="#">Apply</a>
                                            <a class="button" href="#">Have a Coupon?</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Subtotal</h5>
                                    </td>
                                    <td>
                                        <h5 id="sub_total"><?php echo currency_format(get_total_money()); ?></h5>
                                    </td>
                                </tr>
                                <tr class="shipping_area">
                                    <td class="d-none d-md-block">

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Shipping</h5>
                                    </td>
                                    <td>
                                        <div class="shipping_box">
                                            <ul class="list">
                                                <li><a href="#">Flat Rate: $5.00</a></li>
                                                <li><a href="#">Free Shipping</a></li>
                                                <li><a href="#">Flat Rate: $10.00</a></li>
                                                <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                            </ul>
                                            <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                            <select class="shipping_select">
                                                <option value="1">Bangladesh</option>
                                                <option value="2">India</option>
                                                <option value="4">Pakistan</option>
                                            </select>
                                            <select class="shipping_select">
                                                <option value="1">Select a State</option>
                                                <option value="2">Select a State</option>
                                                <option value="4">Select a State</option>
                                            </select>
                                            <input type="text" placeholder="Postcode/Zipcode">
                                            <a class="gray_btn" href="#">Update Details</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="out_button_area">
                                    <td class="d-none-l">

                                    </td>
                                    <td class="">

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <div class="checkout_btn_inner d-flex align-items-center">
                                            <a class="gray_btn" href="#">Continue Shopping</a>
                                            <a class="primary-btn ml-2" href="#">Proceed to checkout</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                </div>
            </div>
        </div>
    </section>
<?php
}
?>
<!--================End Cart Area =================-->
<?php
get_footer();
?>