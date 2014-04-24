<?php get_header(); ?>
<div id="content">
				<h2 class="tag-page-title"><?php _e( 'R&eacute;sultats pour:' ) ?> <span><?php the_search_query() ?></span></h2>
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="post-block">
	<div id="post-content" <?php post_class(); ?>>
<div id="postblock-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail'); ?></a></div>
<div id="post-text">
<div id="meta"><?php the_category(', '); ?></div>
<div id="post-block-title"><a href="<?php the_permalink(); ?>"/><h2><?php the_title ();?></h2></a></div>
<div id="postblock-content" ><?php the_excerpt(); ?></a></div>
<div id="more"><a href="<?php the_permalink(); ?>" alt="Lire la suite de cet article" title="Lire la suite de cet article"/>+</a></div>
</div><!-- #post-text -->
</div> <!-- #post-content -->
</div>
<?php endwhile; ?>
<?php else : ?>
<div class="no-results">
<p><?php _e( 'Aucun resultat. Merci de renouveller votre recherche.' ) ?></p>
</div>
<?php endif; ?>  
<div id="navigation"><?php posts_nav_link('&#8734;','Articles récents','Articles anciens'); ?></div>
</div> <!-- Ends content -->
<?php get_footer(); ?>
