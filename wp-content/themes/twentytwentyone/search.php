<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();


if ( have_posts() ) {
	?>
<!-- thay đổi thông báo search được tìm thấy (đã chỉnh sửa) -->
<h1 class="page-title">
    <div class="page-ct-search">
        <?php
			echo '<h1 class="page-title">'.'<span class="page-description page-description-search">' . 'Search:' . '</span>' ."<b>";
            printf(
                esc_html__('"%s"', 'twentytwentyone'),
                '<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
            );
            echo '</b>' . '</h1>';
			?>

        <!-- Thông báo tìm thấy -->
        <div class="search-result-count default-max-width">
            <p class="text-2xl pt-3 font-thin">
                <?php
    printf(
        esc_html(
            /* translators: %d: Trả về số bài viết tìm thấy được */
            _n(
                'We found %d result for your search.', //thấy được 1 bài viết
                'We found %d results for your search.', // thấy được nhiều bài viết
                (int) $wp_query->found_posts,
                'twentytwentyone'
            )
        ),
        (int) $wp_query->found_posts
    );
    ?>
            </p>
        </div><!-- .search-result-count -->
    </div>
</h1>

<!-- Thêm search vào trang tìm thấy kế quả -->

<div class="search_form">
    <?php
			get_search_form(); 
		?>
</div>
<div class="flex">
    <div class="w-1/4">
        <!-- Phần tử 1 -->
    </div>
    <div class="w-2/4">
        <?php
        // Start the Loop.
        while ( have_posts() ) {
            the_post();
            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
        } // End the loop.

        // Previous/next page navigation.
        twenty_twenty_one_the_posts_navigation();

        // If no content, include the "No posts found" template.
    }else {
            get_template_part( 'template-parts/content/content-none' );
        }
        ?>
    </div>
    <?php
        if (have_posts()) {
        // Có kết quả tìm kiếm
    ?>
    <div class="w-1/4">
        <?php
                get_template_part('template-parts/sidebar/sidebar-comment-search');
            ?>
    </div>
</div>
<?php
    } else {
        // Không có kết quả tìm kiếm
        ?>
<div class="flex">
    <div class="w-1/4"></div>
    <div class="w-2/4"></div>
    <div class="w-1/4">
        <?php
                get_template_part('template-parts/sidebar/sidebar-comment-search');
            ?>
    </div>
</div>
<?php
    }
    ?>


<?php
get_footer();