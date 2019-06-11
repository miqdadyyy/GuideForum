<div class="comment-list bg-gray" style="margin-bottom: 48px; padding: 24px 32px; border-radius: 16px;">
    <div class="single-comment justify-content-between d-flex">
        <div class="user justify-content-between d-flex">
            <div class="thumb">
                <img src="<?php echo $comment->user->photo ?>" alt="">
            </div>
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <h5>
                        <b><?php echo $comment->user->name ?></b> <p style="font-weight: normal"><?php echo DateHelper::datetimeToStringWithTime($comment->created_at) ?></p>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="desc" style="margin-top: 12px;">
        <p class="comment">
            <?php echo $comment->comments ?>
        </p>
    </div>
</div>