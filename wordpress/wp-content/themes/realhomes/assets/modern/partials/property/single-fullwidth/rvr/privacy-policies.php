<?php
/**
 * Property privacy policies of single property.
 *
 * @package    realhomes
 * @subpackage modern
 */

global $post;

/* Property Privacy Policies */
$privacy_policies = get_post_meta( get_the_ID(), 'rvr_policies', true );
if ( ! empty( $privacy_policies ) ) {
	?>
    <div class="rh_property__features_wrap">
        <h4 class="rh_property__heading"><?php esc_html_e( 'Privacy Policies', 'framework' ); ?></h4>
        <ul class="rh_property__features arrow-bullet-list no-link-list privacy-policy">
			<?php
			foreach ( $privacy_policies as $privacy_policy ) {
				echo '<li class="rh_property__feature">';
				echo '<span class="rh_done_icon">';
				include INSPIRY_THEME_DIR . '/images/icons/done.svg';
				echo '</span>';
				echo esc_html( $location );
				echo '</li>';
			}
			?>
        </ul>
    </div>
	<?php
}