<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order,number=-1');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// Pull all the posts into an array
	$options_posts = array();
	$options_posts_obj = get_posts('sort_column=post_parent,menu_order');
	$options_posts[''] = 'Selecione um Post:';
	foreach ($options_posts_obj as $post) {
		$options_posts[$post->ID] = $post->post_title;
	}

	$options[] = array(
		'name' => 'Cabeçalho',
		'type' => 'heading');

	$options[] = array(
		'name' => 'Blogo do RSS',
		'desc' => 'Adicione um breve resumo para o box do RSS',
		'id' => 'rss_info',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => 'Home',
		'type' => 'heading');

	$options[] = array(
		'name' => 'Bloco Destaques da Home',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => 'Primeiro Bloco',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => 'Ícone',
		'desc' => 'Faça o upload do ícone para o primeiro destaque',
		'id' => 'icon_feature_upload_um',
		'type' => 'upload');

	$options[] = array(
		'name' => 'Título',
		'desc' => 'Adicione o título para o primeiro destaque',
		'id' => 'title_feature_um',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Resumo',
		'desc' => 'Adicione um breve resumo para o primeiro destaque',
		'id' => 'resumo_feature_um',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => 'Link do Box 1',
		'desc' => 'Adicione aqui a URL para onde o primeiro Box deve apontar. Lembre-se de adicionar o http://',
		'id' => 'link_box_um',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Segundo Bloco',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => 'Ícone',
		'desc' => 'Faça o upload do ícone para o segundo destaque',
		'id' => 'icon_feature_upload_dois',
		'type' => 'upload');

	$options[] = array(
		'name' => 'Título',
		'desc' => 'Adicione o título para o segundo destaque',
		'id' => 'title_feature_dois',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Resumo',
		'desc' => 'Adicione um breve resumo para o segundo destaque',
		'id' => 'resumo_feature_dois',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => 'Link do Box 2',
		'desc' => 'Adicione aqui a URL para onde o segundo Box deve apontar. Lembre-se de adicionar o http://',
		'id' => 'link_box_dois',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Terceiro Bloco',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => 'Ícone',
		'desc' => 'Faça o upload do ícone para o terceiro destaque',
		'id' => 'icon_feature_upload_tres',
		'type' => 'upload');

	$options[] = array(
		'name' => 'Título',
		'desc' => 'Adicione o título para o terceiro destaque',
		'id' => 'title_feature_tres',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Resumo',
		'desc' => 'Adicione um breve resumo para o terceiro destaque',
		'id' => 'resumo_feature_tres',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => 'Link do Box 3',
		'desc' => 'Adicione aqui a URL para onde o terceiro Box deve apontar. Lembre-se de adicionar o http://',
		'id' => 'link_box_tres',
		'std' => '',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Quarto Bloco',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => 'Ícone',
		'desc' => 'Faça o upload do ícone para o quarto destaque',
		'id' => 'icon_feature_upload_quatro',
		'type' => 'upload');

	$options[] = array(
		'name' => 'Título',
		'desc' => 'Adicione o título para o quarto destaque',
		'id' => 'title_feature_quatro',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Resumo',
		'desc' => 'Adicione um breve resumo para o quarto destaque',
		'id' => 'resumo_feature_quatro',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => 'Link do Box 4',
		'desc' => 'Adicione aqui a URL para onde o quarto Box deve apontar. Lembre-se de adicionar o http://',
		'id' => 'link_box_quatro',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Menu de Categorias da Home',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => 'Primeira Categoria',
		'desc' => 'Adicione aqui o ID da primeira categoria que deseja adicionar ao menu',
		'id' => 'cat_1',
		'std' => '1',
		'class' => 'mini',
		'type' => 'text');

	$options[] = array(
		'name' => 'Segunda Categoria',
		'desc' => 'Adicione aqui o ID da segunda categoria que deseja adicionar ao menu',
		'id' => 'cat_2',
		'std' => '2',
		'class' => 'mini',
		'type' => 'text');

	$options[] = array(
		'name' => 'Terceira Categoria',
		'desc' => 'Adicione aqui o ID da terceira categoria que deseja adicionar ao menu',
		'id' => 'cat_3',
		'std' => '3',
		'class' => 'mini',
		'type' => 'text');

	$options[] = array(
		'name' => 'Quarta Categoria',
		'desc' => 'Adicione aqui o ID da quarta categoria que deseja adicionar ao menu',
		'id' => 'cat_4',
		'std' => '4',
		'class' => 'mini',
		'type' => 'text');

	$options[] = array(
		'name' => 'Quinta Categoria',
		'desc' => 'Adicione aqui o ID da quinta categoria que deseja adicionar ao menu',
		'id' => 'cat_5',
		'std' => '5',
		'class' => 'mini',
		'type' => 'text');

	$options[] = array(
		'name' => 'Anúncio da Home',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => 'Imagem do Anúncio',
		'desc' => 'Faça o upload da imagem do anúncio. A medida deve ser de 640x90px',
		'id' => 'anuncio_img',
		'type' => 'upload');

	$options[] = array(
		'name' => 'Link do Anúncio',
		'desc' => 'Adicione aqui a URL para onde o anúncio deve apontar. Lembre-se de adicionar o http://',
		'id' => 'anuncio_link',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Posts da Home',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => 'Quantidade de Posts',
		'desc' => 'Esse campo define quantos posts devem ser apresentados na Home',
		'id' => 'qtd_posts',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Quantidade de Palavras dos Posts da Home',
		'desc' => 'Coloque aqui a quantidade de palavras que deseja que apareça nos posts exibidos da home. Caso não esteja setado aqui, o valor padrão é 50 palavras',
		'id' => 'qtd_destaque',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Rodapé',
		'type' => 'heading');

$options[] = array(
		'name' => 'Primeiro Bloco',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => 'Título',
		'desc' => 'Adicione o título para o primeiro destaque do Rodapé',
		'id' => 'title_footer_um',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Resumo',
		'desc' => 'Adicione um breve resumo para o primeiro destaque do Rodapé',
		'id' => 'resumo_footer_um',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => 'Link do Box 1',
		'desc' => 'Adicione aqui a URL para onde o primeiro Box do Rodapé deve apontar. Lembre-se de adicionar o http://',
		'id' => 'link_footer_um',
		'std' => '',
		'type' => 'text');


	$options[] = array(
		'name' => 'Segundo Bloco',
		'desc' => '',
		'type' => 'info');


	$options[] = array(
		'name' => 'Título',
		'desc' => 'Adicione o título para o segundo destaque do Rodapé',
		'id' => 'title_footer_dois',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Resumo',
		'desc' => 'Adicione um breve resumo para o segundo destaque do Rodapé',
		'id' => 'resumo_footer_dois',
		'std' => '',
		'type' => 'textarea');


	$options[] = array(
		'name' => 'Terceiro Bloco',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => 'Título',
		'desc' => 'Adicione o título para o terceiro destaque do Rodapé',
		'id' => 'title_footer_tres',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Resumo',
		'desc' => 'Adicione um breve resumo para o terceiro destaque do Rodapé',
		'id' => 'resumo_footer_tres',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => 'Telefone',
		'desc' => 'Adicione aqui o telefone de atendimento',
		'id' => 'telefone_footer_tres',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => 'Link do Box 3',
		'desc' => 'Adicione aqui a URL para onde o terceiro Box do Rodapé deve apontar. Lembre-se de adicionar o http://',
		'id' => 'link_footer_tres',
		'std' => '',
		'type' => 'text');

	return $options;
}
