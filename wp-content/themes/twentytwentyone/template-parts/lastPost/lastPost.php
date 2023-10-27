<style>
    ul.timeline {
        list-style-type: none;
        position: relative;
    }

    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 0;
        width: 2px;
        height: 100%;
        z-index: 400;
        top: 10px;
    }

    ul.timeline>li {
        margin: 20px 0;
        padding-left: 20px;
    }

    ul.timeline>li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: -9px;
        width: 20px;
        height: 20px;
        z-index: 400;
        margin-top: 1px;
    }

    .title_date a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
    }

    .title_date .hover_link:hover {
        text-decoration: underline;
        text-decoration-skip-ink: none;
        color: #0056b3;

    }

</style>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h4 class="font-bold text-3xl">Latest News</h4>
            <ul class="timeline">
                <?php foreach ($posts as $post) : setup_postdata($post); ?>
                    <li>
                        <div class="title_date">
                            <a target="_blank" href="<?php the_permalink(); ?>" class="hover_link">
                                <?php the_title(); ?>
                            </a>
                            <a href="#" class="float-right hover_link">
                                <?php the_time('F j, Y'); ?>
                            </a>
                        </div>
                        <p>
                            <?php
                            $post_content = get_the_content();
                            $limit = 180;
                            if (strlen($post_content) >= $limit) {
                                $limited_content = substr($post_content, 0, $limit);
                                echo $limited_content . "[...]";
                            } else {
                                echo $post_content;
                            }
                            ?>
                        </p>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</div>
