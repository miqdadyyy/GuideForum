<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php
    include_once '../App/Views/layouts/dashboard/header.php'
    ?>
</head>
<body>

<!--================ Header Menu Area start =================-->
<?php
include_once "../App/Views/layouts/dashboard/navbar.php";
?>
<style>
    .single-post img, .blog_details img{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .title{
        margin-bottom: 30px;
    }
</style>
<!--================Header Menu Area =================-->

<section class="blog_area single-post-area section-margin">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="title">
                        <h2><?php echo $post->title ?></h2>
                        <div style="float: left">
                            <i class="fa fa-calendar"></i>  &nbsp; <?php echo DateHelper::datetimeToString($post->created_at) ?>
                        </div>
                        <div style="float: right">
                            <?php $fixed_rating = floor($post->rating) ?>
                            <?php for ($i = 1;
                                       $i <= 5;
                                       $i++){ ?>
                                <?php if ($i <= $fixed_rating) { ?>
                                    <span class="fa fa-star checked"></span>
                                <?php } else { ?>
                                    <span class="ti ti-star checked"></span>
                                <?php } ?>
                            <?php } ?>
                            (<?php echo $post->rating ?>)
                        </div>
                        <br>

                    </div>
                    <div class="feature-img justify-content-center">
                        <img class="img-fluid" src="/<?php echo $post->image_path ?>" alt="">
                    </div>
                    <div class="blog_details">
                        <?php echo $post->description ?>
                    </div>
                    <br>

                </div>
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> Lily and 4 people like this</p>
                        <ul class="social-icons">
                            <li><p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span><?php echo $post->comment_count ?></p></li>
                        </ul>
                    </div>
                    <div class="comment-form">
                        <h4>Response</h4>
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="button button-contactForm">Send Message</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="comments-area">
                        <h4>05 Response</h4>
                        <div class="comment-list bg-gray" style="margin-bottom: 48px; padding: 24px 32px; border-radius: 16px;">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="../img/blog/c1.png" alt="">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Emilly Blunt</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="desc" style="margin-top: 12px;">
                                <p class="comment">
                                    Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                </p>
                            </div>
                        </div>
                        <div class="comment-list bg-gray" style="margin-bottom: 48px; padding: 24px 32px; border-radius: 16px;">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="../img/blog/c1.png" alt="">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Emilly Blunt</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="desc" style="margin-top: 12px;">
                                <p class="comment">
                                    Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
</section>

<!-- ================ start footer Area ================= -->
<?php
include_once "../App/Views/layouts/dashboard/footer.php";
?>
<!-- ================ End footer Area ================= -->
</body>
</html>
