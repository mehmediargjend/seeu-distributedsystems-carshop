<?php
include_once 'admin_assets/includes/config.inc.php';
include_once '../assets/includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>KAA Auto Parts - Admin Page</title>
  <link rel="shortcut icon" href="../assets/img/logo-favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <link rel="stylesheet" href="admin_assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="admin_assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="admin_assets/css/templatemo-style.css">
</head>

<body id="reportsPage">
  <nav class="navbar navbar-expand-xl">
    <div class="container h-100">
      <a class="navbar-brand" href="index.php">
        <h1 class="tm-site-title mb-0">KAA Auto Parts - Admin Page</h1>
      </a>
      <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars tm-nav-icon"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto h-100">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fas fa-tachometer-alt"></i>
              Dashboard
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="products.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-shopping-cart"></i>
              <span>
                Products <i class="fas fa-angle-down"></i>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="products.php">View Products</a>
              <a class="dropdown-item" href="products-add.php">Add Product</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="accounts.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
              <span>
                Accounts <i class="fas fa-angle-down"></i>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="accounts.php">View Users</a>
              <a class="dropdown-item" href="accounts-add.php">Add User</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link d-block" href="../assets/includes/logout.inc.php">
              <b>Logout</b>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row tm-content-row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block-products" style="padding: 30px;">
          <h2 class="tm-block-title">List of Products</h2>
          <?php
          if (isset($_GET["report"])) {
            if ($_GET["report"] == "added") {
              echo "<div class='alert alert-success' role='alert'>Product successfully added!</div>";
            }
            if ($_GET["report"] == "edited") {
              echo "<div class='alert alert-success' role='alert'>Product successfully edited!</div>";
            }
            if ($_GET["report"] == "deleted") {
              echo "<div class='alert alert-warning' role='alert'>Product successfully deleted.</div>";
            }
          }
          ?>
          <table class="table table-hover tm-table-medium tm-product-table">
            <thead>
              <tr>
                <td>ID</td>
                <td>Product Name</td>
                <td>Product Price</td>
                <td>Product Image</td>
                <td>Edit</td>
                <td>Delete</td>
              </tr>
            </thead>
            <tbody>
              <?php
              $products = "SELECT * FROM products;";
              $result = mysqli_query($conn, $products);
              if (mysqli_num_rows($result) > 0) {
                foreach ($result as $product) {
              ?>
                  <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['productname'] ?></td>
                    <td><?= $product['productprice'] ?>$</td>
                    <td><img src="../<?= $product['productimage']; ?>" width="60px" height="60px"></td>
                    <td><a href="products-edit.php?id=<?= $product['id']; ?>" class="btn btn-info">Edit</a></td>
                    <td>
                      <form action="admin_assets/includes/products-delete.inc.php" method="POST">
                        <button type="submit" name="deleteproduct" value="<?= $product['id']; ?>" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                <?php
                }
              } else {
                ?>
                <tr>
                  <td colspan="6">No Products Found</td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
          <a href="products-add.php" class="btn btn-primary btn-block text-uppercase mb-3" style="margin-top: 20px;">Add Product</a>
        </div>
      </div>
    </div>
  </div>
  <footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
      <p class="text-center text-white mb-0 px-4 small">
        Copyright &copy; <b>2022</b> – <a rel="nofollow noopener" href="https://instagram.com/refinemk" class="tm-footer-link">Refine</a>
      </p>
    </div>
  </footer>

  <script src="admin_assets/js/jquery-3.3.1.min.js"></script>
  <script src="admin_assets/js/bootstrap.min.js"></script>
  <script>
    $(function() {
      $(".tm-product-name").on("click", function() {
        window.location.href = "edit-product.php";
      });
    });
  </script>
</body>

</html>