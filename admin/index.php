<?php
include_once 'admin_assets/includes/config.inc.php';
include_once '../assets/includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KAA Auto Parts - Admin Page</title>
    <link rel="shortcut icon" href="../assets/img/logo-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="admin_assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="admin_assets/css/bootstrap.min.css">
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
                            <a class="nav-link active" href="#">
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
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            Total Products
                            <?php
                            $products = "SELECT * FROM products;";
                            $result = mysqli_query($conn, $products);
                            if ($products_count = mysqli_num_rows($result)) {
                                echo '<h2 class="mb-0" style="padding-top: 5px;">' . $products_count . '</h2>';
                            } else {
                                echo '<h2 class="mb-0" style="padding-top: 5px;">No Data Found</h2>';
                            }
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a href="products.php" class="small text-white stretched-link">View Products</a>
                            <a href="products.php">
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            Total Users
                            <?php
                            $users = "SELECT * FROM users;";
                            $result = mysqli_query($conn, $users);
                            if ($users_count = mysqli_num_rows($result)) {
                                echo '<h2 class="mb-0" style="padding-top: 5px;">' . $users_count . '</h2>';
                            } else {
                                echo '<h2 class="mb-0" style="padding-top: 5px;">No Data Found</h2>';
                            }
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a href="accounts.php" class="small text-white stretched-link">View Users</a>
                            <a href="accounts.php">
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            Total Admins
                            <?php
                            $admins = "SELECT * FROM users WHERE role='1';";
                            $result = mysqli_query($conn, $admins);
                            if ($admins_count = mysqli_num_rows($result)) {
                                echo '<h2 class="mb-0" style="padding-top: 5px;">' . $admins_count . '</h2>';
                            } else {
                                echo '<h2 class="mb-0" style="padding-top: 5px;">No Data Found</h2>';
                            }
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a href="accounts.php" class="small text-white stretched-link">View Users</a>
                            <a href="accounts.php">
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <h2>Add Products</h2>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a href="products-add.php" class="small text-white stretched-link">Add Products</a>
                            <a href="products-add.php">
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-body">
                            <h2>Add Users & Admins</h2>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a href="accounts-add.php" class="small text-white stretched-link">Add Users</a>
                            <a href="accounts-add.php">
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </a>
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
    </div>

    <script src="admin_assets/js/jquery-3.3.1.min.js"></script>
    <script src="admin_assets/js/moment.min.js"></script>
    <script src="admin_assets/js/Chart.min.js"></script>
    <script src="admin_assets/js/bootstrap.min.js"></script>
    <script src="admin_assets/js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function() {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function() {
                updateLineChart();
                updateBarChart();
            });
        })
    </script>
</body>

</html>