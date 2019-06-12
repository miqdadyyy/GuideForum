<div class="col-md-6 col-lg-4 mb-4 mb-lg-0" style="margin-top: 30px">
    <div class="card-blog">
        <img class="card-img rounded-0" src="/<?php echo $post->image_path ?>" alt="">
        <div class="card-blog-body">
            <a href="/dashboard/post/<?php echo $post->id ?>">
                <h4><?php echo $post->title ?></h4>
            </a>
            <ul class="card-blog-info">
                <li><a href="/dashboard/post/<?php echo $post->id ?>"><span class="align-middle"><i
                                    class="ti-notepad"></i></span><?php echo DateHelper::datetimeToString($post->created_at) ?>
                    </a>
                </li>
                <li><a href="/dashboard/post/<?php echo $post->id ?>"><span class="align-middle"><i
                                    class="ti-comments"></i></span><?php echo $post->comment_count ?>
                        Comments</a></li>
                <br>
                <li>
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
                    <b>Rating <?php echo $post->rating ?></b>
                </li>
            </ul>
            <p><?php echo substr(strip_tags($post->description), 0, 100) ?>...</p>
            <br>
            <a class="button" href="/dashboard/post/<?php echo $post->id ?>">Join</a>
            <a class="button" href="/dashboard/post/<?php echo $post->id ?>/delete">Delete</a>
        </div>
    </div>
</div>