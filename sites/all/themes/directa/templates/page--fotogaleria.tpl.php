<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<?php
if (drupal_is_front_page()) {
  $variables['title']="";
  unset($variables['page']['content']['system_main']['default_message']);
}
?>

<div id="page">

  <header class="header" id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['header']); ?>

  </header>

  <div id="main">
  <div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>

    <div id="destacat">
      <?php print render($page['destacat']); ?>
    </div>   

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php if(!empty($node->field_seccio_web) || (!empty($node->field_autor))):
        print '<div class="meta-info-top">';
        print render(field_view_field('node', $node, 'field_seccio_web', array('label' => 'hidden')));
        if(!empty($node->field_autor) || !empty($node->field_data)):
          print   '<span class="autories">';
          print     render(field_view_field('node', $node, 'field_autor', array('label' => 'hidden')));
          print     render(field_view_field('node', $node, 'field_data', array('label' => 'hidden', 'settings' => array('format_type' => 'franja'))));
          print   '</span>';
        endif;
        print '</div>';
        foreach($page['content']['system_main']['nodes'] as $nid => $node):
          hide($page['content']['system_main']['nodes'][$nid]['field_seccio_web']);
          hide($page['content']['system_main']['nodes'][$nid]['field_autor']);
          hide($page['content']['system_main']['nodes'][$nid]['field_data']);
        endforeach;
      endif;?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    
    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>
 

   <div id="interior">
      <div id="menu-tigger"> &nbsp; </div>
      <div id="menu-close-top" class="menu-close"> &nbsp; </div>
      <div id="menu-close-bottom" class="menu-close"> &nbsp; </div>
     <?php print render($page['interior']); ?>
   </div>   


   <div id="seccion_portada">
     <?php print render($page['seccion_portada']); ?>
   </div>   
  
   <div id="seccion_inferiors">
     <?php print render($page['seccion_inferiors']); ?>
   </div>  


  <?php if(variable_get('directa_custom_enable_faldo','') == 1): ?>
     <div id="faldo-wrapper" class="disabled" data-day="<?php print date('z'); ?>">
      <div id="faldo-switcher"> <span class="faldo-switcher-dis">obrir</span> <span class="faldo-switcher-act">tancar</span> <span class="faldo-titol-destacat"><?php print t('Subscriute a la directa.');?></span><?php print t('Col·labora en fer possible aquest mitjà.'); ?> </div>
       <?php print render($page['faldo']); ?>
    </div>
  <?php endif; ?>
  
<?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>

  <?php drupal_add_js(drupal_get_path('theme', 'directa') . '/js/comportaments_generics.js'); ?>
