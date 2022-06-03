<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<style>
  .ajax-loader {
    display: none !important;
  }
		.wpcf7-response-output {
    display: none;
  }

  .wpcf7-not-valid-tip {
    display: none;
  }

  .wpcf7-list-item {
    margin: 0px;
  }
  .wpcf7-list-item label {
    display: flex !important;
    align-items: center !important;
  }

	</style>
</head>
<body <?php body_class('rfs:px-5 bg-slate-50'); ?>>
<main class="flex flex-col justify-between h-screen overflow-y-auto">
	<?php get_template_part('./components/index', 'header', [])?>