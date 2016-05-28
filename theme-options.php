<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "theme_opt";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options' ),
        'page_title'           => __( 'Theme Options' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'  => __( 'General Settings' ),
        'id'     => 'general-settings',
        'desc'   => __( 'Here you can change the General theme Settings' ),
        'icon'   => 'el el-adjust-alt',
        'fields' => array(
			array(
                'id'       => 'custom-favicon',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Custom Favicon' ),
                'compiler' => 'true',
                'default'  => array( 'url' =>false ),
                
            ),
			array(
                'id'       => 'custom-gravatar',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Custom Gravatar' ),
                'compiler' => 'true',
                'default'  => array( 'url' =>false ),
      		 ),
			 array(
                'id'       => 'head-code-editor',
               	'type'     => 'ace_editor',
                'title'    => __( 'Header Code' ),
				'mode' => 'javascript',
				'theme'	   =>'chrome',
                'desc'     => __( 'The following code will add to the head tag. Useful if you need to add additional codes such as CSS or JS.' ),
				'compiler' => true,
            ),
			array(
                'id'       => 'footer-code-editor',
               	'type'     => 'ace_editor',
                'title'    => __( 'Footer Code' ),
				'mode' => 'javascript',
				'theme'	   =>'chrome',
                'desc'     => __( 'The following code will add to the footer before the closing body tag. Useful if you need to add Javascript or tracking code.' ),
				'compiler' => true,
            ),
		 )
	) );
	
	  Redux::setSection( $opt_name, array(
        'title' => __( 'Header Settings' ),
		'heading'=>__( 'Header Top area Settings' ),
        'id'    => 'header-top-settings',
        'desc'  => __( 'Here you can change header settings' ),
        'icon'  => '',
		'fields' => array(
						array(
							'id'       => 'phone-number',
							'type'     => 'text',
							'title'    => __( 'Contact Number' ),
							'desc'     => __( 'Enter your contact number' ),
							'output'   =>'.fa',
						),
						array(
							'id'       => 'contact-number-on',
							'type'     => 'switch',
							'title'    => __( 'Contact Number' ),
							'subtitle' => __( 'show or hide contact number!' ),
							'on'	   =>'Show',
							'off'      =>'Hide',
							'default'  => true,
						), 
						array(
							'id'       => 'email-address',
							'type'     => 'text',
							'title'    => __( 'Email Address' ),
							'desc'     => __( 'Enter your Email Address' ),
						),
						array(
							'id'       => 'email-show-hide',
							'type'     => 'switch',
							'title'    => __( 'Email Address' ),
							'subtitle' => __( 'show or hide email address!' ),
							'on'	   =>'Show',
							'off'      =>'Hide',
							'default'  => true,
						), 
						
					array(
						'id'       => 'logo-icon',
						'type'     => 'media',
						'url'      => true,
						'title'    => __( 'Logo Image' ),
						'compiler' => 'true',
						'default'  => array( 'url' =>false ),
						'hint'     => array(
							'content' => 'Upload a logo image, or enter URL to an image if it is already uploaded. the theme default logo gets applied if the input field is left blank.'
							),
					 ),
					 array(
						'id'             => 'logo-margin',
						'type'           => 'spacing',
						'output'         => array('.logo'),
						'mode'           => 'margin',
						'units'          => 'px',
						'units_extended' => 'false',
						'title'          => __('Logo Margin'),
						'desc'           => __('Give  margin to logo from Top, Right, Bottom, Left in pixels.'),
						'default'            => array(
							'margin-top'     => '0', 
							'margin-right'   => '0', 
							'margin-bottom'  => '0', 
							'margin-left'    => '0',
						)
					),
					 array(
						'id'       => 'country-name',
						'type'     => 'multi_text',
						'title'    => __( 'Enter Country Name' ),
						'output'   =>array('.dropdown-menu > li > a'),
						'hint'     => array(
							'content' => 'Enter here more then one country name by clicking on add more button to add different country name at a time.'
							),
					),
					array(
						'id'       => 'country-currency',
						'type'     => 'multi_text',
						'title'    => __( 'Enter Currency' ),
						'hint'     => array(
							'content' => 'Enter here more then one currency name by clicking on add more button to add different currency name at a time.'
							),
					),
					array(
							'id'       => 'email-on-off',
							'type'     => 'switch',
							'title'    => __( 'Show / Hide' ),
							'desc'	   => __( 'show or hide country and currency.' ),
							'on'	   =>'Show',
							'off'      =>'Hide',
							'default'  => true,
						), 
						'output'	   =>array('.btn-group '),
				)
				
			) 
		);
		Redux::setSection( $opt_name, array(
        'title'      => __( 'Styling' ),
		'heading'	 => __( 'Theme Color and Settings' ),
        'id'         => 'theme-color',
		'icon' 		 => 'el el-brush',
        'fields'     => array(
						array(
							'id'        => 'background-color',
							'type'      => 'background',
							'title'     => __('Background Color'),
							'subtitle'  => __('Pick a background color.'),
							'default'   => '#ffffff',
							'output'    => array('body')
						),
						array(
						'id'       => 'style-link-color',
						'type'     => 'link_color',
						'title'    => __('Links Color'),
						'desc'     => __('Here you can change links color.'),
						'default'  => array(
							'regular'  => '#696763', 
							'hover'    => '#fdb45e',
							'active'   => '#fdb45e', 
						),
						'output'    => array('a'),
					),
					array(
						'id'       => 'main-menu-background-color',
						'type'     => 'background',
						'title'    => __('Main menu background color'),
						'desc'     => __('Here you can change main menu background color.'),
						'default'  => '#FFFFFF',
						'output'    => array('.mainmenu'),
					),
					array(
						'id'       => 'main-menu-link-color',
						'type'     => 'link_color',
						'title'    => __('Menu Links Color'),
						'desc'     => __('Here you can change main menu links color.'),
						'default'  => array(
							'regular'  => '#696763', 
							'hover'    => '#fdb45e',
							'active'   => '#fdb45e', 
						),
						'output'    => array('.mainmenu ul li a'),
					),
					array(
						'id'       => 'products-menu-background-color',
						'type'     => 'background',
						'title'    => __('Products menu background color'),
						'desc'     => __('Here you can change products menu background color.'),
						'default'  => '#40403e',
						'output'    => array('.category-tab ul'),
					),
					array(
						'id'       => 'products-menu-link-color',
						'type'     => 'link_color',
						'title'    => __('Products Menu Links Color'),
						'desc'     => __('Here you can change products menu links color.'),
						'default'  => array(
							'regular'  => '#b3afa8', 
							'hover'    => '#ffffff',
							'active'   => '#ffffff', 
						),
						'output'    => array('.mainmenu ul li a'),
					),
					array( 
						'id'       => 'products-menu-border',
						'type'     => 'border',
						'title'    => __('Products menu Border Option'),
						'output'   => array('.category-tab ul'),
						'desc'     => __('Change products menu border color.'),
						'default'  => array(
							'border-color'  => '#fe980f', 
							'border-style'  => 'solid', 
							'border-top'    => '0px', 
							'border-right'  => '0px', 
							'border-bottom' => '1px', 
							'border-left'   => '0px'
						)
					),
					array(
						'id'       => 'header-background-color',
						'type'     => 'background',
						'title'    => __('Header Background color'),
						'desc'     => __('Here you can change header background color.'),
						'default'  => '#ffffff',
						'output'   => array('#header'),
					),
					array(
						'id'       => 'header-top-area-background',
						'type'     => 'background',
						'title'    => __('Top Header'),
						'desc'     => __('Here you can change top header background color.'),
						'default'  => '#f0f0e9',
						'output'   => array('.header_top'),
					),
					array(
						'id'       => 'footer-background-color',
						'type'     => 'background',
						'title'    => __('Footer Background color'),
						'desc'     => __('Here you can change footer background color.'),
						'default'  => '#f0f0e9',
						'output'    => array('#footer'),
					),
					array(
						'id'       => 'custom-css-editor',
						'type'     => 'ace_editor',
						'title'    => __( 'Custom CSS' ),
						'mode' => 'css',
						'theme'	   =>'chrome',
						'desc'     => __( 'Enter your custom css code here ' ),
						'compiler' => true,
					),
       			 ),
				 
   	 		)
	  );
	  	Redux::setSection( $opt_name, array(
						'title' => __( 'Typography' ),
						'heading'=>__( 'Main Typography' ),
						'id'    => 'typography-settings',
						'icon'  => 'el el-font',
						'fields' => array(
									array(
						'id'          => 'general-typography',
						'type'        => 'typography', 
						'title'       => __('General Typography'),
						'google'      => true, 
						'font-backup' => true,
						'output'      => array('body p,.blog-post-area .single-blog-post p'),
						'units'       =>'px',
						'default'     => array(
						'color'       => '#696763', 
						'font-weight'  => '300', 
						'font-family' => 'Roboto', 
						'google'      => true,
						'font-size'   => '14px', 
						
						'font-backup' => 'Arial, Helvetica, sans-serif',
						'units'       =>'px',
					),
				),
						array(
						'id'          => 'top-menu-typography',
						'type'        => 'typography', 
						'title'       => __('Top Menu'),
						'google'      => true, 
						'font-backup' => true,
						'output'      => array('.shop-menu ul li a'),
						'units'       =>'px',
						'default'     => array(
						'color'       => '#696763', 
						'font-weight'  => '300', 
						'font-family' => 'Roboto', 
						'google'      => true,
						'font-size'   => '14px', 
						
						'font-backup' => 'Arial, Helvetica, sans-serif',
						'units'       =>'px',
					),
				),	
						array(
						'id'          => 'main-menu-typography',
						'type'        => 'typography', 
						'title'       => __('Main Menu'),
						'google'      => true, 
						'font-backup' => true,
						'output'      => array('.mainmenu ul li a'),
						'units'       =>'px',
						'default'     => array(
						'color'       => '#696763', 
						'font-weight'  => '300', 
						'font-family' => 'Roboto', 
						'google'      => true,
						'font-size'   => '14px', 
						
						'font-backup' => 'Arial, Helvetica, sans-serif',
						'units'       =>'px',
					),
				),		
						array(
						'id'          => 'center-menu-typography',
						'type'        => 'typography', 
						'title'       => __('Products Menu'),
						'google'      => true, 
						'font-backup' => true,
						'output'      => array('.category-tab ul li a'),
						'units'       =>'px',
						'default'     => array(
						'color'       => '#b3afa8', 
						'font-weight'  => '300', 
						'font-family' => 'Roboto', 
						'google'      => true,
						'font-size'   => '14px', 
						
						'font-backup' => 'Arial, Helvetica, sans-serif',
						'units'       =>'px',
					),
				),	
						array(
						'id'          => 'main-widgets-typography',
						'type'        => 'typography', 
						'title'       => __('Main SideBar'),
						'google'      => true, 
						'font-backup' => true,
						'output'      => array('.category-products .panel-default .panel-heading .panel-title a,.brands-name .nav-stacked li a'),
						'units'       =>'px',
						'default'     => array(
						'color'       => '#696763', 
						'font-weight'  => '300', 
						'font-family' => 'Roboto', 
						'google'      => true,
						'font-size'   => '14px', 
						
						'font-backup' => 'Arial, Helvetica, sans-serif',
						'units'       =>'px',
					),
				),		
						array(
						'id'          => 'blogs-typography',
						'type'        => 'typography', 
						'title'       => __('Blog titles'),
						'google'      => true, 
						'font-backup' => true,
						'output'      => array('.blog-post-area .single-blog-post h3'),
						'units'       =>'px',
						'default'     => array(
						'color'       => '#696763', 
						'font-weight'  => '500', 
						'font-family' => 'Roboto', 
						'google'      => true,
						'font-size'   => '16px', 
						
						'font-backup' => 'Arial, Helvetica, sans-serif',
						'units'       =>'px',
					),
				),		
						array(
						'id'          => 'footer-typography',
						'type'        => 'typography', 
						'title'       => __('Footer Typography'),
						'google'      => true, 
						'font-backup' => true,
						'output'      => array('.single-widget ul li a'),
						'units'       =>'px',
						'default'     => array(
						'color'       => '#8c8c88', 
						'font-weight'  => '300', 
						'font-family' => 'Roboto', 
						'google'      => true,
						'font-size'   => '14px', 
						
						'font-backup' => 'Arial, Helvetica, sans-serif',
						'units'       =>'px',
					),
				),	
						array(
						'id'          => 'footer-title-typography',
						'type'        => 'typography', 
						'title'       => __('Footer Titles'),
						'google'      => true, 
						'font-backup' => true,
						'output'      => array('.single-widget h2'),
						'units'       =>'px',
						'default'     => array(
						'color'       => '#666663', 
						'font-weight'  => '500', 
						'font-family' => 'Roboto', 
						'google'      => true,
						'font-size'   => '16px', 
						'font-backup' => 'Arial, Helvetica, sans-serif',
						'units'       =>'px',
					),
				),	
						array(
						'id'          => 'main-h2-typography',
						'type'        => 'typography', 
						'title'       => __('All h2 titles'),
						'google'      => true, 
						'font-backup' => true,
						'output'      => array('.left-sidebar h2, .brands_products h2,h2.title'),
						'units'       =>'px',
						'default'     => array(
						'color'       => '#fe980f', 
						'font-weight'  => '700', 
						'font-family' => 'Roboto', 
						'google'      => true,
						'font-size'   => '18px', 
						
						'font-backup' => 'Arial, Helvetica, sans-serif',
						'units'       =>'px',
					),
				),	
				)
				
			) 
		);
		Redux::setSection( $opt_name, array(
        'title' => __( 'Footer Settings' ),
		'heading'=>__( 'Footer Widgets layout' ),
        'id'    => 'footer-settings',
        'icon'  => 'el el-road',
		'fields' => array(
						array(
							'id'       => 'footer-widgets-on-off',
							'type'     => 'switch',
							'title'    => __( 'Footer Widgets' ),
							'on'	   =>'Show',
							'off'      =>'Hide',
							'default'  => true,
						), 
						array(
							'id'       => 'select-footer-layout',
							'type'     => 'select',
							'title'    => __('Select Footer layouts'), 
							'desc'     => __('Select colum to show in footer'),
							'options'  => array(
								'1' => 'One colum layout',
								'2' => 'Two colum layout',
								'3' => 'Three colum layout',
								'4' => 'Four colum layout',
								'5' => 'Five colum layout'
							),
							'default'  => '5',
						),
						array(
							'id'=>'footer-text-one',
							'type' => 'textarea',
							'title' => __('Footer Text One'), 
							'validate' => 'html_custom',
							'allowed_html' => array(
								'a' => array(
									'href' => array(),
									'title' => array()
								),
								'br' => array(),
								'em' => array(),
								'strong' => array()
							)
						),
						array(
							'id'=>'footer-text-two',
							'type' => 'textarea',
							'title' => __('Footer Text Two'),
							'validate' => 'html_custom',
							'allowed_html' => array(
								'a' => array(
									'href' => array(),
									'title' => array()
								),
								'br' => array(),
								'em' => array(),
								'strong' => array()
							)
						),
						
				)
				
			) 
		);
		
		
		Redux::setSection( $opt_name, array(
        'title' => __( 'Social Networking' ),
		'heading'=>__( 'Social Networking' ),
        'id'    => 'social-networking',
        'icon'  => 'el el-link',
		'fields' => array(
						array(
							'id'       => 'facebook-url',
							'type'     => 'text',
							'title'    => __('Facebook URL'),
							'validate' => 'url',
						),
						array(
							'id'       => 'twitter-url',
							'type'     => 'text',
							'title'    => __('Twitter URL'),
							'validate' => 'url',
						),
						array(
							'id'       => 'linkedin-url',
							'type'     => 'text',
							'title'    => __('LinkedIn URL'),
							'validate' => 'url',
						),
						array(
							'id'       => 'dribbble-url',
							'type'     => 'text',
							'title'    => __('Dribbble URL'),
							'validate' => 'url',
						),
						array(
							'id'       => 'google-plus-url',
							'type'     => 'text',
							'title'    => __('Google+ URL'),
							'validate' => 'url',
						),
						array(
							'id'       => 'youtube-url',
							'type'     => 'text',
							'title'    => __('Youtube URL'),
							'validate' => 'url',
						),
						
						
				)
				
			) 
		);
		Redux::setSection( $opt_name, array(
        'title' => __( 'Sidebars' ),
		'heading'=>__( 'Sidebars' ),
        'id'    => 'main-sidebars',
        'icon'  => 'el el-tasks',
		'fields' => array(
					array(
							'id'       => 'home-side-bar',
							'type'     => 'switch',
							'title'    => __( 'Disable on the homepage' ),
							'subtitle' => __( 'show or hide sidebar on home page' ),
							'on'	   =>'Show',
							'off'      =>'Hide',
							'default'  => true,
						), 
						array(
							'id'       => 'product-sidebar',
							'type'     => 'switch',
							'title'    => __( 'Disable on the products page' ),
							'subtitle' => __( 'show or hide sidebar on products page' ),
							'on'	   =>'Show',
							'off'      =>'Hide',
							'default'  => true,
						), 
						array(
							'id'       => 'post-side-bar',
							'type'     => 'switch',
							'title'    => __( 'Disable on  post' ),
							'subtitle' => __( 'show or hide sidebar on posts' ),
							'on'	   =>'Show',
							'off'      =>'Hide',
							'default'  => true,
						), 
						
				)
				
			) 
		);
    /*
     * <--- END SECTIONS
     */
