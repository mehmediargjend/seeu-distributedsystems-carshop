<?php
include_once 'assets/includes/header.inc.php';
include_once 'assets/includes/config.inc.php';
$cart = $_SESSION['cart'];
?>

<!--== Start Page Header Area ==-->
<div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content">
                    <div class="page-header-content-inner">
                        <h1>Shopping Cart</h1>

                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li class="current"><a href="#">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-content-wrapper sp-y">
    <div class="cart-page-content-wrap">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping-cart-list-area">
                        <div class="shopping-cart-table table-responsive">
                            <table class="table table-bordered text-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $pricesum = 0;
                                    foreach ($cart as $key => $value) {
                                        $sql = "SELECT * FROM products WHERE id = $key;";
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        $pricesum += $row['productprice'];
                                    ?>
                                        <tr>
                                            <td class="product-list">
                                                <div class="cart-product-item d-flex align-items-center">
                                                    <div class="remove-icon">
                                                        <a href="assets/includes/deleteFromCart.inc.php?id=<?php echo $key; ?> "><i class="fa fa-trash-o"></i></a>
                                                    </div>
                                                    <a href="#" class="product-thumb">
                                                        <img src="<?php echo $row['productimage'] ?>" alt="Product" />
                                                    </a>
                                                    <a href="#" class="product-name"><?php echo $row['productname'] ?></a>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="price">$<?php echo $row['productprice'] ?></span>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-coupon-update-area d-sm-flex justify-content-between align-items-center">
                            <div class="coupon-form-wrap">
                                <form action="#" method="post">
                                    <label for="coupon" class="sr-only">Coupon Code</label>
                                    <input type="text" id="coupon" placeholder="Coupon Code" />
                                    <button class="btn-apply">Apply Button</button>
                                </form>
                            </div>

                            <!-- <div class="cart-update-buttons mt-15 mt-sm-0">
                                    <button class="btn-clear-cart">Clear Cart</button>
                                    <button class="btn-update-cart">Update Cart</button>
                                </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Cart Calculate Area -->
                    <div class="cart-calculate-area mt-sm-40 mt-md-60">
                        <h5 class="cal-title">Cart Totals</h5>

                        <div class="cart-cal-table table-responsive">
                            <table class="table table-borderless">
                                <!-- <tr class="cart-sub-total">
                                        <th>Subtotal</th>
                                        <td>$289.89</td>
                                    </tr> -->
                                <!-- <tr class="shipping">
                                        <th>Shipping</th>
                                        <td>
                                            <ul class="shipping-method">
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="flat_shipping" name="shipping_method" class="custom-control-input" checked />
                                                        <label class="custom-control-label" for="flat_shipping">From Russia</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="free_shipping" name="shipping_method" class="custom-control-input" />
                                                        <label class="custom-control-label" for="free_shipping">From USA</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr> -->
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><b>$<?php echo $pricesum; ?></b></td>
                                </tr>
                            </table>
                        </div>

                        <div class="proceed-checkout-btn">
                            <a href="checkout.php" class="btn btn-brand d-block">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->

<?php
include_once 'assets/includes/footer.inc.php';
?>