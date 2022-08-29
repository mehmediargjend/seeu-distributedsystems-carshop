<?php
include_once 'assets/includes/header.inc.php';
?>

<div>
    <div class="container" style="padding: 70px 70px;">
        <h2 style="font-size: 32px; font-family: Poppins, sans-serif; text-align: center;">Sign Up</h2>
        <p style="text-align: center;">Fill in your information to register.</p>
        <div style="display: block; text-align: center;">
            <form action="assets/includes/register.inc.php" method="post" style="display: inline-block; margin-left: auto; margin-right: auto; text-align: center;">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-brand" type="submit" name="submit">Register</button>
                </div>
                <p>Already have an account? <a href="login.php" style="color: #eeb644;">Login!</a></p>

                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "missinginput") {
                        echo "<div class='alert alert-warning' role='alert'>Please fill in all of the fields!</div>";
                    } else if ($_GET["error"] == "nopasswordmatch") {
                        echo "<div class='alert alert-warning' role='alert'>Passwords don't match!</div>";
                    } else if ($_GET["error"] == "takenusername") {
                        echo "<div class='alert alert-warning' role='alert'>Username is already taken.</div>";
                    } else if ($_GET["error"] == "stmtfail") {
                        echo "<div class='alert alert-warning' role='alert'>Something went wrong. Please try again later.</div>";
                    } else if ($_GET["error"] == "noregistererror") {
                        echo "<div class='alert alert-success' role='alert'>
                        <h5 class='alert-heading'>Welcome aboard!</h4>
                        <p>You are now successfully registered to KAA Auto Parts' website. Shop around!</p>";
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