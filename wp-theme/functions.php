<?php

add_theme_support( 'post-thumbnails' );

function registrar_noticias() {
	$descricao = 'Usado para listar as notícias do site.';
	$singular = 'Notícia';
	$plural = 'Notícias';

	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'view_item' => 'Ver ' . $singular,
		'edit_item' => 'Editar ' . $singular,
		'new_item' => 'Nova ' . $singular,
		'add_new_item' => 'Adicionar nova ' . $singular
	);

	$supports = array(
		'title',
		'editor',
		'thumbnail'
	);

	$args = array(
		'labels' => $labels,
		'description' => $descricao,
		'public' => true,
		'menu_icon' => 'dashicons-format-aside',
		'supports' => $supports
	);

    add_filter( 'wps_subtitle_field_placeholder', 'subtitulo_placeholder' );
	register_post_type('noticia', $args);	
}
//Modifica o placeholder do subtitulo
function subtitulo_placeholder( $placeholder ) {
    return 'Digite o subtítulo aqui';
}

add_action('init', 'registrar_noticias');
add_action('init', 'add_subtitulo_post_noticia');

function add_subtitulo_post_noticia(){
    add_post_type_support( 'noticia', 'wps_subtitle' );
}


