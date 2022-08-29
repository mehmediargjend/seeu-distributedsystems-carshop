<?php
include_once 'assets/includes/header.inc.php';
include_once 'assets/includes/product.inc.php';
?>

<!--== Start Slider Area Wrapper ==-->
<div class="slider-area-wrapper">
    <div class="slider-content-active">
        <div class="slider-slide-item bg-img" data-bg="assets/img/slider/slider-1.jpg">
            <div class="container container-wide h-100">
                <div class="row align-items-center h-100">
                    <div class="col-lg-6">
                        <div class="slide-content">
                            <div class="slide-content-inner">
                                <h3>NEW TECHNOLOGY & BUILD</h3>
                                <h2>WHEELS &amp; TIRES COLLECTIONS</h2>
                                <a class="btn btn-white" href="shop.php">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-slide-item bg-img" data-bg="assets/img/slider/slider-2.jpg">
            <div class="container container-wide h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <div class="slide-content">
                            <div class="slide-content-inner">
                                <h3>FINEST QUALITY PARTS</h3>
                                <h2>CHECK OUT <br> OUR STOCK</h2>
                                <a class="btn btn-white" href="shop.php">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Slider Area Wrapper ==-->

<!--== Start Banner Area Wrapper ==-->
<div class="banner-area-wrapper banner-mt">
    <div class="container container-wide">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="banner-item">
                    <div class="banner-item__img">
                        <a href="#"><img src="assets/img/banner/banner-1.jpg" alt="Banner" /></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="banner-item">
                    <div class="banner-item__img">
                        <a href="#"><img src="assets/img/banner/banner-2.jpg" alt="Banner" /></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="banner-item">
                    <div class="banner-item__img">
                        <a href="#"><img src="assets/img/banner/banner-3.jpg" alt="Banner" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Banner Area Wrapper ==-->

<!--== Start Call to Action Area ==-->
<div class="call-to-action-area sm-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="call-to-action-item mt-0">
                    <div class="call-to-action-item__icon">
                        <img src="assets/img/icons/icon-1.png" alt="fast delivery">
                    </div>
                    <div class="call-to-action-item__info">
                        <h3>Free Home Delivery</h3>
                        <p>Provide free home delivery
                            for all product over $100</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="call-to-action-item">
                    <div class="call-to-action-item__icon">
                        <img src="assets/img/icons/icon-2.png" alt="quality">
                    </div>
                    <div class="call-to-action-item__info">
                        <h3>Quality Products</h3>
                        <p>We ensure our product
                            quality all times</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="call-to-action-item">
                    <div class="call-to-action-item__icon">
                        <img src="assets/img/icons/icon-3.png" alt="return">
                    </div>
                    <div class="call-to-action-item__info">
                        <h3>Online Support</h3>
                        <p>To satisfy our customer we try
                            to give support online</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Call to Action Area ==-->

<!--== Start Best Seller Products Area ==-->
<div class="best-seller-products-area sm-top">
    <div class="container container-wide">
        <div class="row">
            <div class="col-lg-5 m-auto text-center">
                <div class="section-title">
                    <h2 class="h3">Best Seller</h2>
                    <p>All best seller product are now available for you and your can buy
                        this product from here any time any where so shop now</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="product-wrapper">
                    <div class="product-carousel">
                        <?php
                        $result = getProduct();
                        for ($i = 1; $i <= 4; $i++) {
                            $row = mysqli_fetch_assoc($result);
                            insertProduct($row['id'], $row['productname'], $row['productprice'], $row['productimage']);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Best Seller Products Area ==-->

<!--== Start Call to action Wrapper ==-->
<div class="call-to-action-area">
    <div class="call-to-action-content-area bg-img" data-bg="assets/img/bg/bg-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="call-to-action-txt">
                        <h2>EVERYTHING YOU NEED, <br> IN ONE PLACE</h2>
                        <a href="shop.php" class="btn btn-brand">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Call to action Wrapper ==-->

<!--== Start Newsletter Area ==-->
<div class="newsletter-area-wrapper">
    <div class="container container-wide">
        <div class="newsletter-area-inner bg-img" data-bg="assets/img/bg/newsletter-bg.jpg">
            <div class="row">
                <div class="col-lg-8 col-xl-5 m-auto">
                    <div class="newsletter-content text-center">
                        <h4>SPECIAL <span>OFFER</span> FOR SUBSCRIPTION</h4>
                        <h2>GET INSTANT DISCOUNT FOR MEMBERSHIP</h2>
                        <p>Subscribe our newsletter and all latest news of our <br>latest product, promotion and offers
                        </p>

                        <div class="newsletter-form-wrap">
                            <form action="#" method="post">
                                <div class="form-content">
                                    <input type="email" placeholder="Enter your email here" />
                                    <button class="btn-newsletter">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Newsletter Area ==-->

<?php
include_once 'assets/includes/footer.inc.php';
?>