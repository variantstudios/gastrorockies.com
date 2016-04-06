<?php

/**
 * @file
 * Display Suite Two Section configuration.
 */

function ds_two_section() {
  return array(
    'label' => t('Two Section'),
    'regions' => array(
      'top' => t('top'),
      'bottom' => t('bottom'),
    ),
    // Uncomment if you want to include a CSS file for this layout (two_section.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (two_section.png)
    // 'image' => TRUE,
  );
}
