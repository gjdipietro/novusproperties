<?php get_header(); ?>
<style type="text/css"> .c-featured__image { background-image: url(<?php the_post_thumbnail_url( $size ); ?>);}</style>

<section id="content" role="main">
    <div class="c-featured c-featured--small">
        <hgroup class="c-featured__header">
            <h1 class="c-featured__header__title" id="site-description"><?php bloginfo( 'description' ); ?></h1>
        </hgroup>
        <figure class="c-featured__image"></figure>
    </div>
    <div class="c-ribbon"></div>

    <?php 
        if ( get_post_meta($post->ID, 'includeContactForm', true) ) {
            include(locate_template('widget-contactform.php'));  
        } 
    ?>

</section>

<?php get_footer(); ?>