<?php get_header(); ?>
<div class="contentWrapper">
	<main role="main">
		<!-- section -->
		<section>

            <!-- <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1> -->
            <h1><?php _e( 'Latest news', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
