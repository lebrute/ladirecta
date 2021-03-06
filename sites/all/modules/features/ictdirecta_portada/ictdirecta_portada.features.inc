<?php
/**
 * @file
 * ictdirecta_portada.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function ictdirecta_portada_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
}

/**
 * Implements hook_views_api().
 */
function ictdirecta_portada_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_flag_default_flags().
 */
function ictdirecta_portada_flag_default_flags() {
  $flags = array();
  // Exported flag: "Destacado Portada 3 Col".
  $flags['destacado_portada'] = array(
    'entity_type' => 'node',
    'title' => 'Destacado Portada 3 Col',
    'global' => 0,
    'types' => array(
      0 => 'noticia',
    ),
    'flag_short' => 'Destacar a 3 col',
    'flag_long' => 'Promueve un contenido a portada como destacado superior a tres columnas',
    'flag_message' => '',
    'unflag_short' => 'Unflag this item',
    'unflag_long' => 'Treure destacat',
    'unflag_message' => '',
    'unflag_denied_text' => '',
    'link_type' => 'toggle',
    'weight' => 0,
    'show_in_links' => array(
      'full' => 'full',
      'teaser' => 'teaser',
      'rss' => 0,
      'search_index' => 0,
      'search_result' => 0,
      'token' => 0,
    ),
    'show_as_field' => 1,
    'show_on_form' => 1,
    'access_author' => '',
    'show_contextual_link' => 1,
    'i18n' => 0,
    'module' => 'ictdirecta_portada',
    'locked' => array(
      0 => 'name',
    ),
    'api_version' => 3,
  );
  // Exported flag: "Portada-CDr".
  $flags['portada_cdr'] = array(
    'entity_type' => 'node',
    'title' => 'Portada-CDr',
    'global' => 0,
    'types' => array(
      0 => 'actualitat',
      1 => 'fotogaleria',
      2 => 'noticia_paper',
      3 => 'video',
    ),
    'flag_short' => 'Promou Portada (Dreta)',
    'flag_long' => '',
    'flag_message' => '',
    'unflag_short' => 'Treu de la portada',
    'unflag_long' => '',
    'unflag_message' => '',
    'unflag_denied_text' => '',
    'link_type' => 'toggle',
    'weight' => 0,
    'show_in_links' => array(
      'full' => 0,
      'teaser' => 0,
      'rss' => 0,
      'search_index' => 0,
      'search_result' => 0,
      'token' => 0,
    ),
    'show_as_field' => 1,
    'show_on_form' => 0,
    'access_author' => '',
    'show_contextual_link' => 0,
    'i18n' => 0,
    'module' => 'ictdirecta_portada',
    'locked' => array(
      0 => 'name',
    ),
    'api_version' => 3,
  );
  // Exported flag: "Portada-CIz".
  $flags['portada_ciz'] = array(
    'entity_type' => 'node',
    'title' => 'Portada-CIz',
    'global' => 0,
    'types' => array(
      0 => 'fotogaleria',
      1 => 'noticia_paper',
      2 => 'noticia',
      3 => 'video',
    ),
    'flag_short' => 'Promou Portada (Esquerra)',
    'flag_long' => '',
    'flag_message' => '',
    'unflag_short' => 'Treu de la portada',
    'unflag_long' => '',
    'unflag_message' => '',
    'unflag_denied_text' => '',
    'link_type' => 'toggle',
    'weight' => 0,
    'show_in_links' => array(
      'full' => 0,
      'teaser' => 0,
      'rss' => 0,
      'search_index' => 0,
      'search_result' => 0,
      'token' => 0,
    ),
    'show_as_field' => 0,
    'show_on_form' => 1,
    'access_author' => '',
    'show_contextual_link' => 0,
    'i18n' => 0,
    'module' => 'ictdirecta_portada',
    'locked' => array(
      0 => 'name',
    ),
    'api_version' => 3,
  );
  return $flags;

}
