<?php
/**
 * Template Name: Submit Property
 *
 * @since   1.0.0
 * @package realhomes
 */

do_action( 'inspiry_before_submit_property_page_render', get_the_ID() );

get_template_part( 'assets/' . INSPIRY_DESIGN_VARIATION . '/partials/page/submit-property' );
