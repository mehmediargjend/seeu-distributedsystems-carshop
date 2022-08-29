<?php
include_once 'assets/includes/header.inc.php';
?>

<div>
    <div class="container" style="padding: 100px 100px;">
        <h2 style="font-size: 32px; font-family: Poppins, sans-serif; text-align: center;">Login</h2>
        <p style="text-align: center;">Please fill in your credentials to login.</p>
        <div style="display: block; text-align: center;">
            <form action="assets/includes/login.inc.php" method="post" style="display: inline-block; margin-left: auto; margin-right: auto; text-align: center;">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-brand" type="submit" name="submit">Login</button>
                </div>
                <p>Not registered? <a href="register.php" style="color: #eeb644;">Sign up now</a>.</p>

                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "missinginput") {
                        echo "<div class='alert alert-warning' role='alert'>Please fill in all of the fields!</div>";
                    } else if ($_GET["error"] == "loginerror") {
                        echo "<div class='alert alert-danger' role='alert'>Error logging in! Please try again.</div>";
                    }
                }
                ?>
            </form>
        </div>
    </div>
</div>

<?php
include_once 'assets/includes/footer.inc.php';
?>