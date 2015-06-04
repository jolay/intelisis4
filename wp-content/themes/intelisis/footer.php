<div class="clear"></div>
</div>
<div class="background background-black">
<footer id="footer" role="contentinfo" class="row">
<p class="small-12 medium-6 column">Intelisis Software S.A. de C.V ©2014 Todos los derechos reservados.</p>
<div class="small-12 medium-5 column">
<ul class="inline-list">
  <li><a href="<?php echo get_site_url(); ?>/aviso-privacidad">Aviso de privacidad</a></li>
  <li><a href="<?php echo get_site_url(); ?>/contacto">Contacto</a></li>
  <li><a href="<?php echo get_site_url(); ?>">Inicio</a></li>
</ul>
</div>    
</footer>
</div>
</div>
<script src="<?php echo get_site_url(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_site_url(); ?>/js/foundation/foundation.js"></script>
<script src="<?php echo get_site_url(); ?>/js/foundation/foundation.accordion.js"></script>
<script src="<?php echo get_site_url(); ?>/js/foundation/foundation.equalizer.js"></script>
<script src="<?php echo get_site_url(); ?>/js/foundation/foundation.tab.js"></script>
<script src="<?php echo get_site_url(); ?>/js/foundation/foundation.abide.js"></script>
<script src="<?php echo get_site_url(); ?>/js/foundation/foundation.reveal.js"></script>
<script src="<?php echo get_site_url(); ?>/js/vendor/masonry.min.js"></script>
<script src="<?php echo get_site_url(); ?>/js/vendor/imageLoaded.min.js"></script>
<script src="<?php echo get_site_url(); ?>/js/jquery-imagefill.js"></script>
<script src="<?php echo get_site_url(); ?>/js/jquery.stellar.min.js"></script>
<script>
$(document).foundation({
  accordion: {
    // specify the class used for accordion panels
    content_class: 'content',
    // specify the class used for active (or open) accordion panels
    active_class: 'active',
    // allow multiple accordion panels to be active at the same time
    multi_expand: false,
    // allow accordion panels to be closed by clicking on their headers
    // setting to false only closes accordion panels when another is opened
    toggleable: true
  }
});
</script>
<script>
  $(document).foundation({
    tab: {
      callback : function (tab) {
        console.log(tab);
      }
    }
  });
    
$('.background-imagex').imagefill();
$('.background-image').stellar();
</script>
<script>
    var $container = $('#block-masonry');
    $container.imagesLoaded( function(){
        $container.masonry({
            itemSelector: '.masonry',
        }); 
    });
</script>

<?php wp_footer(); ?>
</body>
</html>