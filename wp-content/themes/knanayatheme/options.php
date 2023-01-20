<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	$wp_editor_settings = array(
        'wpautop' => true, // Default
        'textarea_rows' => 15,
        'tinymce' => array( 
            'plugins' => 'fullscreen,wordpress,wplink, textcolor'
        ));
		
		/*$wp_editor_settings = array(
        'wpautop'             => true,
        'media_buttons'       => true,
        'default_editor'      => '',
        'drag_drop_upload'    => false,
        'textarea_rows'       => 20,
        'tabindex'            => '',
        'tabfocus_elements'   => ':prev,:next',
        'editor_css'          => '',
        'editor_class'        => '',
        'teeny'               => false,
        'dfw'                 => false,
        '_content_editor_dfw' => false,
        'tinymce'             => true,
        'quicktags'           => true,
		'tinymce' => array( 
            'plugins' => 'fullscreen,wordpress,wplink, textcolor'
        ));*/

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();
	$theamurl = get_template_directory_uri();

	$options[] = array(
		'name' => __('Home Page', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Knanaya Catholic Region', 'options_check'),
		'desc' => __('', ''),
		'id' => 'knanaya-catholic-region',
		'std' => '',
		'type' => 'text');
		$options[] = array(
			'name' => __('Knanaya Region Matrimonial', 'options_check'),
			'desc' => __('', ''),
			'id' => 'knanaya-region_matrimonial',
			'std' => '',
			'type' => 'text');
			$options[] = array(
				'name' => __('Mission Statement', 'options_check'),
				'desc' => __('', ''),
				'id' => 'mission_statement',
				'std' => '',
				'type' => 'editor',
				'settings' => $wp_editor_settings );
				$options[] = array(
					'name' => __('Members of Knanaya Region', 'options_check'),
					'desc' => __('', ''),
					'id' => 'members_of_knanaya_region',
					'std' => '',
					'type' => 'editor',
					'settings' => $wp_editor_settings );
					$options[] = array(
						'name' => __('Office Bearers', 'options_check'),
						'desc' => __('', ''),
						'id' => 'office_bearers',
						'std' => '',
						'type' => 'editor',
						'settings' => $wp_editor_settings );
						$options[] = array(
							'name' => __('Pre-Marriage Courses', 'options_check'),
							'desc' => __('', ''),
							'id' => 'pre-marriage_courses',
							'std' => '',
							'type' => 'editor',
							'settings' => $wp_editor_settings );
							$options[] = array(
								'name' => __('Parish Websites', 'options_check'),
								'desc' => __('', ''),
								'id' => 'parish_websites',
								'std' => '',
								'type' => 'editor',
								'settings' => $wp_editor_settings );	
										
								$options[] = array(
									'name' => __('Having Cemitery', 'options_check'),
									'desc' => __('', ''),
									'id' => 'having_cemitery',
									'std' => '',
									'type' => 'editor',
									'settings' => $wp_editor_settings );
									$options[] = array(
										'name' => __('Own Rectory', 'options_check'),
										'desc' => __('', ''),
										'id' => 'own_rectory',
										'std' => '',
										'type' => 'editor',
										'settings' => $wp_editor_settings );
										$options[] = array(
											'name' => __('Relevent Links Block 1', 'options_check'),
											'desc' => __('', ''),
											'id' => 'relevent_links_block_1',
											'std' => '',
											'type' => 'editor',
											'settings' => $wp_editor_settings );
											$options[] = array(
												'name' => __('Relevent Links Block 2', 'options_check'),
												'desc' => __('', ''),
												'id' => 'relevent_links_block_2',
												'std' => '',
												'type' => 'editor',
												'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Pop & Bishops', 'options_check'),
		'type' => 'heading');
    $options[] = array(
		'name' => __('Image_1', 'options_check'),
		'desc' => __('', ''),
		'id' => 'image_1',
		'std' =>  '',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Image_1_Name', 'options_check'),
		'desc' => __('', ''),
		'id' => 'image_1_name',
		'std' => '',
		'type' => 'text');
	$options[] = array(
			'name' => __('Image_2', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_2',
			'std' =>  '',
			'type' => 'upload');
	$options[] = array(
			'name' => __('Image_2_Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_2_name',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Image_3', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_3',
			'std' =>  '',
			'type' => 'upload');
	$options[] = array(
			'name' => __('Image_3_Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_3_name',
			'std' => '',
			'type' => 'text');		
    $options[] = array(
			'name' => __('Image_4', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_4',
			'std' =>  '',
			'type' => 'upload');

	$options[] = array(
			'name' => __('Image_4_Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_4_name',
			'std' => '',
			'type' => 'text');	

	$options[] = array(
			'name' => __('Image_5', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_5',
			'std' =>  '',
			'type' => 'upload');
		
	$options[] = array(
			'name' => __('Image_5_Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_5_name',
			'std' => '',
			'type' => 'text');	
	$options[] = array(
			'name' => __('Image_6', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_6',
			'std' =>  '',
			'type' => 'upload');
				
	$options[] = array(
			'name' => __('Image_6_Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_6_name',
			'std' => '',
			'type' => 'text');	
	$options[] = array(
			'name' => __('Image_7', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_7',
			'std' =>  '',
			'type' => 'upload');
						
	$options[] = array(
			'name' => __('Image_7_Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'image_7_name',
			'std' => '',
			'type' => 'text');



	$options[] = array(
			'name' => __('Footer Contact Information', 'options_check'),
			'type' => 'heading');
	$options[] = array(
			'name' => __('Contact Information Block_1', 'options_check'),
			'desc' => __('', ''),
			'id' => 'contact_information_block_1',
			'std' => '',
			'type' => 'editor',
			'settings' => $wp_editor_settings );
	$options[] = array(
			'name' => __('Contact Information Block_2', 'options_check'),
			'desc' => __('', ''),
			'id' => 'contact_information_block_2',
			'std' => '',
			'type' => 'editor',
			'settings' => $wp_editor_settings );
	$options[] = array(
			'name' => __('Contact Information Block_3', 'options_check'),
			'desc' => __('', ''),
			'id' => 'contact_information_block_3',
			'std' => '',
			'type' => 'editor',
			'settings' => $wp_editor_settings );



	$options[] = array(
		    'name' => __('Banner Images', 'options_check'),
			'type' => 'heading');
	$options[] = array(
			'name' => __('1) Priest Serving in the Knanaya Region', 'options_check'));
	$options[] = array(
			'name' => __('Priest Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'priest_name',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Priest Assignment', 'options_check'),
			'desc' => __('', ''),
			'id' => 'priest_assignment',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Priest Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'priest_image',
			'std' => '',
			'type' => 'upload');
	$options[] = array(
			'name' => __('2) Former Mission Directors and Pastors'));	
	$options[] = array(
			'name' => __('Former Priest Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'former_priest_name',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Former Priest Assignment', 'options_check'),
			'desc' => __('', ''),
			'id' => 'former_priest_assignment',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Former Priest Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'former_priest_image',
			'std' => '',
			'type' => 'upload');
    $options[] = array(
			'name' => __('3) Chicago, Maywood: Sacred Heart Knanaya Catholic Forane Parish', 'options_check'));
	$options[] = array(
			'name' => __('First Forane Priest Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'first_forane_priest_name',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('First Forane Priest Place', 'options_check'),
			'desc' => __('', ''),
			'id' => 'first_forane_priest_place',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('First Forane Priest Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'first_forane_priest_image',
			'std' => '',
			'type' => 'upload');
	$options[] = array(
			'name' => __('Second Forane Priest Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'second_forane_priest_name',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Second Forane Priest Place', 'options_check'),
			'desc' => __('', ''),
			'id' => 'second_forane_priest_place',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Second Forane Priest Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'second_forane_priest_image',
			'std' => '',
			'type' => 'upload');
	$options[] = array(
			'name' => __('Third Forane Priest Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'third_forane_priest_name',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Third Forane Priest Place', 'options_check'),
			'desc' => __('', ''),
			'id' => 'third_forane_priest_place',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Third Forane Priest Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'third_forane_priest_image',
			'std' => '',
			'type' => 'upload');
	$options[] = array(
			'name' => __('Fourth Forane Priest Name', 'options_check'),
			'desc' => __('', ''),
			'id' => 'fourth_forane_priest_name',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Fourth Forane Priest Place', 'options_check'),
			'desc' => __('', ''),
			'id' => 'fourth_forane_priest_place',
			'std' => '',
			'type' => 'text');
	$options[] = array(
			'name' => __('Fourth Forane Priest Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'fourth_forane_priest_image',
			'std' => '',
			'type' => 'upload');																				
	return $options;
}
