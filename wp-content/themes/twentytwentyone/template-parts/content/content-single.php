<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class="flex">

    <div class="w-1/4"></div>
    <div class="w-3/4">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="flex"></div>

            <header class="alignwide detail">

                <div class="row title">
                    <div class="col-md-10 col-xs-9">
                        <h1>
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </h1>
                    </div>
                    <div class="col-md-2 col-xs-3 flex justify-end">
                        <div class="headlinesdate">
                            <div class="headlinesdm">
                                <div class="headlinesday">

                                    <!-- lấy ngày bài viết -->
                                    <?php
                            $created_date = get_the_date('d');
                            echo $created_date;
							?>

                                </div>
                                <div class="headlinesmonth">
                                    <?php
                            $created_date = get_the_date('m');
                            echo $created_date;
							?>
                                </div>
                            </div>
                            <div class="headlinesyear">'
                                <?php
                            $created_date = get_the_date('y');
                            echo $created_date;
							?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php twenty_twenty_one_post_thumbnail(); ?>

                <!-- line  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="overviewline"></div>
                    </div>
                </div>
                <!-- end line -->

            </header><!-- .entry-header -->

            <!-- mo ta ngan -->
            <div class="alignwide pt-3">
                <!-- entry-excerpt -->
                <div class="entry-excerpt mb-5">
                    <?php
                $excerpt = get_the_excerpt();
                if (!empty($excerpt)) {
                    echo '<i class="custom-excerpt"> ' . $excerpt . '</i>';
                }
            ?>
                </div>
                <!--  -->
                <?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
            </div><!-- .entry-content -->

            <footer class="entry-footer default-max-width">
                <?php twenty_twenty_one_entry_meta_footer(); ?>
            </footer><!-- .entry-footer -->

            <?php if ( ! is_singular( 'attachment' ) ) : ?>
            <?php get_template_part( 'template-parts/post/author-bio' ); ?>
            <?php endif; ?>

        </article><!-- #post-<?php the_ID(); ?> -->
    </div>

    <!-- sidebar phải  -->
    <div class="w-1/4 ml-20">
    <h1 class="pb-4 font-bold text-2xl">BÀI VIẾT MỚI NHẤT</h1>
        <?php
		    get_template_part( 'template-parts/sidebar/sidebar-recentpost' );
	    ?>
    </div>
</div>
<div class="lastPost">
    <?php
        get_template_part( 'template-parts/lastPost/lastPost' );
    ?>
</div>
