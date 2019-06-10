<div class="col-md-6 col-lg-4 mb-4 mb-lg-0" style="margin-top: 30px">
    <div class="card-blog">
        <img class="card-img rounded-0" src="/<?php echo $post->image_path ?>" alt="">
        <div class="card-blog-body">
            <a href="#">
                <h4><?php echo $post->title ?></h4>
            </a>
            <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span><?php echo DateHelper::datetimeToString($post->created_at) ?></a>
                </li>
                <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span><?php echo $post->comment_count ?> Comments</a></li>
            </ul>
            <p><?php echo substr(strip_tags($post->description),0,100) ?></p>
            <br>
            <a class="button" href="#">Join Forum</a>

        </div>
    </div>
</div>