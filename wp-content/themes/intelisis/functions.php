<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

register_nav_menus(
array( 'casos-menu' => __( 'Casos Menu', 'blankslate' ) )
);
//
// SHORTCODES
//

//background shortcode
function background_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'background',
	), $atts );

	return '<div class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'background', 'background_shortcode' );

//parallax shortcode
function parallax_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'background',
	), $atts );

	return '<div class="' . esc_attr($a['class']) . '" data-stellar-background-ratio="0.5">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'parallax', 'parallax_shortcode' );


//row shortcode
function row_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'row',
	), $atts );

	return '<div class="row ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'row', 'row_shortcode' );

//row-2 shortcode
function row_2_shortcode( $atts, $content = null ) {
	return '<div class="row">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'row-2', 'row_2_shortcode' );

//grid shortcode
function grid_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'column',
	), $atts );

	return '<div class="column ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'grid', 'grid_shortcode' );

//grid-2 shortcode
function grid_2_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'column',
	), $atts );

	return '<div class="column ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'grid-2', 'grid_2_shortcode' );

//grid-3 shortcode
function grid_3_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'column',
	), $atts );

	return '<div class="column ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'grid-3', 'grid_3_shortcode' );

//header shortcode
function header_shortcode( $atts, $content = null ) {
	return '<header class="header">' . do_shortcode($content) . '</header>';
}
add_shortcode( 'header', 'header_shortcode' );

//h1 shortcode
function h1_shortcode() {
	ob_start();
	?>
<h1><?php the_title(); ?></h1>
<?php
	return ob_get_clean();
}
add_shortcode( 'h1', 'h1_shortcode' );

//h1-alias shortcode
function h1_alias_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'column',
	), $atts );

	return '<h1 class="h1-alias ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</h1>';
}
add_shortcode( 'h1-alias', 'h1_alias_shortcode' );

//h2 shortcode
function h2_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'default-h2',
	), $atts );

	return '<h2 class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</h2>';
}
add_shortcode( 'h2', 'h2_shortcode' );

//h3 shortcode
function h3_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'default-h3',
	), $atts );

	return '<h3 class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</h3>';
}
add_shortcode( 'h3', 'h3_shortcode' );

//caption shortcode
function caption_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'caption',
	), $atts );

	return '<div class="caption ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'caption', 'caption_shortcode' );

//strong shortcode
function strong_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => '',
	), $atts );

	return '<strong class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</strong>';
}
add_shortcode( 'strong', 'strong_shortcode' );

// create shortcode for website's home page adress
function myUrl($atts, $content = null) {
	extract(shortcode_atts(array(
		"href" => get_option('home')
	), $atts));
	return $href;
}
add_shortcode("url", "myUrl");

//list shortcode
function list_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'list',
	), $atts );

	return '<ul class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</ul>';
}
add_shortcode( 'list', 'list_shortcode' );

//list-item shortcode
function list_item_shortcode( $atts, $content = null ) {
	return '<li>' . do_shortcode($content) . '</li>';
}
add_shortcode( 'list-item', 'list_item_shortcode' );

//p shortcode
function p_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'p-default',
	), $atts );

	return '<p class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</p>';
}
add_shortcode( 'p', 'p_shortcode' );

//accordion shortcode
function accordion_shortcode( $atts, $content = null ) {
	return '<ul class="accordion" data-accordion><li class="accordion-navigation">' . do_shortcode($content) . '</li></ul>';
}
add_shortcode( 'accordion', 'accordion_shortcode' );

//accordion-button shortcode
function accordion_button_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'link' => '#',
	), $atts );

	return '<a href="#'. esc_attr($a['link']) . '">' . do_shortcode($content) . '</a>';
}
add_shortcode( 'accordion-button', 'accordion_button_shortcode' );

//accordion-content shortcode
function accordion_content_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'link' => '#',
	), $atts );

	return '<div id="' . esc_attr($a['link']) . '" class="content">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'accordion-content', 'accordion_content_shortcode' );

//flag
function flag_shortcode( $atts, $content = null ) {
	return '<div class="flag"><span>' . do_shortcode($content) . '</span></div>';
}
add_shortcode( 'flag', 'flag_shortcode' );

//link
function link_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'link-default',
        'url' => '',
	), $atts );

	return '<a class="' . esc_attr($a['class']) . '" href="' . esc_attr($a['url']) . '">' . do_shortcode($content) . '</a>';
}
add_shortcode( 'link', 'link_shortcode' );

//hero-talk
function hero_talk_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'hero-default',
	), $atts );

	return '<div class="hero-talk ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'hero-talk', 'hero_talk_shortcode' );

//blue-talk
function blue_talk_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'blue-talk',
	), $atts );
    
    return '<div class="blue-talk ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'blue-talk', 'blue_talk_shortcode' );

//box
function box_shortcode( $atts, $content = null ) {
    $a = shortcode_atts( array(
		'class' => 'panel',
	), $atts );
	return '<div class="panel ' . esc_attr($a['class']) . '" data-equalizer-watch>' . do_shortcode($content) . '</div>';
}
add_shortcode( 'box', 'box_shortcode' );

//social shortcode
function social_links() {
	ob_start();
	?>
<div class="row">
<div class="small-4 small-centered column x-large-vertical-space">
<div class="icon-bar four-up blue-icon-bar">
  <a class="item">
    <i class="fi-social-facebook"></i>
  </a>
  <a class="item">
    <i class="fi-social-twitter"></i>
  </a>
  <a class="item">
    <i class="fi-social-linkedin"></i>
  </a>
  <a class="item">
    <i class="fi-social-youtube"></i>
  </a>
</div>
</div>
</div>
<?php
	return ob_get_clean();
}
add_shortcode( 'social-links', 'social_links' );

//divider-left shortcode
function divider_left_shortcode() {
	ob_start();
	?>
<div class="small-2 column divider-left"><hr></div>
<?php
	return ob_get_clean();
}
add_shortcode( 'divider-left', 'divider_left_shortcode' );

//panel
function panel_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'panel',
	), $atts );

	return '<div class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'panel', 'panel_shortcode' );

//Inbound form
function inbound_form($atts, $content = null) {
  include 'redirect.php';

 $a = shortcode_atts( array(
    'id' => '',
    'class' => '',
    'url' => '',
    'source' => '',
    'medium' => '',
    'term' => '',
    'content' => '',
    'campaign' => '',
    'name' => '',
    'button' => '',
  ), $atts );

  ob_start();

  $url = esc_attr($a['url']) .
    (empty(esc_attr($a['source']))? '' : '?utm_source=' . esc_attr($a['source'])) .
    (empty(esc_attr($a['medium']))? '' : '&utm_medium=' . esc_attr($a['medium'])) .
    (empty(esc_attr($a['term']))? '' : '&utm_term=' . esc_attr($a['term'])) .
    (empty(esc_attr($a['content']))? '' : '&utm_content=' . esc_attr($a['content'])) .
    (empty(esc_attr($a['campaign']))? '' : '&utm_campaign=' . esc_attr($a['campaign']));

  $referencia = esc_attr($a['name']);

  $stringexample2 = '
  <FORM id="'.esc_attr($a['id']).'" method ="POST" class="'.esc_attr($a['class']).'" action = "" data-abide>
   <div class="row">
   <div class="small-12 medium-6 columns name-field">
    <label>Nombre completo <small>Requerido</small>
    <INPUT TYPE = "text" Name="Nombre" required pattern="[a-zA-Z]+" ID="Nombre"> </label>
   <small class="error">Entrada invalida</small> </div>
    <div class="small-12 medium-6 columns">
    <label>Correo electrónico <small>requerido</small>
    <input type="email" name="email" required> </label>
    <small class="error">Correo electrónico invalido</small>
    </div> </div>
    <div class="row">
    <div class="small-12 medium-6 columns"
    <label>Teléfono
    <input type="text" name="Telefono" pattern="[0-9]+"> </label>
    <small class="error">Entrada invalida</small>
    </div>
    <div class="small-12 medium-6 columns">
    <label>Empresa <small>Requerido</small>
    <INPUT TYPE = "text" Name="Empresa" VALUE ="" ID="Empresa" required>  </label>
    <small class="error">Entrada invalida</small>
    </div> </div>
    <div class="row">
    <div class="small-12 medium-6 columns">
    <label>Cantidad de empleados <small>Requerido</small>
    <select name="NumEmpleados" required>
     <option value="">- Seleccionar -</option>
     <option value="1-50">1-50</option>
     <option value="50-200">50-200</option>
     <option value="200-500">200-500</option>
     <option value="500+">500+</option>
    </select> </label>
    <small class="error">Seleccionar una opción</small>
    </div>
    <div class="small-12 medium-6 columns">
    <label>Cargo en la empresa <small>Requerido</small>
    <select name="CargoEmpresa" required>
    <option value="">- Seleccionar -</option>
    <option value="Director">Director</option>
    <option value="Gerente">Gerente Área</option>
    <option value="Consultor">Consultor Externo</option>
    <option value="otro">Otro</option>
    </select> </label>
    <small class="error">Seleccionar una opción</small>
    </div> </div>
    <div class="row">
    <div class="small-12 medium-6 columns">
    <label> <input type="hidden" name="direccion" ID="direccion" value="'. $url .'"> </label>
    <label> <input type="hidden" name="referencia" ID="referencia" value="'. $referencia .'"> </label>
    </div> </div>
    <div class="small-12 medium-7 columns small-centered small-vertical-space">
    <input type="Submit" form="'.esc_attr($a['id']).'" name="Submit" class="button expand 3d" value="'.esc_attr($a['button']).'">
    </div> </div>
  </FORM>';
  return $stringexample2;
}

add_shortcode( 'inbound-form', 'inbound_form' );
//falta agregar el JS de validación 
//$('#myform').on('valid.fndtn.abide', function() {
  // Handle the submission of the form
//});


//
//BREADCRUMB
//
/**
 BreadCrumbs
 * Author : Daniel Roch
 */
  // Get parent categories with schema.org data
  function seomix_content_get_category_parents($id, $link = false,$separator = '/',$nicename = false,$visited = array()) {
  $final = '';
  $parent = &get_category($id);
  if (is_wp_error($parent))
    return $parent;
  if ($nicename)
    $name = $parent->name;
  else
    $name = $parent->cat_name;
  if ($parent->parent && ($parent->parent != $parent->term_id ) && !in_array($parent->parent, $visited)) {
    $visited[] = $parent->parent;
    $final .= seomix_content_get_category_parents( $parent->parent, $link, $separator, $nicename, $visited );
  }
  if ($link)
    $final .= '<span typeof="v:Breadcrumb"><a href="' . get_category_link( $parent->term_id ) . '" title="Acceder a '.$parent->cat_name.'" rel="v:url" property="v:title">'.$name.'</a></span>' . $separator;
  else
    $final .= $name.$separator;
  return $final;}

  // Breadcrumb
  function seomix_content_breadcrumb() {
  // Global vars
  global $wp_query;
  $paged = get_query_var('paged');
  $sep = ' > ';
  $data = '<span typeof="v:Breadcrumb">';
  $dataend = '</span>';
  $final = '<div xmlns:v="http://rdf.data-vocabulary.org/#">';  
  $startdefault = $data.'<a title="'. get_bloginfo('name') .'" href="'.home_url().'" rel="v:url" property="v:title">'. get_bloginfo('name') .'</a>'.$dataend;
  $starthome = 'Inicio de '. get_bloginfo('name');

  // Breadcrumb start
  if ( is_front_page() && is_home() ){
    // Default homepage
    if ( $paged >= 1 )    
      $final .= $startdefault;
    else
      $final .= $starthome;
  } elseif ( is_front_page() ){
    //Static homepage
    $final .= $starthome;
  } elseif ( is_home() ){
    //Blog page
    if ( $paged >= 1 ) {   
      $url = get_page_link(get_option('page_for_posts'));  
      $final .= $startdefault.$sep.$data.'<a href="'.$url.'" rel="v:url" property="v:title" title="Las notas">Las notas</a>'.$dataend;}
    else
      $final .= $startdefault.$sep.'Las notas';
  } else {
    //everyting else
    $final .= $startdefault.$sep;}

  // Prevent other code to interfer with static front page et blog page
  if ( is_front_page() && is_home() ){// Default homepage
  } elseif ( is_front_page()){//Static homepage
  } elseif ( is_home()){//Blog page
  }
  //Attachment
  elseif ( is_attachment()){
    global $post;
    $parent = get_post($post->post_parent);
    $id = $parent->ID;
    $category = get_the_category($id);
    $category_id = get_cat_ID( $category[0]->cat_name );
    $permalink = get_permalink( $id );
    $title = $parent->post_title;
    $final .= seomix_content_get_category_parents($category_id,TRUE,$sep).$data."<a href='$permalink' rel='v:url' property='v:title' title='$title'>$title</a>".$dataend.$sep.the_title('','',FALSE);}
  // Post type
  elseif ( is_single() && !is_singular('post')){
     global $post;
     $nom = get_post_type($post);
     $archive = get_post_type_archive_link($nom);
     $mypost = $post->post_title;
     $final .= $data.'<a href="'.$archive.'" rel="v:url" property="v:title" title="'.$nom.'">'.$nom.'</a>'.$dataend.$sep.$mypost;}
  //post
  elseif ( is_single()){
    // Post categories
    $category = get_the_category();
    $category_id = get_cat_ID( $category[0]->cat_name );
    if ($category_id != 0)
      $final .= seomix_content_get_category_parents($category_id,TRUE,$sep);
    elseif ($category_id == 0) {
      $post_type = get_post_type();
      $tata = get_post_type_object( $post_type );
      $titrearchive = $tata->labels->menu_name;
      $urlarchive = get_post_type_archive_link( $post_type );
      $final .= $data.'<a class="breadl" href="'.$urlarchive.'" title="'.$titrearchive.'" rel="v:url" property="v:title">'.$titrearchive.'</a>'.$dataend;}
    // With Comments pages
    $cpage = get_query_var( 'cpage' );
    if (is_single() && $cpage > 0) {
      global $post;
      $permalink = get_permalink( $post->ID );
      $title = $post->post_title;
      $final .= $data."<a href='$permalink' rel='v:url' property='v:title' title='$title'>$title</a>".$dataend;
      $final .= $sep."Comentarios página $cpage";}
    // Without Comments pages
    else
      $final .= the_title('','',FALSE);}
  // Categories
  elseif ( is_category() ) {
    // Vars
    $categoryid       = $GLOBALS['cat'];
    $category         = get_category($categoryid);
    $categoryparent   = get_category($category->parent);
    //Render
    if ($category->parent != 0) 
      $final .= seomix_content_get_category_parents($categoryparent, true, $sep, true);
    if ( $paged <= 1 )
      $final .= single_cat_title("", false);
    else
      $final .= $data.'<a href="' . get_category_link( $category ) . '" title="Ver todas las entradas de '.single_cat_title("", false).'" rel="v:url" property="v:title">'.single_cat_title("", false).'</a>'.$dataend;}
  // Page
  elseif ( is_page() && !is_home() ) {
    $post = $wp_query->get_queried_object();
    // Simple page
    if ( $post->post_parent == 0 )
      $final .= the_title('','',FALSE);
    // Page with ancestors
    elseif ( $post->post_parent != 0 ) {
      $title = the_title('','',FALSE);
      $ancestors = array_reverse(get_post_ancestors($post->ID));
      array_push($ancestors, $post->ID);
      $count = count ($ancestors);$i=0;
      foreach ( $ancestors as $ancestor ){
        if( $ancestor != end($ancestors) ){
          $name = strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) );
          $final .= $data.'<a title="'.$name.'" href="'. get_permalink($ancestor) .'" rel="v:url" property="v:title">'.$name.'</a>'.$dataend;
          $i++;
          if ($i < $ancestors)
            $final .= $sep;
        }
        else 
          $final .= strip_tags(apply_filters('single_post_title',get_the_title($ancestor)));
        }}}
  // authors
  elseif ( is_author() ) {
    if(get_query_var('author_name'))
        $curauth = get_user_by('slug', get_query_var('author_name'));
    else
        $curauth = get_userdata(get_query_var('author'));
    $final .= "Articulos del autor ".$curauth->nickname;}  
  // tags
  elseif ( is_tag() ){
    $final .= "Articulos en el tema de ".single_tag_title("",FALSE);}
  // Search
  elseif ( is_search() ) {
    $final .= "Resultados de búsqueda de \"".get_search_query()."\"";}    
  // Dates
  elseif ( is_date() ) {
    if ( is_day() ) {
      $year = get_year_link('');
      $final .= $data.'<a title="'.get_query_var("year").'" href="'.$year.'" rel="v:url" property="v:title">'.get_query_var("year").'</a>'.$dataend;
      $month = get_month_link( get_query_var('year'), get_query_var('monthnum') );
      $final .= $sep.$data.'<a title="'.single_month_title(' ',false).'" href="'.$month.'" rel="v:url" property="v:title">'.single_month_title(' ',false).'</a>'.$dataend;
      $final .= $sep."Archivos del ".get_the_date();}
    elseif ( is_month() ) {
      $year = get_year_link('');
      $final .= $data.'<a title="'.get_query_var("year").'" href="'.$year.'" rel="v:url" property="v:title">'.get_query_var("year").'</a>'.$dataend;
      $final .= $sep."Archivos de ".single_month_title(' ',false);}
    elseif ( is_year() )
      $final .= "Archivos de ".get_query_var('year');}
  // 404 page
  elseif ( is_404())
    $final .= "404 Página no encontrada";
  // Other Archives
  elseif ( is_archive() ){
    $posttype = get_post_type();
    $posttypeobject = get_post_type_object( $posttype );
    $taxonomie = get_taxonomy( get_query_var( 'taxonomy' ) );
    $titrearchive = $posttypeobject->labels->menu_name;
    if (!empty($taxonomie))
      $final .= $taxonomie->labels->name;
    else
      $final .= $titrearchive;}
  // Pagination
  if ( $paged >= 1 )
    $final .= $sep.'Page '.$paged;
  // The End
  $final .= '</div>';
  echo $final;}
