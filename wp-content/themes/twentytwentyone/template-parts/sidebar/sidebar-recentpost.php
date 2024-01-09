<style>
.sidebar {
    display: flex;
    justify-content: space-between;
}

#sidebar-ben-phai .wp-block-latest-posts__post-title {
    font-size: 10px;
    list-style: none;
    text-decoration: none;
}

.wp-block-latest-posts:not(.is-grid)>li {
    margin-top: unset !important;
    margin-bottom: unset !important;
}

#sidebar-ben-trai {
    width: 20%;
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


.headlines-recentPost {
    background: #56bdbf;
    overflow: hidden;
    padding: 20px 28px;
    font-size: 15px;
    font-weight: bold;
}

.headlines-recentPost ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.headlines-recentPost ul>li {
    overflow: hidden;
    display: flex;
    align-items: center;
    margin-bottom: 5px;
    width: 100%;
}

.headlinesdate-recenPost .headlinesdm-recenPost,
.news>.headlines-recentPost .headlinesdate-recenPost,
.headlinesdate-recenPost {
    float: left;
    font-family: 'Prata', serif;
}




.headlines-recentPost .headlinesdate-recenPost {
    font-size: 0.8em;
    min-width: 55px;
    display: table-cell;
    vertical-align: middle;
}

.headlines-recentPost ul>li>.headlinestitle-recenPost {
    display: table-cell;
    vertical-align: middle;
    width: 85%;
}

.headlinesdate-recenPost .headlinesdm-recenPost,
.news>.headlines-recentPost .headlinesdate-recenPost,
.headlinesdate-recenPost {
    float: left;
    font-family: 'Prata', serif;
}

.headlinesdate-recenPost .headlinesyear-recenPost {
    line-height: 3.5em;
    float: left;
    margin-left: 3px;
}

.headlinesyear-recenPost {
    color: white;
}

.headlinesday-recenPost {
    border-bottom: 1px solid #fff;
    color: white;
}

.headlinesmonth-recenPost {
    color: white;
}


.headlinesdate-recenPost .headlinesday-recenPost,
.news>.headlines-recentPost .headlinesmonth-recenPost {
    line-height: 1.7em;
}

.headlinesdate-recenPost .headlinesday-recenPost,
.news>.headlines-recentPost .headlinesmonth-recenPost {
    line-height: 1.7em;
    color: white;
}

.headlines-recentPost ul>li>.headlinestitle-recenPost {
    display: table-cell;
    vertical-align: middle;
    width: 85%;
    color: white;
}

.newsall {
        display: block;
        padding: 10px;
        text-align: center;
        background: #62c6c8;
        text-transform: uppercase;
        font-weight: bold;
        font-size:10px;
    }
</style>
<?php
/**
* The template for displaying author info below posts.
*
* @package WordPress
* @subpackage Twenty_Twenty_One
* @since Twenty Twenty-One 1.0
*/


?>
<?php
$args = array(
'post_type' => 'post', // Chỉ lấy bài viết (posts)
'posts_per_page' => -1, // Lấy tất cả bài viết
);


$posts = get_posts($args);


if (!empty($posts)) {
foreach ($posts as $post) {
setup_postdata($post);




$post_time = get_the_time('y-m-d H:i:s');
$post_year = date('Y', strtotime($post_time));
$post_month = date('m', strtotime($post_time));
$post_day = date('d', strtotime($post_time));
$post_link = get_permalink();
?>




<div class="headlines-recentPost">
    <ul>
        <li>
            <div class="headlinesdate-recenPost">
                <div class="headlinesdm-recenPost">
                    <div class="headlinesday-recenPost"><?php echo $post_day ?></div>
                    <div class="headlinesmonth-recenPost"><?php echo $post_month ?></div>
                </div>
                <div class="headlinesyear-recenPost"><?php echo $post_year ?></div>
            </div>
            <div class="headlinestitle-recenPost">
                <a href="<?php echo $post_link ?>"><?php the_title(); ?> </a>
            </div>
        </li>
    </ul>
</div>






<?php
}//end foreach
wp_reset_postdata(); // Đặt lại dữ liệu bài viết
}
?>
<a class="newsall  text-white"  href="http://localhost/ChuyenDeCMS/">Xem tất cả tin tức</a>
<?php
