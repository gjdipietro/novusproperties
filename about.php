<?php /* Template Name: About */ ?>
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
        
        <section class="o-inlay">
            <div class="o-container">
                <h2><?php echo get_post_meta($post->ID, 'whyNovusTitle', true); ?></h2>
                <ul class="c-grid3">
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'whyNovusItem1Title', true); ?></h3>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'whyNovusItem1Body', true); ?></p>
                    </li>
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'whyNovusItem2Title', true); ?></h3>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'whyNovusItem2Body', true); ?></p>
                    </li>
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'whyNovusItem3Title', true); ?></h3>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'whyNovusItem3Body', true); ?></p>
                    </li>
                </ul>
            </div>
        </section>
        
        <section class="o-entry__content">
            <div class="u-release">
                <h2 style="text-align:center"> Meet the team </h2>
                <?php
                    $args = array(
                    'post_type'   => 'team',
                    'post_status' => 'publish',
                    );
                    
                    $team = new WP_Query( $args );
                    if( $team->have_posts() ) :
                    while( $team->have_posts() ) :
                        $team->the_post();
                ?>
                        
                <article class="c-profile">
                    <div class="c-profile__image">
                        <?php the_post_thumbnail([400, 400]); ?>
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
                </article>
                        
                <?php
                    endwhile;
                    wp_reset_postdata();
                    endif;
                ?>

            </div>
        </section>

        <?php if ( get_post_meta($post->ID, 'contactFormID', true) ) {
        include(locate_template('widget-contactform.php'));  
        } ?>
    </article>
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
    






