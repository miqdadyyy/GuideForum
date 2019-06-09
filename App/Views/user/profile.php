<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    include_once '../App/Views/layouts/dashboard/header.php'

    ?>
</head>

<body class="bg-shape">

<!--================ Header Menu Area start =================-->
<?php
include_once "../App/Views/layouts/dashboard/navbar.php";
?>
<!--================Header Menu Area =================-->

<!--================Blog section Start =================-->

<section class="section-padding bg-gray">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-11 col-md-11 col-sm-11 bg-white px-3 py-5">
                <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="<?php echo $user->photo ?>" alt="" class="px-3" width="150">
                        <div class="media-body">
                            <h4><b><?php echo $user->name ?></b></h4>
                            <p>Username : <?php echo $user->username ?></p>
                            <p>Email : <?php echo $user->email ?></p>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary btn-sm mx-4 mt-2" role="button" href="#">edit profil</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="../img/F1.jpg" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a>
                            </li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03
                                    Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent
                            vehicula
                            parturient </p>
                        <br>
                        <a class="button" href="#">Join Forum</a>

                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="../img/F2.jpg" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a>
                            </li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03
                                    Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent
                            vehicula
                            parturient </p>
                        <br>
                        <a class="button" href="#">Join Forum</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="../img/F3.jpg" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a>
                            </li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03
                                    Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent
                            vehicula
                            parturient </p>
                        <br>
                        <a class="button" href="#">Join Forum</a>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="../img/F1.jpg" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a>
                            </li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03
                                    Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent
                            vehicula
                            parturient </p>
                        <br>
                        <a class="button" href="#">Join Forum</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="../img/F2.jpg" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a>
                            </li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03
                                    Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent
                            vehicula
                            parturient </p>
                        <br>
                        <a class="button" href="#">Join Forum</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="../img/F3.jpg" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a>
                            </li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03
                                    Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent
                            vehicula
                            parturient </p>
                        <br>
                        <a class="button" href="#">Join Forum</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="../img/F1.jpg" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a>
                            </li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03
                                    Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent
                            vehicula
                            parturient </p>
                        <br>
                        <a class="button" href="#">Join Forum</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="../img/F2.jpg" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a>
                            </li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03
                                    Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent
                            vehicula
                            parturient </p>
                        <br>
                        <a class="button" href="#">Join Forum</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="../img/F3.jpg" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a>
                            </li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03
                                    Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent
                            vehicula
                            parturient </p>
                        <br>
                        <a class="button" href="#">Join Forum</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--================Blog section End =================-->


<!-- ================ start footer Area ================= -->
<?php
include_once "../App/Views/layouts/dashboard/footer.php";
?>
<!-- ================ End footer Area ================= -->

</body>

</html>
