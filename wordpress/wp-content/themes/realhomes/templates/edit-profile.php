<?php
/**
 * Template Name: Edit Profile
 *
 * Allow users to update their profile information from front end.
 *
 * @package realhomes
 */

do_action( 'inspiry_before_edit_profile_page_render', get_the_ID() );

get_template_part( 'assets/' . INSPIRY_DESIGN_VARIATION . '/partials/page/edit-profile' );
