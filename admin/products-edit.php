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

<body>
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
  <div class="container tm-mt-big tm-mb-big">
    <div class="row">
      <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12">
              <h2 class="tm-block-title d-inline-block">Edit Product</h2>
            </div>
          </div>
          <div class="row tm-edit-product-row">
            <div class="col-xl-12 col-lg-12 col-md-12">
              <?php
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM products WHERE id='$id';";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_array($result);
              ?>

                  <form action="admin_assets/includes/products-edit.inc.php" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="form-group mb-3">
                      <label for="name">Product Name</label>
                      <input type="text" name="productname" value="<?php echo $row['productname']; ?>" class="form-control validate" required />
                    </div>

                    <div class="form-group mb-3">
                      <label for="name">Product Price</label>
                      <input type="number" name="productprice" value="<?php echo $row['productprice']; ?>" class="form-control validate" required />
                    </div>

                    <div class="form-group mb-3">
                      <label for="name">Product Image</label>
                      <input type="file" name="productimage" value="<?php echo $row['productimage']; ?>" class="form-control validate" style="padding: 10px 10px;" />
                    </div>

            </div>
            <div class="col-12">
              <button type="submit" name="editproduct" class="btn btn-primary btn-block text-uppercase">Update Product</button>
            </div>

            </form>

          <?php
                } else {
          ?>
            <h4>No Products Found</h4>
        <?php
                }
              }
        ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="tm-footer row tm-mt-small" style="position:absolute; bottom:0; width:100%;">
    <div class="col-12 font-weight-light">
      <p class="text-center text-white mb-0 px-4 small">
        Copyright &copy; <b>2022</b> – <a rel="nofollow noopener" href="https://instagram.com/refinemk" class="tm-footer-link">Refine</a>
      </p>
    </div>
  </footer>

  <script src="admin_assets/js/jquery-3.3.1.min.js"></script>
  <script src="admin_assets/js/bootstrap.min.js"></script>
  <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
  <script>
    $(function() {
      $("#expire_date").datepicker();
    });
  </script>
</body>

</html>