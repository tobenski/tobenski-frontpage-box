<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/tobenski/
 * @since      1.0.0
 *
 * @package    Tobenski_Frontpage_Box
 * @subpackage Tobenski_Frontpage_Box/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Tobenski_Frontpage_Box
 * @subpackage Tobenski_Frontpage_Box/admin
 * @author     Knud Rihøj <tirdyr@tobenski.dk>
 */
class Tobenski_Frontpage_Box_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the Homebox CPT
	 *
	 * @since 1.0.0
	 */
	public function register_cpt()
	{
		$labels = array(
			'name' => 'Frontpage Boxes',
			'manu_name' => 'Home Boxes',
			'singular_name' => 'Frontpage Box',
			'add_new_item' => 'Tilføj Ny Box',
			'edit_item' => 'Rediger Box'
		);

		$args = array(
			'rewrite' => array('slug' => 'homeboxes'),
			'labels' => $labels,
			'description' => 'Forside boxes til Det Gamle Posthus',
			'public' => true,
			'hierarchical' => false,
			'menu_position' => 20,
			'menu-icon' => 'dashicons-admin-comments',
			'has_archive' => false,
            'supports' => array(
                'title', 'editor', 'page-attributes',
            )
		);



		register_post_type( 'homebox', $args );
		
	}

	/**
	 * Register the Homebox Custom Fields
	 *
	 * @since 1.0.1
	 */
	public function register_custom_fields()
	{
		acf_add_local_field_group(array(
			'key' => 'group_tob_jepvwrsiug',
			'title' => 'Knappen',
			'fields' => array(
				array(
					'key' => 'field_tob_ew8q1nxnah',
					'label' => 'Knappens Link',
					'name' => 'tobenski_homebox_link',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_tob_exw0d4sl6k',
					'label' => 'Tekst På Knappen',
					'name' => 'tobenski_homebox_button',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'homebox',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'seamless',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		));

	}
}
