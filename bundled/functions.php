<?php
function _themename_assets() {
  wp_enqueue_style( '_themename-stylesheet', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( '_themename-scripts', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true );  
}
add_action('wp_enqueue_scripts', '_themename_assets');
//Убираем из Contact form теги р
add_filter('wpcf7_autop_or_not', '__return_false');


function post_get_terms($taxonomies, $args = array())
{
	//Parse $args in case its a query string.
	$args = wp_parse_args($args);

	if (!empty($args['post_types'])) {
		$args['post_types'] = (array) $args['post_types'];
		add_filter('terms_clauses', 'wpse_filter_terms_by_cpt', 10, 3);

		function wpse_filter_terms_by_cpt($pieces, $tax, $args)
		{
			global $wpdb;

			// Don't use db count
			$pieces['fields'] .= ", COUNT(*) ";

			//Join extra tables to restrict by post type.
			$pieces['join'] .= " INNER JOIN $wpdb->term_relationships AS r ON r.term_taxonomy_id = tt.term_taxonomy_id 
															INNER JOIN $wpdb->posts AS p ON p.ID = r.object_id ";

			// Restrict by post type and Group by term_id for COUNTing.
			$post_types_str = implode(',', $args['post_types']);
			$pieces['where'] .= $wpdb->prepare(" AND p.post_type IN(%s) GROUP BY t.term_id", $post_types_str);

			remove_filter(current_filter(), __FUNCTION__);
			return $pieces;
		}
	} // endif post_types set

	return get_terms($taxonomies, $args);
}


//Регистрация блоков
add_action('acf/init', 'acfBlock');
function acfBlock()
{
	if (function_exists('acf_register_block_type')) {

		//Блок шаги
		acf_register_block_type(array(
			'name'              => 'stepblock',
			'title'             => __('Шаги'),
			'description'       => __(''),
			'render_template'   => '/components/guttenberg/steps.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));

		//Блок что вы получите
		acf_register_block_type(array(
			'name'              => 'whatDoYouGet',
			'title'             => __('Что вы получите'),
			'description'       => __(''),
			'render_template'   => '/components/guttenberg/what-do-you-get.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));

		//Текст и гифка
		acf_register_block_type(array(
			'name'              => 'textAndGif',
			'title'             => __('Текст и гифка'),
			'description'       => __(''),
			'render_template'   => '/components/guttenberg/text-and-gif.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));

		//Блой текст и кнопка
		acf_register_block_type(array(
			'name'              => 'gigantTextAndButton',
			'title'             => __('Большой текст и кнопка'),
			'description'       => __(''),
			'render_template'   => '/components/guttenberg/gigantTextAndButton.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));

		//Блок что анализируем
		acf_register_block_type(array(
			'name'              => 'analyzing',
			'title'             => __('Блок «Что анализируем»'),
			'description'       => __('Можно использовать если нужно показать два заголовка и картинку'),
			'render_template'   => '/components/guttenberg/analyzing.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));

		//Лид блок для услуг
		acf_register_block_type(array(
			'name'              => 'leadService',
			'title'             => __('Блок «Лид блок для услуг»'),
			'description'       => __(''),
			'render_template'   => '/components/guttenberg/service-lead.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));

		//Список с галочкой
		acf_register_block_type(array(
			'name'              => 'checkandlist',
			'title'             => __('Блок «Список с галочкой»'),
			'description'       => __(''),
			'render_template'   => '/components/guttenberg/checkandlist.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));



		//Лид текст для проектов
		acf_register_block_type(array(
			'name'              => 'leadProject',
			'title'             => __('Блок «Лид текст для проектов»'),
			'description'       => __(''),
			'render_template'   => '/components/guttenberg/leadProject.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));

		//Большой заголовок и описание
		acf_register_block_type(array(
			'name'              => 'headlineDescription',
			'title'             => __('Блок «Заголовок и описание»'),
			'description'       => __('С большим текстом'),
			'render_template'   => '/components/guttenberg/headlineDescription.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));

		//Большой заголовок и описание Новый блок
		acf_register_block_type(array(
			'name'              => 'headlineDescriptionEditor',
			'title'             => __('Блок «Заголовок и описание» Новый'),
			'description'       => __('В описании можно редактировать текст и добавлять ссылки'),
			'render_template'   => '/components/guttenberg/headlineDescriptionEditor.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'star-filled',
			'mode'			=> 'edit'
		));

		//Большой заголовок, картинка, и описание Новый блок
		acf_register_block_type(array(
			'name'              => 'headlineDescriptionImageEditor',
			'title'             => __('Блок «Заголовок, описание и картинка» Новый'),
			'description'       => __('В описании можно редактировать текст и добавлять ссылки'),
			'render_template'   => '/components/guttenberg/headlineDescriptionImageEditor.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'star-filled',
			'mode'			=> 'edit'
		));

		//Спикеры
		acf_register_block_type(array(
			'name'              => 'speakers',
			'title'             => __('Блок «Спикеры»'),
			'description'       => __('Выбор человека из команды'),
			'render_template'   => '/components/guttenberg/speakers.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'star-filled',
			'mode'			=> 'edit'
		));		

		//Большой заголовок, картинка, и описание
		acf_register_block_type(array(
			'name'              => 'headlineDescriptionImage',
			'title'             => __('Блок «Заголовок, описание и картинка»'),
			'description'       => __('С большим текстом'),
			'render_template'   => '/components/guttenberg/headlineDescriptionImage.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));



		//Видео блок
		acf_register_block_type(array(
			'name'              => 'videoBlock',
			'title'             => __('Блок «Видео»'),
			'description'       => __(''),
			'render_template'   => '/components/guttenberg/videoBlock.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));

		//Видео блок
		acf_register_block_type(array(
			'name'              => 'bannerBlock',
			'title'             => __('Блок «Баннер»'),
			'description'       => __(''),
			'render_template'   => '/components/guttenberg/banner.php',
			'category'          => 'common',
			'mode' => 'Preview',
			'icon'			=> 'admin-users',
			'mode'			=> 'edit'
		));
	}
}


//Функция адптивный изображений acf
function awesome_acf_responsive_image($image_id, $image_size, $max_width)
{

	// check the image ID is not blank
	if ($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url($image_id, $image_size);

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset($image_id, $image_size);

		// generate the markup for the responsive image
		echo 'src="' . $image_src . '" srcset="' . $image_srcset . '" sizes="(max-width: ' . $max_width . ') 100vw, ' . $max_width . '"';
	}
}

?>