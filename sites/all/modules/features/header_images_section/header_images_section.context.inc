<?php
/**
 * @file
 * header_images_section.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function header_images_section_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'header_images';
  $context->description = '';
  $context->tag = 'Header Images';
  $context->conditions = array(
    'node' => array(
      'values' => array(
        'news' => 'news',
        'page' => 'page',
        'preps' => 'preps',
        'providers' => 'providers',
        'webform' => 'webform',
      ),
      'options' => array(
        'node_form' => '1',
      ),
    ),
    'path' => array(
      'values' => array(
        'dashboard*' => 'dashboard*',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-header_images-block_5' => array(
          'module' => 'views',
          'delta' => 'header_images-block_5',
          'region' => 'bottomfooter',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Header Images');
  $export['header_images'] = $context;

  return $export;
}
