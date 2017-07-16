<?php get_header(); ?>

<section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="o-entry">
        <?php the_post_thumbnail(); ?> 
        <header class="header o-entry__title">
            <h1><?php the_title(); ?></h1>
        </header>
        <section class="o-entry__content o-container">
            <?php the_content(); ?>
        </section>


        <?php 
            if ( get_post_meta($post->ID, 'includeContactForm', true) ) {
                include(locate_template('widget-contactform.php'));  
            } 
        ?>
    </article>
    
    
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>