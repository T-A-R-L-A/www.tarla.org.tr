<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php $args = array(
				'authors'      => '',
				'child_of'     => 0,
				'date_format'  => get_option('date_format'),
				'depth'        => 0,
				'echo'         => 1,
				'exclude'      => '',
				'include'      => '',
				'link_after'   => '',
				'link_before'  => '',
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'show_date'    => '',
				'sort_column'  => 'menu_order, post_title',
				'title_li'     => __(''), 
				'walker'       => ''
			); ?>
			 <?php wp_list_pages( $args ); ?> 

		</div><!-- #secondary -->
	<?php endif; ?>