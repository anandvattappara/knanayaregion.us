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
	
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators carouselindicatorsround">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="<?PHP echo get_template_directory_uri()?>/assets/images/banner-1.png" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		  <img src="<?PHP echo get_template_directory_uri()?>/assets/images/banner-1.png" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		  <img src="<?PHP echo get_template_directory_uri()?>/assets/images/banner-1.png" class="d-block w-100" alt="...">
		</div>
	  </div>
	  <button class="carousel-control-prev noshow" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next noshow" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	  </button>
	</div>
	
	<div class="padtb60 clearfix">
		<div class="container text-center">
			<div class="blueheadingone">Knanaya Catholic Region</div>
			<div class="subtext"><?PHP echo of_get_option('knanaya-catholic-region');?></div>
			<div class="fatlist">
				
				<div class="fatlistimg">
					<img class="img-fluid" src="<?PHP echo of_get_option('image_1');?>" alt="image">
					<div class="fatname"><?PHP echo of_get_option('image_1_name');?></div>
				</div>
				<div class="fatlistimg">
					<img class="img-fluid" src="<?PHP echo of_get_option('image_2');?>" alt="image">
					<div class="fatname"><?PHP echo of_get_option('image_2_name');?></div>
				</div>
				<div class="fatlistimg">
					<img class="img-fluid" src="<?PHP echo of_get_option('image_3');?>" alt="image">
					<div class="fatname"><?PHP echo of_get_option('image_3_name');?></div>
				</div>
				<div class="fatlistimg">
					<img class="img-fluid" src="<?PHP echo of_get_option('image_4');?>" alt="image">
					<div class="fatname"><?PHP echo of_get_option('image_4_name');?></div>
				</div>
				<div class="fatlistimg">
					<img class="img-fluid" src="<?PHP echo of_get_option('image_5');?>" alt="image">
					<div class="fatname"><?PHP echo of_get_option('image_5_name');?></div>
				</div>
				<div class="fatlistimg">
					<img class="img-fluid" src="<?PHP echo of_get_option('image_6');?>" alt="image">
					<div class="fatname"><?PHP echo of_get_option('image_6_name');?></div>
				</div>
				<div class="fatlistimg">
					<img class="img-fluid" src="<?PHP echo of_get_option('image_7');?>" alt="image">
					<div class="fatname"><?PHP echo of_get_option('image_7_name');?></div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="bluebanner">
		<div class="container padtb115 padlr15">
			<div class="row">
				<div class="col-md-5">
					<div class="whiteheadingone">Mission Statement</div>
					<div class="subtextwhite"><?PHP echo of_get_option('mission_statement');?></div>
					<div class="padtb35"></div>
					<div class="whiteheadingone">Office Bearers</div>
					<div class="subtextwhite"><?PHP echo of_get_option('office_bearers');?></div>
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-5">
					<div class="whiteheadingone">Members of Knanaya Region</div>
					<div class="subtextwhite"><?PHP echo of_get_option('members_of_knanaya_region');?></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="padtb60 clearfix">
		<div class="container text-center">
			<div class="blueheadingone">Pre-Marriage Courses</div>
			<div class="subtext"><?PHP echo of_get_option('pre-marriage_courses');?></div>
		</div>
		<div class="container padtb60">
			<div class="row">
				<?php
                    $args = array( 
                        'post_type' => 'pre-marriage-courses',
                        'order'=>'ASC',
                        'posts_per_page' =>4 ,                       
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); 
				?> 
					<div class="col-md-3">
					<div class="padedwhitebox">
						<div class="bluebox">From <?php echo get_post_meta($post->ID, 'from day', true);?></div>
						<div class="matridetails"><?php echo get_post_meta($post->ID, 'from date', true);?> to 
						<?php echo get_post_meta($post->ID, 'to day', true);?> <?php echo get_post_meta($post->ID, 'to date', true);?></div>
					</div>
				</div>
				<?php 
                	endwhile;
            	?>
			</div>
		</div>
	</div>
	
	
	<div class="clearfix bluebg">
		<div class="container">
			<div class="row">
				<div class="col-md-4 padtb60 clearfix">
					<div class="whiteheadingone">Parish Websites</div>
					<div class="websitelist">
						
						<?PHP echo of_get_option('parish_websites');?>			
						
					</div>
				</div>
				<div class="col-md-4 clearfix"><img src="<?PHP echo get_template_directory_uri()?>/assets/images/churchimage.png" class="img-fluid" alt="church"></div>
				<div class="col-md-4 padtb60 clearfix otherlistpad">
					<div class="whiteheadingone">Having Cemitery</div>
					<div class="otherlist">
						
						<?PHP echo of_get_option('having_cemitery');?>					
						
					</div>
					
					<div class="padtop30"></div>
					<div class="whiteheadingone">Own Rectory</div>
					<div class="otherlist">
						
						<?PHP echo of_get_option('own_rectory');?>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="padtb60 clearfix">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="blueheadingone">Relevent Links</div>
					<div class="subtextleft"><p>Please click on the names to go to those websites</p></div>
				</div>
				<div class="col-md-8">
					<div class="rel-links">
						<ul class="list-unstyled row">
							<li class="col-md-6"><?PHP echo of_get_option('relevent_links_block_1');?></li>
							<li class="col-md-6"><?PHP echo of_get_option('relevent_links_block_2');?></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>	
<?php
get_footer();
?>
	
	
