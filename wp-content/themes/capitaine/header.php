<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/main.css">

   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div style="text-align:center;">
      <a href="<?php echo home_url('/'); ?>">
        <img  src="<?php echo get_template_directory_uri(); ?>/img/ecologie-ce-quil-faut-savoir-sur-cette-discipline-scientifique.jpeg" alt="Logo">
      </a>
    </div>
  </header>
  <?php wp_body_open(); ?>