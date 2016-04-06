<?php
/**
 * @file
 * site_config.ds.inc
 */

/**
 * Implements hook_ds_layout_settings_info().
 */
function site_config_ds_layout_settings_info() {
  $export = array();

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'node|page|front';
  $ds_layout->entity_type = 'node';
  $ds_layout->bundle = 'page';
  $ds_layout->view_mode = 'front';
  $ds_layout->layout = 'ds_1col';
  $ds_layout->settings = array(
    'classes' => array(),
    'wrappers' => array(
      'ds_content' => 'div',
    ),
    'layout_wrapper' => 'div',
    'layout_attributes' => '',
    'layout_attributes_merge' => 1,
    'layout_link_attribute' => '',
    'layout_link_custom' => '',
    'hide_page_title' => '1',
    'page_option_title' => '',
    'hide_sidebars' => 0,
  );
  $export['node|page|front'] = $ds_layout;

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'node|webform|default';
  $ds_layout->entity_type = 'node';
  $ds_layout->bundle = 'webform';
  $ds_layout->view_mode = 'default';
  $ds_layout->layout = 'custom_2_col';
  $ds_layout->settings = array(
    'regions' => array(
      'colone' => array(
        0 => 'title',
      ),
      'coltwo' => array(
        1 => 'body',
        2 => 'webform',
      ),
    ),
    'fields' => array(
      'title' => 'colone',
      'body' => 'coltwo',
      'webform' => 'coltwo',
    ),
    'classes' => array(),
    'wrappers' => array(
      'colone' => 'div',
      'coltwo' => 'div',
    ),
    'layout_wrapper' => 'div',
    'layout_attributes' => '',
    'layout_attributes_merge' => 1,
    'layout_link_attribute' => '',
    'layout_link_custom' => '',
    'hide_page_title' => '1',
    'page_option_title' => '',
    'hide_sidebars' => 0,
  );
  $export['node|webform|default'] = $ds_layout;

  return $export;
}

/**
 * Implements hook_ds_view_modes_info().
 */
function site_config_ds_view_modes_info() {
  $export = array();

  $ds_view_mode = new stdClass();
  $ds_view_mode->api_version = 1;
  $ds_view_mode->view_mode = 'front';
  $ds_view_mode->label = 'Front';
  $ds_view_mode->entities = array(
    'node' => 'node',
  );
  $export['front'] = $ds_view_mode;

  return $export;
}
