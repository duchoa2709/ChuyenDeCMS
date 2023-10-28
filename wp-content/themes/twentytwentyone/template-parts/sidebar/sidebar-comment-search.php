<style>
    /* CSS Test begin */
    .comment-box {
        margin-top: 30px !important;
    }


    /* CSS Test end */


    .comment-box img {
        width: 50px;
        height: 50px;
    }


    .comment-box .media-left {
        padding-right: 10px;
        width: 65px;
    }


    .comment-box .media-body p {
        border: 1px solid #ddd;
        padding: 10px;
    }


    .comment-box .media-body .media p {
        margin-bottom: 0;
    }


    .comment-box .media-body .media-heading {
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        padding: 7px 10px;
        position: relative;
        margin-bottom: -1px;
    }


    .comment-box .media-heading:before {
        content: "";
        width: 12px;
        height: 12px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        border-width: 1px 0 0 1px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        position: absolute;
        top: 10px;
        left: -6px;
    }
  .media .media-body h4{
        background-color: #f5f5f5;
    }
    body{
        background-color: white;
    }
    .media-body p{
        margin-bottom: 15px;
    }
 .row   .media .media-body .media .media-body p{
        margin-bottom: 15px;
    }
</style>
<div class="container">
<?php
        $comments = get_comments(); // Lấy tất cả bình luận


        if ($comments) {
            $comment_ids = [];
            // Trước tiên, lặp qua các bình luận để lấy các bình luận cha
            foreach ($comments as $comment) {
                if ($comment->comment_parent == 0) {
                    $comment_ids[] = $comment->comment_ID;
                    ?>
    <div class="row ">
       
                    <div class="media comment-box">
                        <div class="media-left">
                            <a href="#">
                                <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            </a>
                        </div>
                        <div class="media-body ">
                            <h4 class="media-heading">
                                <?php echo $comment->comment_author; ?>
                            </h4>
                            <p>
                                <?php echo $comment->comment_content; ?>
                            </p>
                            <?php
                            // Vòng lặp lồng nhau cho phản hồi bình luận
                            foreach ($comments as $reply) {
                                if ($reply->comment_parent == $comment->comment_ID) {
                                    ?>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <?php echo $reply->comment_author; ?>
                                            </h4>
                                            <p class="non">
                                                <?php echo $reply->comment_content; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
             
    </div>
    <?php
                }
            }
        }
        ?>
</div>


