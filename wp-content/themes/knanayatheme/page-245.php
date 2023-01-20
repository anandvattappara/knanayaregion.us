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
	<div class="pers-prie-banner padtb60">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="container text-center"><img src="<?PHP echo of_get_option('first_forane_priest_image');?>" class="img-fluid foraneparishbannerimage" alt=""></div>
					<div class="foranepriestbannername"><?PHP echo of_get_option('first_forane_priest_name');?></div>
					<div class="foranepriestbannerdesignation">(<?PHP echo of_get_option('first_forane_priest_place');?>)</div>
				</div>
				<div class="col-md-3">
					<div class="container text-center"><img src="<?PHP echo of_get_option('second_forane_priest_image');?>" class="img-fluid foraneparishbannerimage" alt=""></div>
					<div class="foranepriestbannername"><?PHP echo of_get_option('second_forane_priest_name');?></div>
					<div class="foranepriestbannerdesignation">(<?PHP echo of_get_option('second_forane_priest_place');?>)</div>
				</div>
				<div class="col-md-3">
					<div class="container text-center"><img src="<?PHP echo of_get_option('third_forane_priest_image');?>" class="img-fluid foraneparishbannerimage" alt=""></div>
					<div class="foranepriestbannername"><?PHP echo of_get_option('third_forane_priest_name');?></div>
					<div class="foranepriestbannerdesignation">(<?PHP echo of_get_option('third_forane_priest_place');?>)</div>
				</div>
				<div class="col-md-3">
					<div class="container text-center"><img src="<?PHP echo of_get_option('fourth_forane_priest_image');?>" class="img-fluid foraneparishbannerimage" alt=""></div>
					<div class="foranepriestbannername"><?PHP echo of_get_option('fourth_forane_priest_name');?></div>
					<div class="foranepriestbannerdesignation">(<?PHP echo of_get_option('fourth_forane_priest_place');?>)</div>
				</div>
			</div>
		</div>
	</div>

	<div class="padtb60 clearfix lightgreybg">
		<div class="container">
			<div class="blueheadingone"><?php the_title(); ?></div>
		</div>
		
		<div class="container">
			<div class="subtextleft">
			<?php the_content(); ?>
			</div>
		</div>
		
	</div>


<?php
get_footer();
?>
	
	
