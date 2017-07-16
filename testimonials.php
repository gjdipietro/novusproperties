<?php /* Template Name: Testimonials */ ?>
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
            
            <?php
                $args = array(
                'post_type'   => 'testimonial',
                'post_status' => 'publish',
                );
                
                $testimonial = new WP_Query( $args );
                if( $testimonial->have_posts() ) :
                while( $testimonial->have_posts() ) :
                    $testimonial->the_post();
            ?>
                        
            <blockquote class="c-profile">
                <div class="c-profile__image">
                    <?php the_post_thumbnail([150, 150]); ?>
                </div>
                <div class="c-profile__content">
                    <h3 class="c-profile__identity">
                        <span class="c-profile__identity__name"><?php the_title(); ?></span>
                        <?php if ( get_post_meta($post->ID, 'title') ) { ?>
                        <span class="c-profile__identity__position"><?php echo get_post_meta($post->ID, 'title', true); ?></span>
                        <?php } ?>
                    </h3>
                    <div class="c-profile__text"><?php the_content(); ?></div>
                </div>
            </blockquote>
                    
            <?php
                endwhile;
                wp_reset_postdata();
                endif;
            ?>
        </section>
    </article>
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>