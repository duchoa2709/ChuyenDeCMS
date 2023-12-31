<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */

?>
<style>
    .page-ct-search{
	background-color: #fff;
	text-align: center;
	padding: 50px 0;
}
.page-description-search{
	color:red;
	font-weight:bold;
}
.page-title{
	font-size:40px
}
.search-form{
	align-items:center;
}
.search_form .form{
	padding: 15px;
	background:#fff;
	
}
.search_form .search-field{
	margin:0;
	margin-right: 10px;
	border:none;
}
.search-form .search-submit{
	margin:0;
}
.search-form .img-search{
	display:flex;
	width:30px;
	height:30px;
}
.search_form .search-submit{
	padding:9px 20px
}
</style>

<?php
$twentytwentyone_unique_id = wp_unique_id( 'search-form-' );

$twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<form role="search"
    <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
    method="get" class="search-form form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img src="./wp-content/themes/twentytwentyone/assets/images/search.png" alt="" class="img-search">
    <input type="search" id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="search-field"
        value="<?php echo get_search_query(); ?>" name="s" placeholder="Search topics or keywords" />
    <input type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); ?>" />
</form>