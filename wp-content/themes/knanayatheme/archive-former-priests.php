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
		<div class="container text-center"><img src="<?PHP echo of_get_option('former_priest_image');?>" class="img-fluid priestbannerimage" alt=""></div>
		<div class="priestbannername"><?PHP echo of_get_option('former_priest_name');?></div>
		<div class="priestbannerdesignation"><?PHP echo of_get_option('former_priest_assignment');?></div>
	</div>
	<div class="padtb60 clearfix">
		<div class="container">
			<div class="blueheadingone">Former Mission Directors and Pastors</div>
			
			<div class="table-responsive">
				<table class="table pastpriestlisttable">
				  <thead class="table-th-bg">
					<tr>
					  
					  <th class="col-md-3 col-sm-6">Name of the priest</th>
					  <th class="col-md-3 col-sm-6">places served</th>
					  <th class="col-md-3 col-sm-6">Dates served</th>
					</tr>
				  </thead>
				  <tbody>
                  <?php
                    $args = array( 
                        'post_type' => 'former-priests',
                        'order'=>'ASC',
                        'posts_per_page' =>-1 ,                       
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();   
                    $places_served = get_post_meta($post->ID, 'places served', true);                   
                    $dates_served = get_post_meta($post->ID, 'dates served', true);                    
                ?>  
					<tr>
					 <td class="col-md-4 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php the_title();?></p></div>
					 </td>
					  <td class="col-md-4 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php echo $places_served; ?></p></div>
					  </td>
					  <td class="col-md-4 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php echo $dates_served; ?></p></div>
					  </td>
					</tr>
            <?php 
                endwhile;
            ?>
                    </tbody>
				</table>
			</div>
			
		</div>
	</div>	
<?php
get_footer();
?>
	
	
