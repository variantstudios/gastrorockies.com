<?php
/**
 * @file
 * site_config.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function site_config_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function site_config_image_default_styles() {
  $styles = array();

  // Exported image style: new_home_style.
  $styles['new_home_style'] = array(
    'name' => 'new_home_style',
    'label' => 'new_home_style',
    'effects' => array(),
  );

  return $styles;
}

/**
 * Implements hook_weight_features_default_settings().
 */
function site_config_weight_features_default_settings() {
  $settings = array();

  $settings['page'] = array(
    'enabled' => 0,
    'range' => 20,
    'menu_weight' => 0,
    'default' => 0,
    'sync_translations' => 0,
  );

  return $settings;
}
