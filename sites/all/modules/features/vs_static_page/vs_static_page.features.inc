<?php
/**
 * @file
 * vs_static_page.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function vs_static_page_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function vs_static_page_node_info() {
  $items = array(
    'page' => array(
      'name' => t('Static Page'),
      'base' => 'node_content',
      'description' => t('Creates static pages, such as an \'About us\' page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
