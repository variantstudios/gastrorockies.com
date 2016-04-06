<?php
/**
 * @file
 * vs_providers.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function vs_providers_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function vs_providers_image_default_styles() {
  $styles = array();

  // Exported image style: headshot_style.
  $styles['headshot_style'] = array(
    'name' => 'headshot_style',
    'label' => 'Headshot',
    'effects' => array(
      1 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 265,
          'height' => 397,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function vs_providers_node_info() {
  $items = array(
    'providers' => array(
      'name' => t('Providers'),
      'base' => 'node_content',
      'description' => t('Add a Doctor to the site that will show in the Our Providers section.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
  );
  return $items;
}
