<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			
			// Include the page content template.
			get_template_part( 'template-parts/about', 'page' );


			//input the contact number 
			if (get_field('company_name')){  ?>
			    <h2> <?php the_field('company_name')?> </h2>
			<?php } ?>

			<?php 
			if (get_field('contact_number_')){  ?>
			    <h4> Contact number: <?php the_field('contact_number_')?> </h4>
			<?php } ?>

			<?php 
			if (get_field('email')){  ?>
			    <h4> Email: <?php the_field('email')?> </h4>
			<?php } ?>

			<?php 
			if (get_field('address_')){  ?>
			    <h4> Address: <?php the_field('address_')?> </h4>
			<?php } ?>

			<?php 
			if (get_field('company_logo')){  ?>
			    <img style="display:block"	src="<?php the_field('company_logo')?>" height ="40" width ="40"> 
			<?php } ?>



			<?php 
							
			
			


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}


		

			// End of the loop.
		endwhile;
		?>


	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
