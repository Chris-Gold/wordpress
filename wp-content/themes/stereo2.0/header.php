<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exemple de thème WordPress</title>

    <!-- CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
    <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet">

  
    <!--[endif]-->
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>


    <div class="header">
      <div class="blog-header">
        <nav id="navigation-principale" role="navigation" class="navbar navbar-inverse">
          <div class="container">
            <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
          </div>
            <div class="navbar-header">

              <?php
                echo '<ul class="nav navbar-nav">';
                $lst = get_categories();
                foreach ($lst as $idx => $categ) {
                  echo "<li><a href='".get_category_link($categ->term_id)."'>".$categ->name."</a></li>";
                }
                echo "</ul>";

              ?>
                              <!--
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Evénements</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
            -->
            </div>
        </nav>
      </div>
      <?php //get_sidebar(); ?>
    </div>
