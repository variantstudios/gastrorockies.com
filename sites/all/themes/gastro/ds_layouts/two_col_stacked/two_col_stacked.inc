<?php

/**
 * @file
 * Display Suite Two Col Stacked configuration.
 */

function ds_two_col_stacked() {
  return array(
    'label' => t('Two Col Stacked'),
    'regions' => array(
      'top' => t('top'),
      'left' => t('left'),
      'right' => t('right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (two_col_stacked.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (two_col_stacked.png)
    // 'image' => TRUE,
  );
}
