<?php
	
	/**
	 * khai báo hàm giá trị
	 * @theme_url = lấy dường dẫn thư mục theme.
	 * @core= lấy đường dẫn của thư mục core
	 */
	
	define('THEME_URL',get_stylesheet_directory());


	// get_stylesheet_directory(): lấy đường dẫn theme
	
	define("CORE",THEME_URL."/core");

	/**
	 * Nhúng file core/init.php
	 */
	require_once(CORE."/init.php");

	/** thiết lập chiều rộng nd */

	if(!isset($content_width)){
		$content_width=620;
		// chieu rong hien thi nd la 620px
	}

	// khai bao chuc nang trong theme
	
	if(!function_exists('tuyengiang_theme_setup')){
		function tuyengiang_theme_setup(){
			// thiet lap textdomain
			$language_folder=THEME_URL."/language";
			load_theme_textdomain('tuyengiang',$language_folder);
			/** tu dong them link RSS le head */
			add_theme_support("automatic-feed-links");

			/** them post thumbnail */
			add_theme_support("post-thumbnail");

			/** post format */
			add_theme_support("post-formats",array(
				'image','video','gallery','quote','link'
			));

			/**theme title-tag */
			add_theme_support("title-tag");

			/** theme custom background */
			$default_bakground=array(
				'default-color'=>"#333"
			);
			add_theme_support("custom-background",$default_bakground);

			/** them menu */
			register_nav_menu('primary-menu',__('Primary Menu','tuyengiang'));

			/**tao silder **/
			$sidebar=array(
				'name'=>__('Main Sidebar','tuyengiang'),
				'id'=>'main-sidebar',
				'decription'=>__('Default sidebar'),
				'class'=>'main-sidebar',
				'before_title'=>'<h3 class="widgettitle">',
				'after_title'=>'</h3>'
			);
			register_sidebar($sidebar);
		}
		add_action('init','tuyengiang_theme_setup');
	}



	/** Template_function */

	if(!function_exists('theme_header')){
		function theme_header() {?>

			<div class="site-name">
			<?php 
				if(is_home()){
					printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',get_bloginfo('url'),get_bloginfo('description'),get_bloginfo('sitename'));
				}else{
					printf('<p><a href="%1$s" title="%2$s">%3$s</a></p>',get_bloginfo('url'),get_bloginfo('description'),get_bloginfo('sitename'));
				}
			?>
			</div><!--site-name-->
			<div class="site-description"><?php get_bloginfo('description');?> </div><?php 
		}
	}

/*** thiet lap menu ***/
if(!function_exists('theme_menu')){
	function theme_menu($menu){
		$menu=array(
			'theme_location'=>$menu,
			'container'=>'nav',
			'container_class'=>$menu
		);
		wp_nav_menu($menu);
	}
}


/** tao ham phan trang */
if(!function_exists('tuyengiang_pavination')){
	function tuyengiang_pavination(){
		if($GLOBAlS['wp_query']->max_num_pages < 2){
			return '';
		} ?>
		<nav class="pavination" role="navigation">
			<?php if(get_next_post_link()): ?>
				<div class="prev"><?php next_posts_link( __('Prev','tuyengiang')); ?></div>
			<?php endif; ?>

			<?php if(get_previous_post_link()): ?>
				<div class="next"><?php previous_posts_link( __('Next','tuyengiang')); ?></div>
			<?php endif; ?>
		</nav>
		<?php 
	}
}
