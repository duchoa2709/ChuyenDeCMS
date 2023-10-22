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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <header class="entry-header alignwide">

        <div class="row title">
            <div class="col-md-10 col-xs-9">
                <h1>
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </h1>
            </div>
            <div class="col-md-2 col-xs-3">
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

        <?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
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