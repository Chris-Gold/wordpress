<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exemple de thème WordPress</title>

    <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
    <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet">
    <base href="/site_cv/wordpress/wp-content/themes/stereo2.0/" target="_blank">

    <!--[endif]-->
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

  <div id="page">
    <div class="header"> <!-- informations du blog -->
      <div class="blog-header">
          <nav id="navigation-principale" role="navigation" class="navbar navbar-inverse">
              <div class="row col-12">
                <div class="col-8">
                  <h1 class="blog-title ">
                    <i class="fas fa-music fa-1x"></i>
                    <a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>

                    <div class="navbar-header">
                      <?php
                        echo '<ul class="nav navbar-nav">';
                        echo "<li>";
                        wp_list_pages("depth=1&1&title_li=");
                        echo "</li>";
                        $lst = get_categories();
                        foreach ($lst as $idx => $categ) {
                          echo "<li><a href='".get_category_link($categ->term_id)."'>".$categ->name."</a></li>";
                        }
                        echo "</ul>";
                      ?>
                  </div>
              </div>

              <div class="sidebar-module sidebar-module-inset col-4 text-right">
            	  <ul class="list-unstyled">
                  <li id="search"><?php include(TEMPLATEPATH . '/searchform.php'); ?></li>
                </ul>
              </div>
            </div>
          </nav>
      </div>
    </div>
