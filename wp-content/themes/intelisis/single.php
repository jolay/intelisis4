<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry-single' ); ?>
<?php endwhile; endif; ?>

<?php if (in_category('noticias')) : ?>    


<?php else : ?>


<?php endif; ?>
</section>
<?php get_footer(); ?>



