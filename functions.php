<!-- This is a core template of any wordpress theme.
	It is kind of a plugin which comes handy when you have to plug in all of the functionality you need within a theme.
	Eg. If you want to add a bootstrap, instead of physically going into the header and putting in your stylesheet tags,
	you can can enqueue it.
	When we want to use a stylesheet instead of doing href,we need to create a hook which is going to hook into wp_head and is going to add those stylesheets in there.   -->
<?php
	//Load stylesheets
	function load_css()
	{
		// In the below function, we are using this function to add stylesheets.The first element in the bracket is the name which we use (it can be anything) and the second is the location of the  stylesheet.The get function tells wordpress the root path to get to that stylesheet..
		//https://developer.wordpress.org/reference/functions/wp_register_style/
		wp_register_style('bootstrap',get_template_directory_uri(). '/css/bootstrap.min.css',array(),false,'all');
		//Enqueue the style
		wp_enqueue_style('bootstrap');

		wp_register_style('main',get_template_directory_uri(). '/css/main.css',array(),false,'all');
			//Enqueue the style
			wp_enqueue_style('main');


	// We are including our own stylesheet main.css and we write it later on because we want it to override any other (like bootstrap)


	}
	//We need the function to run and hook itself to the header
	add_action('wp_enqueue_scripts','load_css');



	//Load Javascript
	function load_js()
	{
		wp_enqueue_script('jquery');
		// https://developer.wordpress.org/reference/functions/wp_register_script/ ---to look into detail about the arguments
		wp_register_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js','jquery',false,true);
		wp_enqueue_script('bootstrapjs');





	}
	add_action('wp_enqueue_scripts','load_js');



	//Theme OPtions
	//To include menu in wordpress
	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' );
	add_theme_support('widgets');
	add_action( 'after_setup_theme', 'wptutsplus_theme_support' );
	//We create a theme location(i.e we create a location and then we put a hook in our location which says it is the top bar location for example.) and then we create our menu and then we add the menu to the theme location or multiple locations in order to have full control of the menu.
	//Menus
	register_nav_menus(
		array(

			'top-menu'=>'Top Menu Location',
			'mobile-menu'=>'Mobile Menu Location',
			//id => Name
			//Now we will assign these locations to the specific parts of the website
			//In our case it will be in header.
		)


	);

	//Register my_sidebars
	function my_sidebars()
	{
		register_sidebar(
			array(
				'name'=> 'Page Sidebar',
				'id'=>'page-sidebar',
				'before_title'=> '<h3 class="widget-title">',
				'after_title'=>'</h3>',


			)
		);
			register_sidebar(
			array(
				'name'=> 'Blog Sidebar',
				'id'=>'blog-sidebar',
				'before_title'=> '<h3 class="widget-title">',
				'after_title'=>'</h3>',


			)
		);
	}
	add_action('widgets_init','my_sidebars');

	?>