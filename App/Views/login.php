<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login - Traveller</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="vendors/flat-icon/font/flaticon.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/skrollr.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<!-- header -->
<?php
include_once "layouts/home/header.php";
?>

<!-- content -->
<section class="section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5 align-self-center mb-5 mb-lg-0">
                <div class="search-content">
                    <h2>Masuk untuk bergabung berdiskusi dengan seluruh orang yang ada diseluruh penjuru dunia<br
                                class="d-none d-xl-block"></h2>
                    <p>Masuk untuk memulai berdiskusi tempat wisata yang ada di seluruh Indonesia</p>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-1">
                <div class="search-wrapper">
                    <h3>Login</h3>
                    <form class="search-form" action="/login" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Username or Email" name="username" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="ti-eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($errors)) { ?>
                            <div class="errors">
                                <ul>
                                    <?php foreach ($errors as $error) { ?>
                                        <li><?php echo $error ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                        <p>Tidak memiliki akun? Silahkan <a href="/#daftar">Register</a></p>
                        <div class="form-group">
                            <button class="button border-0 mt-3" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php
include_once "layouts/home/footer.php";
?>

</body>
</html>
