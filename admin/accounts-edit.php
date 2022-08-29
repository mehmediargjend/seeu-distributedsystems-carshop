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
  <div class="" id="home">
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
              <a class="nav-link dropdown-toggle" href="products.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <a class="nav-link active dropdown-toggle" href="accounts.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="col-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <h2 class="tm-block-title">Edit User</h2>
            <?php
            if (isset($_GET['id'])) {
              $id = $_GET['id'];
              $sql = "SELECT * FROM users WHERE id='$id';";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                foreach ($result as $row) {
            ?>
                  <form action="admin_assets/includes/accounts-edit.inc.php" method="POST">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <div class="row">
                      <div class="col-md-12 mb-3" style="color: white;">

                        <label for="">Username</label>
                        <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control" required>

                        <label for="" style="padding-top: 20px;">Email</label>
                        <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" required>

                        <label for="" style="padding-top: 20px;">Role</label>
                        <select name="role" class="form-control" style="padding: 6px 10px;" required>
                          <option value="1" <?= $row['role'] == '1' ? 'selected' : '' ?>>Admin</option>
                          <option value="0" <?= $row['role'] == '0' ? 'selected' : '' ?>>User</option>
                        </select>

                        <button type="submit" name="updateuser" class="btn btn-primary" style="margin-top: 20px;">Update User</button>
                      </div>
                    </div>
                  </form>
                <?php
                }
              } else {
                ?>
                <h4>Invalid Record</h4>
            <?php
              }
            }
            ?>
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
  </div>

  <script src="admin_assets/js/jquery-3.3.1.min.js"></script>
  <script src="admin_assets/js/bootstrap.min.js"></script>
</body>

</html>