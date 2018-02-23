<?php get_header(); ?> <!-- ouvrir header,php -->

<div id="content">
    <?php if(have_posts()) : while(have_posts() ) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <p class="postmetadata">   <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?></p>
        <div class="post_content"> <?php the_content(); ?> </div>
    </div>
    <?php endwhile; endif; ?>
</div>



			</div>
		</div>
<?php get_footer(); ?>





<?php
//    if ( have_posts() ) : while ( have_posts() ) : the_post();
//		get_template_part( 'content', get_post_format() );
//	endwhile; endif;
?>
