<?php
/**
 * For Taxonomy List Layout
 *
 * @package    realhomes
 * @subpackage modern
 */

/* Theme Listing Page Module */
$theme_listing_module = get_option( 'theme_listing_module' );

switch ( $theme_listing_module ) {
	case 'properties-map':
		echo '<div class="rh_map rh_map__search">';
		get_template_part( 'assets/modern/partials/properties/map' );
		echo '</div>';
		break;

	default:
		break;
}

?>

<section class="rh_section rh_section--flex rh_wrap--padding rh_wrap--topPadding">

	<div class="rh_page rh_page__listing_page rh_page__main">

		<?php get_template_part( 'assets/modern/partials/taxonomy/taxonomy', 'title' ); ?>

		<div class="rh_page__listing">

			<?php
			$sort_query_args = array();
			$sort_query_args = sort_properties( $sort_query_args );

			global $wp_query;
			$args = array_merge( $wp_query->query_vars, $sort_query_args );
			query_posts( $args );

			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();

					// Display property in list layout.
					get_template_part( 'assets/modern/partials/properties/list-card' );

				endwhile;
			else :
				?>
				<div class="rh_alert-wrapper">
					<h4 class="no-results"><?php esc_html_e( 'No Results Found!', 'framework' ) ?></h4>
				</div>
				<?php
			endif;
			?>
		</div>
		<!-- /.rh_page__listing -->

		<?php inspiry_theme_pagination( $wp_query->max_num_pages ); ?>

	</div>
	<!-- /.rh_page rh_page__main -->

	<div class="rh_page rh_page__sidebar">
		<?php get_sidebar( 'property-listing' ); ?>
	</div>
	<!-- /.rh_page rh_page__sidebar -->

</section>
<!-- /.rh_section rh_wrap rh_wrap--padding -->
