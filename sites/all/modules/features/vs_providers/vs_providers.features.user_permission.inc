<?php
/**
 * @file
 * vs_providers.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function vs_providers_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create providers content'.
  $permissions['create providers content'] = array(
    'name' => 'create providers content',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any providers content'.
  $permissions['delete any providers content'] = array(
    'name' => 'delete any providers content',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own providers content'.
  $permissions['delete own providers content'] = array(
    'name' => 'delete own providers content',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'node',
  );

  // Exported permission: 'ds_switch providers'.
  $permissions['ds_switch providers'] = array(
    'name' => 'ds_switch providers',
    'roles' => array(),
    'module' => 'ds_extras',
  );

  // Exported permission: 'edit any providers content'.
  $permissions['edit any providers content'] = array(
    'name' => 'edit any providers content',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own providers content'.
  $permissions['edit own providers content'] = array(
    'name' => 'edit own providers content',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'node',
  );

  return $permissions;
}
