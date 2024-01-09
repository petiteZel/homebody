<?php

/**
 * @package WordPress
 * @subpackage Homebody
 * @since Homebody 1.0
 */

/*
 * Template Name: 공통 페이지
 */
get_header();

//$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<div class="page-header">
	<div class="container" style="padding: 10px 20px;">
		<article id="searchModule" class="post-95 page type-page status-publish hentry">
			<div class="entry-content">
				<?php echo '<form role="search" method="get" action="' . home_url() . '" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">' ?>
				<div class="wp-block-search__inside-wrapper ">
					<input class="wp-block-search__input" id="wp-block-search__input-1" placeholder="search" value="" type="search" name="s" required="" style="color: white;">
					<button aria-label="검색" class="wp-block-search__button wp-element-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
				</div>
				</form>
			</div>
		</article>
	</div>
</div>
