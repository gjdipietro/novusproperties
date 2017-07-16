
<?php get_header(); ?>

<section id="content" role="main">
   
	<article id="post-404" class="o-entry">
		<header class="header o-entry__title">
            <div class="o-container__inner">
				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>
            </div>
        </header>
	</article>
</section>

<?php get_footer(); ?>