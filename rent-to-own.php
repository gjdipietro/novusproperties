<?php /* Template Name: Rent To Own */ ?>
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
                <h2><?php echo get_post_meta($post->ID, 'howItWorksTitle', true); ?></h2>
                <p><?php echo get_post_meta($post->ID, 'howItWorksSubTitle', true); ?></p>
                <ul class="c-grid3 c-grid3--centered">
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'howItWorksItem1Title', true); ?></h3>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'howItWorksItem1Body', true); ?></p>
                    </li>
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'howItWorksItem2Title', true); ?></h3>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'howItWorksItem2Body', true); ?></p>
                    </li>
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'howItWorksItem3Title', true); ?></h3>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'howItWorksItem3Body', true); ?></p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="o-entry__content o-container">
            <?php echo get_post_meta($post->ID, 'fiveReasons', true); ?>
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
    