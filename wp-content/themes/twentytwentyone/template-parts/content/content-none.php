<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<section class="no-results not-found">
    <div class="page-content page-ct-search">
        <?php
        // Kiểm tra nếu có tìm kiếm
        if (is_search()) :
            echo '<h1 class="page-title">'.'<span class="page-description page-description-search">' . 'Search:' . '</span>' ."<b>";
            printf(
                esc_html__('"%s"', 'twentytwentyone'),
                '<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
            );
            echo '</b>' . '</h1>';
        else :
            // Nếu không phải trang kết quả tìm kiếm, hiển thị tiêu đề mặc định
            echo '<h1 class="page-title">' . esc_html_e('Nothing here', 'twentytwentyone') . '</h1>';
        endif;

        // Kiểm tra nếu đây là trang chính (home) và người dùng có quyền đăng bài viết
        if (is_home() && current_user_can('publish_posts')) :
            // Hiển thị hướng dẫn đăng bài viết
            echo '<p>' . wp_kses(
                sprintf(__('Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwentyone'),
                esc_url(admin_url('post-new.php'))),
                array('a' => array('href' => array()))
            ) . '</p>';
        // Kiểm tra nếu đây là trang kết quả tìm kiếm
        elseif (is_search()) :
            // Hiển thị thông báo không tìm thấy kết quả và biểu mẫu tìm kiếm
            echo '<p>' . 'We could not find any results for your search. You can give it ' .'<br>'.' another try through the search form below.' . '</p>';
        else :
            // Hiển thị thông báo không tìm thấy nội dung và biểu mẫu tìm kiếm
            echo '<p>' . esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone') . '</p>';
        endif;
        ?>
    </div><!-- .page-content -->
    <div class="search_form">
        <?php
			get_search_form(); 
		?>
    </div>
</section><!-- .no-results -->