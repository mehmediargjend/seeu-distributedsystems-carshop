<?php
include_once 'assets/includes/header.inc.php';
include_once 'assets/includes/product.inc.php';
?>

<!--== Start Page Header Area ==-->
<div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content">
                    <div class="page-header-content-inner">
                        <h1>Shop</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><a href="#">Shop</a></li>
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
    <div class="shop-page-action-bar mb-30">
        <div class="container container-wide">
            <div class="action-bar-inner">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="shop-layout-switcher mb-15 mb-sm-0">
                            <ul class="layout-switcher nav">
                                <li data-layout="grid" class="active"><i class="fa fa-th"></i></li>
                                <li data-layout="list"><i class="fa fa-th-list"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="sort-by-wrapper">
                            <label for="sort" class="sr-only">Sort By</label>
                            <select name="sort" id="sort">
                                <option value="sbp">Sort By Popularity</option>
                                <option value="sbn">Sort By Newest</option>
                                <option value="sbt">Sort By Trending</option>
                                <option value="sbr">Sort By Rating</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shop-page-product">
        <div class="container container-wide">
            <div class="product-wrapper product-layout layout-grid">
                <div class="row mtn-30">
                    <?php
                    $result = getProduct();
                    while ($row = mysqli_fetch_assoc($result)) {
                        insertProduct($row['id'], $row['productname'], $row['productprice'], $row['productimage']);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="shop-page-action-bar mt-30">
        <div class="container container-wide">
            <div class="action-bar-inner">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <nav class="pagination-wrap mb-10 mb-sm-0">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-sm-6 text-center text-sm-right">
                        <p>Showing 1–12 of 26 results</p>
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