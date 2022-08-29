<?php
include_once 'assets/includes/header.inc.php';
?>

<!--== Start Page Header Area ==-->
<div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content">
                    <div class="page-header-content-inner">
                        <h1>Contact</h1>

                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-content-wrapper sm-top">
    <div class="contact-page-content">
        <div class="contact-info-wrapper">
            <div class="container">
                <div class="row mtn-30">
                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-ios-location-outline"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Our Location</h4>
                                <p>Skopje 1000, North Macedonia</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-iphone"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Call Us</h4>
                                <p>Mobile: 070 514 014</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-ios-email-outline"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Write Us</h4>
                                <p>argjendmehmeti@outlook.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-form-wrapper sm-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-content">
                            <h2>Get In Touch</h2>

                            <div class="contact-form-wrap">
                                <form action="assets/includes/mail.php" method="post" id="contact-form">
                                    <div class="contact-form-inner">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item">
                                                    <label class="sr-only" for="name">name</label>
                                                    <input type="text" name="name" id="name" placeholder="Name" required />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-item">
                                                    <label class="sr-only" for="email">email</label>
                                                    <input type="email" name="email" id="email" placeholder="Email" required />
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-item">
                                                    <label class="sr-only" for="subject">subject</label>
                                                    <input type="text" name="subject" id="subject" placeholder="Subject" required />
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-item">
                                                    <label class="sr-only" for="message">message</label>
                                                    <textarea name="message" id="message" cols="30" rows="8" placeholder="Write Message" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-item">
                                                    <button class="btn btn-brand">Send a Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form Submission Notification -->
                                    <div class="form-message"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-map-wrapper sm-top">
            <div id="map_content" class="h-100" data-lat="41.9981" data-lng="21.4254" data-zoom="7"></div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->

<?php
include_once 'assets/includes/footer.inc.php';
?>