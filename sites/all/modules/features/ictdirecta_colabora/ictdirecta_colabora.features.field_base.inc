<?php
/**
 * @file
 * ictdirecta_colabora.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function ictdirecta_colabora_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_tipus'
  $field_bases['field_tipus'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_tipus',
    'foreign keys' => array(),
    'indexes' => array(
      'value' => array(
        0 => 'value',
      ),
    ),
    'locked' => 0,
    'module' => 'list',
    'settings' => array(
      'allowed_values' => array(
        1 => 'Colabora',
        2 => 'Subscripcions',
      ),
      'allowed_values_function' => '',
    ),
    'translatable' => 0,
    'type' => 'list_text',
  );

  return $field_bases;
}