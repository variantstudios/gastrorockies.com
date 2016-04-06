<?php
/**
 * @file
 * providers_section.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function providers_section_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'providers_section';
  $context->description = '';
  $context->tag = 'Providers';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'about-us/our-providers' => 'about-us/our-providers',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-providers_view-block_1' => array(
          'module' => 'views',
          'delta' => 'providers_view-block_1',
          'region' => 'content',
          'weight' => '11',
        ),
        'views-providers_view-block' => array(
          'module' => 'views',
          'delta' => 'providers_view-block',
          'region' => 'content',
          'weight' => '12',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Providers');
  $export['providers_section'] = $context;

  return $export;
}
