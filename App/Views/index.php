<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guide Forum - Home</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/flat-icon/font/flaticon.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-shape">

<!--================ Header Menu Area start =================-->
<?php
include_once "layouts/home/header.php";
?>
<!--================Header Menu Area =================-->


<!-- Jumbotron -->
<section class="hero-banner magic-ball">
    <div class="container">

        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
                <h1>Guide Forum</h1>
                <p>Guide Forum - Merupakan forum untuk berbagi pengalaman wisata Indonesia kepada seluruh warga dunia,
                    untuk
                    menunjukkan betapa indahnya Indonesia yang kita tempati ini</p>
                <a class="button button-hero mt-4" href="#daftar">Gabung kuy</a>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
                <img class="img-fluid" src="img/home/hero-img.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Akhirjumbotron -->


<!--================Service Area Start =================-->
<section class="section-margin generic-margin" id="home">
    <div class="container">
        <div class="section-intro text-center pb-90px">
            <img class="section-intro-img" src="img/home/section-icon.png" alt="">
            <h2>Apa yang akan di dapat <br> di Guide Forum </br></h2>
            <p>Informasi tentang tips dan info tempat lainnya di Indonesia</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-card-img">
                        <img class="img-fluid" src="img/home/service1.png" alt="">
                    </div>
                    <div class="service-card-body">
                        <h3>Find and Share Information</h3>
                        <p>
                            Anda bisa mencari dan berbagi tentang informasi tentang tempat wisata ataupun lainnya di
                            Indonesia
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-card-img">
                        <img class="img-fluid" src="img/home/service2.png" alt="">
                    </div>
                    <div class="service-card-body">
                        <h3>Find Place</h3>
                        <p>
                            Cari tempat yang cocok untuk tujuanmu
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-card-img">
                        <img class="img-fluid" src="img/home/service3.png" alt="">
                    </div>
                    <div class="service-card-body">
                        <h3>Discovery</h3>
                        <p>Temukan tempat yang menarik dan bagi dengan orang lain
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Service Area End =================-->

<!--================Daftar Package section Start =================-->
<section class="section-margin" id="daftar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5 align-self-center mb-5 mb-lg-0">
                <div class="search-content">
                    <h2>Join Us</h2>
                    <p>Jika anda ingi bergabung atau berdiskusi mengenai tempat wisata silahkan bergabung dalam
                        forum</p>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-1">
                <div class="search-wrapper">
                    <h3>Daftar</h3>

                    <form class="search-form" action="/register" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                                <div class="input-group-append">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                <div class="input-group-append">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Username" name="username" required>
                                <div class="input-group-append">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                       required>
                                <div class="input-group-append">

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
                        <div class="form-group">
                            <button class="button border-0 mt-3" type="submit">Daftar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!--================Daftar Package section End =================-->


<!--================Forum section Start =================-->
<section class="section-padding bg-gray" id="forum">
    <div class="container">
        <div class="section-intro text-center pb-90px">
            <img class="section-intro-img" src="img/home/section-icon.png" alt="">
            <h2>Forum Diskusi</h2>
            <p>Fowl have fruit moveth male they are that place you will lesser</p>
        </div>

        <div class="row">
            <?php foreach ($posts["data"] as $post) {
                $post = (object) $post;
                include '../App/Views/layouts/home/post.php';
            } ?>
        </div>
        <div class="text-center">
            <a href="/dashboard" class="button" style="margin-top: 24px;">Join Forum</a>
        </div>
    </div>
</section>
<!--================Forum section End =================-->


<!-- ================ start footer Area ================= -->
<?php
include_once "layouts/dashboard/footer.php";
?>
<!-- ================ End footer Area ================= -->


<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>
<script>
    //Click event handler for nav-items
    $('.nav-item').on('click', function () {

        //Remove any previous active classes
        $('.nav-item').removeClass('active');

        //Add active class to the clicked item
        $(this).addClass('active');
    });
</script>
</body>

</html>
