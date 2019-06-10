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
<!--                <a class="btn btn-primary btn-sm mx-4 mt-2" role="button" href="#">edit profil</a>-->
            </div>
        </div>

        <div class="row">
            <?php foreach ($posts["data"] as $post) {
                $post = (object) $post;
//                print_r($post);
                include '../App/Views/layouts/dashboard/post.php';
            } ?>
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
