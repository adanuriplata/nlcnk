<?php

function mkp_style_script()
{
  if (!is_admin()) {
    wp_enqueue_style('mkp_style', get_template_directory_uri() . '/style.min.css', '1.0', 'all');
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600&display=swap', null, false);
    wp_enqueue_style('google_fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css', null, false);
  }
}
function mkp_style_scripts()
{
  // wp_enqueue_script(mkp_style, get_template_directory_uri() . '/bulma.min.css', array(), 'all');
  // wp_enqueue_script(mkp_style, get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'mkp_style_script');



/*
*
* START contctform redirect pagina gracias
*
*/

add_action('wp_footer', 'redirect_cf7');

function redirect_cf7()
{
  ?>
<script type="text/javascript">
  document.addEventListener('wpcf7mailsent', function(event) {
    location = 'http://mhkids.local/gracias/';
  }, false);
</script>
<?php
}

/*
*
* END contctform redirect pagina gracias
*
