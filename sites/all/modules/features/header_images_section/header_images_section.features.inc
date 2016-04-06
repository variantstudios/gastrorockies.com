<?php
/**
 * @file
 * header_images_section.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function header_images_section_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function header_images_section_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function header_images_section_node_info() {
  $items = array(
    'news' => array(
      'name' => t('News'),
      'base' => 'node_content',
      'description' => t('Add news '),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'preps' => array(
      'name' => t('Preps'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
