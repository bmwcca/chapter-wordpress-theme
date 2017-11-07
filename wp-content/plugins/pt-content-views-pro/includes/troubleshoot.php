<?php

/**
 * Fix FB share wrong image
 * @since 3.9.4
 */
add_action( 'wp_head', 'cvp_troubleshoot_fb_share_wrong_img', 100 );
function cvp_troubleshoot_fb_share_wrong_img() {
	$fix_fb_share = PT_CV_Functions::get_option_value( 'fb_share_wrong_image' );
	if ( $fix_fb_share ) {
		global $post;
		$attachment_url = '';
		if ( is_singular() ) {
			$attachment_id	 = is_attachment() ? $post->ID : get_post_thumbnail_id( $post->ID );
			$attachment_url	 = wp_get_attachment_url( $attachment_id );

			if ( empty( $attachment_url ) ) {
				$attachment_url = PT_CV_Hooks_Pro::get_inside_image( $post, 'full', $post->post_content );
			}
		}

		if ( $attachment_url ) {
			printf( '<meta property="og:image" content="%s"/>', esc_url( $attachment_url ) );
		}
	}
}

/**
 * Search by multiple keywords doesn't work with Relevanssi plugin
 */
add_filter( 'relevanssi_prevent_default_request', 'cvp_relevanssi_prevent_default_request', 100, 2 );
function cvp_relevanssi_prevent_default_request( $prevent, $query ) {
	if ( isset( $query->query[ 'cv_multi_keywords' ] ) ) {
		$prevent = false;
	}

	return $prevent;
}
