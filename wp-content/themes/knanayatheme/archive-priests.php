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
		<div class="container text-center"><img src="<?PHP echo of_get_option('priest_image');?>" class="img-fluid priestbannerimage" alt=""></div>
		<div class="priestbannername"><?PHP echo of_get_option('priest_name');?></div>
		<div class="priestbannerdesignation"><?PHP echo of_get_option('priest_assignment');?></div>
	</div>


	<div class="padtb60 clearfix lightbluebg">
		<div class="container">
			<div class="blueheadingone">Priest Serving in the Knanaya Region</div>			
			<div class="table-responsive">
				<table class="table priestlisttable">
				  <thead class="table-th-bg">
					<tr>
					  <th class="col-md-3 col-sm-6">PRIEST NAME / ADDRESS</th>
					  <th class="col-md-3 col-sm-6">ASSIGNMENT</th>
					  <th class="col-md-3 col-sm-6">CONTACT</th>
					  <th class="col-md-3 col-sm-6">BIRTHDAY / FEAST</th>
					</tr>
				  </thead>
				  <tbody>    
                <?php
                    $args = array( 
                        'post_type' => 'priests',
                        'order'=>'ASC',
                        'posts_per_page' =>-1 ,                       
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();   
                    $priests_address = get_post_meta($post->ID, 'Priests Address', true);                   
                    $assignment = get_post_meta($post->ID, 'Assignment', true);
                    $contact = get_post_meta($post->ID, 'Contact', true);
                    $birthday_feast = get_post_meta($post->ID, 'Birthday/Feast', true); 
                    $imageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                    
                ?>
					<tr>
					  <td class="col-md-3 col-sm-6 priestimagecenter">
                          <img src="<?php echo $imageurl ?>" class="img-fluid float-start priestimage" alt="name"/>
                          
						  <div class="priestname"><?php the_title();?></div>
						  <div class="pr-cmn-txt"><?php echo $priests_address; ?></div>
					  </td>
					  <td class="col-md-3 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php echo $assignment; ?></p>
						  </div>
					 </td>
					  <td class="col-md-3 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php echo $contact; ?></p></div>
					  </td>
					  <td class="col-md-3 col-sm-6">
						  <div class="pr-cmn-txt"><p><?php echo $birthday_feast; ?></p></div>
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
	
	
