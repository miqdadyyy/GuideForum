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
    .single-post img, .blog_details img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .title {
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
                            <i class="fa fa-calendar"></i>
                            &nbsp; <?php echo DateHelper::datetimeToString($post->created_at) ?>
                        </div>
                        <div style="float: right">
                            <?php $fixed_rating = floor($post->rating) ?>
                            <?php for ($i = 1;
                                       $i <= 5;
                                       $i++) { ?>
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
                    Rate this :
                    <div class="d-sm-flex justify-content-between text-center">
                        <?php if(!Rating::checkRating($post->id, $user->id)) { ?>
                        <form id="ratingsForm">
                            <input type="hidden" name="id_post" id="" value="<?php echo $post->id ?>">
                            <div class="stars">
                                <input type="radio" name="star" class="star-1" id="star-1" value="1"/>
                                <label class="star-1" for="star-1">1</label>
                                <input type="radio" name="star" class="star-2" id="star-2" value="2"/>
                                <label class="star-2" for="star-2">2</label>
                                <input type="radio" name="star" class="star-3" id="star-3" value="3"/>
                                <label class="star-3" for="star-3">3</label>
                                <input type="radio" name="star" class="star-4" id="star-4" value="4"/>
                                <label class="star-4" for="star-4">4</label>
                                <input type="radio" name="star" class="star-5" id="star-5" value="5"/>
                                <label class="star-5" for="star-5">5</label>
                                <span></span>
                            </div>
                        </form>
                        <?php } ?>
                        <h5 id="success-rating" <?php echo !Rating::checkRating($post->id, $user->id) ? 'hidden' : '' ?>>Thanks for rating this post</h5>
                        <br>
                        <ul class="social-icons">
                            <li><p class="comment-count"><span class="align-middle"><i
                                                class="far fa-comment"></i></span><?php echo count($post->comments) ?>
                                </p></li>
                        </ul>
                    </div>
                    <div class="comments-area">
                        <h4><?php echo count($post->comments) ?> Response</h4>
                        <?php foreach ($post->comments as $comment) { ?>
                            <?php include '../App/Views/layouts/dashboard/comment.php' ?>
                        <?php } ?>
                    </div>
                    <div class="comment-form">
                        <h4>Reply</h4>
                        <form class="form-contact comment_form" action="/comment/store" id="commentForm" method="post">
                            <input type="hidden" name="id_post" value="<?php echo $post->id ?>">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30"
                                                  rows="9" placeholder="Write Comment"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="button button-contactForm">Send Message</button>
                                    </div>
                                </div>
                        </form>
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
