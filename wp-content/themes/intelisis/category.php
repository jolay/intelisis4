
<?php get_header();  ?>

<section id="content" role="main">
<header class="header row">
<div class="small-12 column"><h1 class="entry-title"><?php single_cat_title(); ?></h1></div>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta small-12 column">' . category_description() . '</div>' ); ?>
</header>

    
<?php 
  // if the category is case or a case SUBcategory, 
  if (cat_is_ancestor_of(5, $cat) or is_category(5)):  ?>

  <div id="casos-subnav-menu" class="casos-menu row">
      <div class="small-12 column">
        <?php wp_nav_menu( array( 'theme_location' => 'casos-menu' ) ); ?>
      </div>
  </div>
<div id="block-masonry" class="row"  data-masonry-options='{ "itemSelector": ".masonry" }'>
    <?php query_posts( 'posts_per_page=-1&cat=' . $cat ) ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry-case' ); ?>
    <?php endwhile; endif; ?>
    
</div>
    
<?php //no case cat ?> 
<?php else : ?>
<div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry-default' ); ?>
    <?php endwhile; endif; ?>
</div>
<div class="row row-vertical-space">
    <div class="small-12 column">
    <?php get_template_part( 'nav', 'below' ); ?>
    </div>
</div>
    


<?php endif; ?>

</section>
<?php get_footer(); ?>