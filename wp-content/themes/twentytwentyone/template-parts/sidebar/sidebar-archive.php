<style>
.sidebar {
    display: flex;
    justify-content: space-between;
}


#sidebar-ben-phai .wp-block-latest-posts__post-title {
    font-size: 10px;
    /* Loại bỏ list-style và text-decoration */
}


.wp-block-latest-posts:not(.is-grid)>li {
    margin-top: unset !important;
    margin-bottom: unset !important;
}


#sidebar-ben-trai {
    width: 100% !important;
}


#sidebar-ben-phai {
    width: 30%;
}


#sidebar-ben-trai ul li {
    position: relative;
}


#sidebar-ben-trai ul li a {
    margin-left: 20px;
}


.box-category {
    width: 100%;
    float: left;
    margin-bottom: 20px;
}


.box-xemnhieu .title-box-category {
    border-bottom: 1px solid #e5e5e5;
    padding-bottom: 0;
    color: #757575;
}


.title-box-category {
    display: block;
    position: relative;
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 12px;
    font-family: "Merriweather", serif;
    color: #222;
    font-weight: bold;
}


.width_common {
    width: 100%;
    float: left;
}


.box-xemnhieu .list-top-view {
    position: relative;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}


.box-xemnhieu .list-top-view:before {
    content: "";
    width: 1px;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    background: #e5e5e5;
}


.box-xemnhieu .list-top-view .item-news:nth-child(1) {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
}


.box-xemnhieu .list-top-view .item-news {
    position: relative;
    padding-left: 45px;
    padding-right: 15px;
    padding-bottom: 15px;
    margin-bottom: 15px;
    width: 50%;
}


.item-news {
    width: 100%;
    float: left;
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid #e5e5e5;
}


.box-xemnhieu .list-top-view .number-top-view {
    font-family: "Merriweather", serif;
    font-size: 48px;
    color: #222;
    font-weight: bold;
    position: absolute;
    top: -14px;
    left: 7px;
    -webkit-font-feature-settings: "pnum"on, "lnum"on;
    font-feature-settings: "pnum"on, "lnum"on;
}


.item-news .title-news {
    font-family: "Merriweather", serif;
    font-size: 14px;
    line-height: 160%;
    margin-bottom: 4px;
}


.box-xemnhieu .list-top-view .item-news:nth-child(1) {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
}


.box-xemnhieu .list-top-view .item-news {
    position: relative;
    padding-left: 45px;
    padding-right: 15px;
    padding-bottom: 15px;
    margin-bottom: 15px;
    width: 50%;
}


.item-news {
    width: 100%;
    float: left;
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid #e5e5e5;
}


* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}


.item-news {
    width: 100%;
    height: 64px;
    float: left;
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid #e5e5e5;
}


.title-news {
    height: 64px;
}


.headlines {
    background: #56bdbf;
    overflow: hidden;
    padding: 20px 28px;
    font-size: 15px;
    font-weight: bold;
}


.headlines ul {
    list-style: none;
    margin: 0;
    padding: 0;
}


.headlines ul>li {
    overflow: hidden;
    display: flex;
    align-items: center;
    margin-bottom: 5px;
    width: 100%;
}


.headlinesdate .headlinesdm,
.news>.headlines .headlinesdate,
.headlinesdate {
    float: left;
    font-family: 'Prata', serif;
}


.headlines .headlinesdate {
    font-size: 0.8em;
    min-width: 55px;
    display: table-cell;
    vertical-align: middle;
}


.headlines ul>li>.headlinestitle {
    display: table-cell;
    vertical-align: middle;
    width: 85%;
}


.headlinesdate .headlinesdm,
.news>.headlines .headlinesdate,
.headlinesdate {
    float: left;
    font-family: 'Prata', serif;
}


.headlinesdate .headlinesyear {
    line-height: 3.5em;
    float: left;
    margin-left: 3px;
}


.headlinesyear {
    color: white;
}


.headlinesday {
    border-bottom: 1px solid #fff;
    color: white;
}


.headlinesmonth {
    color: white;
}


.headlinesdate .headlinesday,
.news>.headlines .headlinesmonth {
    line-height: 1.7em;
}


.headlinesdate .headlinesday,
.news>.headlines .headlinesmonth {
    line-height: 1.7em;
    color: white;
}


.headlines ul>li>.headlinestitle {
    display: table-cell;
    vertical-align: middle;
    width: 85%;
    color: white;
}
</style>


<div class="sidebar w-1/4 rounded h-full bg-white p-3">
    <div class="box-category box-xemnhieu">
        <hgroup class="width_common title-box-category">
            <h2 class="parent-cate active">
                <a data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=TitleBoxXemNieuNhat&amp;vn_term=Desktop"
                    title="Xem nhiều" href="/tin-xem-nhieu" class="inner-title border-b-2 border-red-500"
                    data-itm-added="1">Xem nhiều</a>
            </h2>
        </hgroup>
        <div class="width_common list-top-view">
            <?php
$temp = 0;


$args = array(
'post_type' => 'post',
'posts_per_page' => -1,
'orderby' => 'date', // Sắp xếp theo ngày tạo
'order' => 'DESC', // Thứ tự giảm dần (bài viết mới nhất trước)
);


$query = new WP_Query($args);


if ($query->have_posts()) {
while ($query->have_posts()) {
$query->the_post();
$temp = $temp + 1;
$post_link = get_permalink();
?>
            <article class="item-news">
                <span class="number-top-view"><?php echo $temp; ?></span>
                <h3 class="title-news">
                    <a href="<?php echo $post_link; ?>"
                        data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=0"
                        title="<?php the_title(); ?>" data-itm-added="1"><?php the_title(); ?></a>
                </h3>
            </article>
            <?php
}
wp_reset_postdata();
}
?>
        </div>
    </div>
</div>