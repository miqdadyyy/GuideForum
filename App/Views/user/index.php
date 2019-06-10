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
        <div class="section-intro text-center pb-90px">
            <h2>Forum Diskusi</h2>
            <p>Fowl have fruit moveth male they are that place you will lesser</p>
        </div>
        <div class="row">
            <?php foreach ($posts["data"] as $post) {
                $post = (object) $post;
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
