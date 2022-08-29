<?php

include_once 'config.inc.php';

function database()
{
    static $conn;
    if ($conn === NULL) {
        $serverName = 'localhost';
        $databaseUser = 'user1';
        $databasePass = '';
        $databaseName = 'carshop';
        $conn = mysqli_connect($serverName, $databaseUser, $databasePass, $databaseName);
    }
    return $conn;
}

function getProduct()
{
    $conn = database();
    $sql = "SELECT * FROM products;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}

function insertProduct($productid, $productname, $productprice, $productimage)
{
    $product = '
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="product-item">
            <div class="product-item__thumb">
                <img class="thumb-primary" src="' . $productimage . '" alt="Product" />
                <img class="thumb-secondary" src="' . $productimage . '" alt="Product" />
    
                <div class="ratting">
                    <span><i class="ion-android-star"></i></span>
                    <span><i class="ion-android-star"></i></span>
                    <span><i class="ion-android-star"></i></span>
                    <span><i class="ion-android-star"></i></span>
                    <span><i class="ion-android-star-half"></i></span>
                </div>
            </div>
    
            <div class="product-item__content">
                <div class="product-item__info">
                    <h4 class="title">' . $productname . '</h4>
                    <span class="price"><strong>Price:</strong> ' . $productprice . '$</span>
                </div>
    
                <div class="product-item__action">
                    <!-- <button type="submit" name="addtocart" class="btn-add-to-cart">Add<i class="ion-bag"></i></button> -->
                    <!-- <button type="submit" name="addtowishlist" class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button> -->
                    <a href="assets/includes/addToCart.inc.php?id=' . $productid . '" name="addtocart" class="btn-add-to-cart"><i class="ion-bag"></i></a>
                    <a href="assets/includes/addToWishlist.inc.php?id=' . $productid . '" name="addtowishlist" class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></a>
                </div>
    
                <div class="product-item__desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam velit metus,
                        aliquam non justo eget, placerat hendrerit arcu. Sed ipsum magna, dapibus eu quam sed,
                        consectetur pharetra dolor. Vivamus blandit urna quis bibendum sollicitudin.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam velit metus,
                        aliquam non justo eget, placerat hendrerit arcu. Sed ipsum magna, dapibus eu quam sed,
                        consectetur pharetra dolor. Vivamus blandit urna quis bibendum sollicitudin.</p>
                </div>
            </div>
    
            <div class="product-item__sale">
                <span class="sale-txt">25%</span>
            </div>
        </div>
    </div>
    ';
    echo $product;
}
