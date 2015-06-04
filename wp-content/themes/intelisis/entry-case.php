<div class="small-12 medium-4 large-3 column small-vertical-space masonry">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title entry-case">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
</header>
<div>
    <?php 
if ( has_post_thumbnail() ) {
	
	the_post_thumbnail( 'large' );
	}
?>
</div>
</article>
        
</div>