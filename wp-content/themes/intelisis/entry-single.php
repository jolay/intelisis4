<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="background-fixed building white-header">
    <div class="row row-vertical-space">
        <header>
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="caption">
    <?php if (in_category('noticias')) : ?>
</div>


<?php else : ?>

<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>

<?php endif; ?>

<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>

</header>
    </div>
</div>
<div class="row row-vertical-space">
<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
    
    </div>

</article>