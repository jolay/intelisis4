<div class="small-12 column medium-vertical-space">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="small-12 column small-vertical-space">
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>

<?php if (in_category('noticias')) : ?>    


<?php else : ?>

<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>

<?php endif; ?>

<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>

</header>
<div class="small-12 medium-3 column">
    <?php 
if ( has_post_thumbnail() ) {
	
	the_post_thumbnail( 'medium' );
	}
?>
</div>
<div class="small-12 medium-9 column">

<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</div>

</article>        
</div>
