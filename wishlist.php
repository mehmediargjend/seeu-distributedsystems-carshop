<?php
include_once 'assets/includes/header.inc.php';
include_once 'assets/includes/config.inc.php';
$userid = $_SESSION['userid'];
?>

<!--== Start Page Content Wrapper ==-->
<div class="page-content-wrapper sp-y">
    <div class="wishlist-page-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shopping-cart-list-area">
                        <div class="shopping-cart-table table-responsive">
                            <table class="table table-bordered text-center mb-0">
                                <thead>
                                    <h2 style="text-align: center;">My Wishlist</h2>
                                    <tr>
                                        <th>Products</th>
                                        <th>Price</th>
                                        <th>Cart</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM wishlist JOIN products ON products.id = wishlist.productid WHERE $userid = wishlist.userid;";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr>
                                                <td class="product-list">
                                                    <div class="cart-product-item d-flex align-items-center">
                                                        <div class="remove-icon">
                                                            <a href="assets/includes/deleteFromWishlist.inc.php?productid=<?php echo $row['productid'] ?>"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                        <a href="single-product.php" class="product-thumb">
                                                            <img src="<?php echo $row['productimage'] ?>" alt="Product" />
                                                        </a>
                                                        <a href="#" class="product-name"><?php echo $row['productname'] ?></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="price">$<?php echo $row['productprice'] ?></span>
                                                </td>
                                                <td class="add-cart">
                                                    <a href="assets/includes/addToCart.inc.php?id=<?php echo $row['productid'] ?>" class="btn btn-brand">Add to Cart</a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
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