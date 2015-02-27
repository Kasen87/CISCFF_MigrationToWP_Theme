<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package socialChangeFilm
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
            <?php if ( is_front_page() ) : ?>
                <div class="heroImage">
                    <div class="welcomeTitle">
                        <div class="subtitle"><h3><em>September 25th-27th, 2015</em></h3></div>
                        <h3><em>Showplace ICON Theater in Chicago</em></h3>
                        <h1>Ideas With Action</h1>
                    </div>
                </div>
            
            <?php else : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'page' ); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
