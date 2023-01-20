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
		<div class="container text-center"><img src="" class="img-fluid priestbannerimage" alt=""></div>
		
	</div>
	<div class="padtb60 clearfix">
		<div class="container">
			<div class="blueheadingone">Former Mission Directors and Pastors</div>
			
			<div class="table-responsive">
				<table class="table pastpriestlisttable">
				  <thead class="table-th-bg">
					<tr>
					  
					  <th class="col-md-3 col-sm-6">Year</th>
					  <th class="col-md-3 col-sm-6">City</th>
					  <th class="col-md-3 col-sm-6">Name</th>
					  <th class="col-md-3 col-sm-6">Priest</th>
					  <th class="col-md-3 col-sm-6">Families</th>
					</tr>
				  </thead>
				  <tbody>
                  <?php
                    $args = array( 
                        'post_type' => 'parishes-missions',
                        'order'=>'ASC',
                        'posts_per_page' =>-1 ,                       
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();   
                                  
                ?>  
					<tr>
					 <td class="col-md-4 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php echo get_post_meta($post->ID, 'year', true);?></p></div>
					 </td>
					  <td class="col-md-4 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php echo get_post_meta($post->ID, 'city', true); ?></p></div>
					  </td>
					  <td class="col-md-4 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php echo get_post_meta($post->ID, 'name', true); ?></p></div>
					  </td>
					  <td class="col-md-4 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php echo get_post_meta($post->ID, 'priest', true); ?></p></div>
					  </td>
					  <td class="col-md-4 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php echo get_post_meta($post->ID, 'families', true); ?></p></div>
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
	
	
