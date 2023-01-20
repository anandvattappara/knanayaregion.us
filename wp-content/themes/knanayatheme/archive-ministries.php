<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage  knanaya
 * @since  knanaya
 */
get_header();
?>
<div class="bluebg">
		<div class="container">
			<?php 
				$imageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
			?>
			<img src="<?php echo $imageurl; ?>" class="img-fluid" alt="#">
		</div>
	</div>
	
	<div class="padtb60 clearfix">
		<div class="container">
			<div class="blueheadingone"><?php the_title(); ?></div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">COORDINATOR OF ALL MINSTIRES</div>
					<div class="minis-name"><?php echo get_post_meta($post->ID, 'coodinater', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">CHILDREN MINISTRY AND INFANT MINISTRY</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'children ministry and infant ministry director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">EUCHARISTIC MINISTERS</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'eucharistic ministers director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">LEGION OF MARY</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'legion of mary director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">MEN AND WOMEN MINISTRY</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'men and women ministry director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">PRAYER GROUP</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'prayer group director', true); ?><br>
											Joint Director: <?php echo get_post_meta($post->ID, 'prayer group joint director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">RELIGIOUS EDUCATION</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'religious education director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">SENIOR MINISTRY</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'senior ministry director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">TEENS MINISTRY</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'teens ministry director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">UNMARRIED YOUTH MARRIAGE BUREAU</div>
					<div class="minis-name"><?php echo get_post_meta($post->ID, 'unmarried youth marriage bureau', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">VINCENT DE PAUL SOCIETY</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'vincent de paul society director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">VOCATION PROMOTION</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'vocation promotion director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">FAMILY COMMISSION</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'family commission director', true); ?></div>
				</div>
				<div class="col-md-3 mb-30">
					<div class="minis-bluehead">YOUTH MINISTRY</div>
					<div class="minis-name">Director: <?php echo get_post_meta($post->ID, 'youth ministry director', true); ?><br>
											Joint Director: <?php echo get_post_meta($post->ID, 'youth ministry joint director', true); ?></div>
				</div>
			</div>
		</div>
		
		
		
	</div>
		
<?php
get_footer();
?>
	
	
