<?php
/**
 * @file
 * providers_section.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function providers_section_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'weight_default_providers';
  $strongarm->value = '0';
  $export['weight_default_providers'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'weight_enabled_providers';
  $strongarm->value = '1';
  $export['weight_enabled_providers'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'weight_menu_providers';
  $strongarm->value = '0';
  $export['weight_menu_providers'] = $strongarm;

  return $export;
}
