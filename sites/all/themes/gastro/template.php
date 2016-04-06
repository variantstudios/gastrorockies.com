<?php

/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
 
 function gastro_css_alter(&$css) {
  unset($css[drupal_get_path('module', 'nice_menus') . '/css/nice_menus_default.css']);
}




// Theme a webform date element.
function gastro_webform_date($variables) {
$element = &$variables['element'];

// Save the data from the array into variables.
$day = $element['day'];
$month = $element['month'];
$year = $element['year'];

// Remove these keys from the array.
unset($element['day']);
unset($element['month']);
unset($element['year']);

// Re-add the data to the array in the correct order.
$element['month'] = $month;
$element['day'] = $day;
$element['year'] = $year;

return theme_webform_date($variables);
}





/**
 * Themes the getdirections form.
 *
 */
function gastro_getdirections_direction_form($variables) {
  $form = $variables['form'];
  $mapid = $form['mapid']['#value'];
  unset($form['mapid']);

  $getdirections_defaults = getdirections_defaults();
  $getdirections_misc = getdirections_misc_defaults();
  if (isset($form['settings']['#value'])) {
    $settings = $form['settings']['#value'];
    $getdirections_defaults = $settings['default'];
    $getdirections_misc = $settings['misc'];
    unset($form['settings']);
  }
  $output = '';
  // if you want to do fancy things with the form, do it here ;-)
  if (isset($form['mfrom'])) {
    $form['mfrom']['#prefix'] = '<div class="container-inline getdirections_display">';
    $form['mfrom']['#suffix'] = '</div>';
  }
  
  if (isset($form['mto'])) {
    $form['mto']['#prefix'] = '<div class="container-inline getdirections_display">';
    $form['mto']['#suffix'] = '</div>';
  }
  
  if (isset($form['travelmode_' . $mapid])) {
    $form['travelmode_' . $mapid]['#prefix'] = '<div class="container-inline getdirections_display">';
    $form['travelmode_' . $mapid]['#suffix'] = '</div>';
  }
  if (isset($form['travelextras_' . $mapid])) {
    $form['travelextras_' . $mapid]['#prefix'] = '<div class="container-inline getdirections_display">';
    $form['travelextras_' . $mapid]['#suffix'] = '</div>';
  }
  if (! $getdirections_defaults['advanced_autocomplete']) {
    if ($getdirections_misc['geolocation_enable'] && getdirections_is_mobile()) {
      if ($getdirections_misc['geolocation_option'] == 1) {
        // html5 geolocation
        $geolocation_button = '<input type="button" value="' . t('Find Location') . '" title="' . t('Get the latitude and longitude for your current position from the browser') . '" id="getdirections_geolocation_button_from_' . $mapid . '" class="form-submit" />';
        $geolocation_button .= '<span id="getdirections_geolocation_status_from_' . $mapid . '" ></span>';
        $form['from_' . $mapid]['#field_suffix'] = '&nbsp;&nbsp;&nbsp;' . $geolocation_button;
      }
      elseif ($getdirections_misc['geolocation_option'] == 2 && module_exists('smart_ip')) {
        // smart ip
        $geolocation_button = '<input type="button" value="' . t('Locate by Smart IP') . '" title="' . t('Get the latitude and longitude for your current position from Smart IP') . '" id="getdirections_geolocation_button_from_' . $mapid . '" class="form-submit" />';
        $geolocation_button .= '<span id="getdirections_geolocation_status_from_' . $mapid . '" ></span>';
        $form['from_' . $mapid]['#field_suffix'] = '&nbsp;&nbsp;&nbsp;' . $geolocation_button;
      }
      elseif ($getdirections_misc['geolocation_option'] == 3 && module_exists('ip_geoloc')) {
        // ip_geoloc
        $geolocation_button = '<input type="button" value="' . t('Locate by IP Geolocation') . '" title="' . t('Get the latitude and longitude for your current position from IP Geolocation') . '" id="getdirections_geolocation_button_from_' . $mapid . '" class="form-submit" />';
        $geolocation_button .= '<span id="getdirections_geolocation_status_from_' . $mapid . '" ></span>';
        $form['from_' . $mapid]['#field_suffix'] = '&nbsp;&nbsp;&nbsp;' . $geolocation_button;
      }
    }
  }
  if ($getdirections_defaults['use_advanced']) {
    $desc = t('Fill in the form below.');
    $desc .= '<br />';
    $desc .= t('You can also click on the map and move the marker.');
    if (isset($form['country_from_' . $mapid])) {
      $desc = t('Select a country first, then type in a town.');
      $desc .= '<br />';
      $desc .= t('You can also click on the map and move the marker.');
      $form['country_from_' . $mapid]['#prefix'] = '<div id="getdirections_start_' . $mapid . '"><div class="container-inline getdirections_display">';
      $form['country_from_' . $mapid]['#suffix'] = '</div>';
    }
    if (isset($form['from_' . $mapid])
      && $form['from_' . $mapid]['#type'] == 'textfield'
      && (module_exists('location') || module_exists('getlocations_fields'))
      && ! $getdirections_defaults['advanced_autocomplete']
      && isset($form['country_from_' . $mapid])
    ) {
      $form['from_' . $mapid]['#suffix'] = '</div><div class="getdirections_start_info" id="getdirections_start_info_' . $mapid . '"></div>';
    }
    if (isset($form['country_to_' . $mapid])) {
      $form['country_to_' . $mapid]['#prefix'] = '<div id="getdirections_end_' . $mapid . '"><div class="container-inline getdirections_display">';
      $form['country_to_' . $mapid]['#suffix'] = '</div>';
    }
    if (isset($form['to_' . $mapid])
      && $form['to_' . $mapid]['#type'] == 'textfield'
      && (module_exists('location') || module_exists('getlocations_fields'))
      && ! $getdirections_defaults['advanced_autocomplete']
      && isset($form['country_to_' . $mapid])
    ) {
      $form['to_' . $mapid]['#suffix'] = '</div><div class="getdirections_end_info" id="getdirections_end_info_' . $mapid . '"></div>';
    }
    if ($getdirections_defaults['advanced_autocomplete'] && $getdirections_defaults['waypoints'] > 0 && $getdirections_defaults['advanced_autocomplete_via'] && ! $getdirections_defaults['advanced_alternate'] ) {
      for ($ct = 1; $ct <= $getdirections_defaults['waypoints']; $ct++) {
        if ($ct == 1) {
          $form['via_autocomplete_' . $mapid . '_' . $ct]['#prefix'] = '<div id="autocomplete_via_wrapper_' . $mapid . '"><div class="container-inline getdirections_display">';
          $form['via_autocomplete_' . $mapid . '_' . $ct]['#suffix'] = '</div>';
        }
        elseif ($ct == $getdirections_defaults['waypoints']) {
          $form['via_autocomplete_' . $mapid . '_' . $ct]['#prefix'] = '<div class="container-inline getdirections_display">';
          $form['via_autocomplete_' . $mapid . '_' . $ct]['#suffix'] = '</div></div>';
        }
        else {
          $form['via_autocomplete_' . $mapid . '_' . $ct]['#prefix'] = '<div class="container-inline getdirections_display">';
          $form['via_autocomplete_' . $mapid . '_' . $ct]['#suffix'] = '</div>';
        }
      }
    }
  }
  else {
    if (isset($form['country_from_' . $mapid])) {
      $form['country_from_' . $mapid]['#prefix'] = '<div class="container-inline getdirections_display">';
      $form['country_from_' . $mapid]['#suffix'] = '</div>';
    }
    if (isset($form['country_to_' . $mapid])) {
      $form['country_to_' . $mapid]['#prefix'] = '<div class="container-inline getdirections_display">';
      $form['country_to_' . $mapid]['#suffix'] = '</div>';
    }
    
    $desc = t('Fill in the form below.');
  }


  if (isset($form['switchfromto_' . $mapid])) {
    $form['switchfromto_' . $mapid]['#prefix'] = '<div id="getdirections_switchfromto_' . $mapid . '">';
    $form['switchfromto_' . $mapid]['#suffix'] = '</div>';
  }
  if (isset($form['next_' . $mapid])) {
    $form['next_' . $mapid]['#prefix'] = '<div id="getdirections_nextbtn_' . $mapid . '">';
    $form['next_' . $mapid]['#suffix'] = '</div>';
  }

  if (isset($form['submit_' . $mapid])) {
    $form['submit_' . $mapid]['#prefix'] = '<div id="getdirections_btn_' . $mapid . '">';
    $form['submit_' . $mapid]['#suffix'] = '</div>';
  }
  //$output .= '<p class="description">' . $desc . '</p>';
  $output .= drupal_render_children($form);

  // buttons
  $buttons = array();
  $output_buttons = '';
  if ($getdirections_misc['trafficinfo']) {
    $buttons[] = '<input type="button" value="' . t('Traffic Info !t', array('!t' => ($getdirections_misc['trafficinfo_state'] ? t('Off') : t('On')))) . '" title="' . t('Limited Availability') . '" id="getdirections_toggleTraffic_' . $mapid . '" class="form-submit" />';
  }
  if ($getdirections_misc['bicycleinfo']) {
    $buttons[] = '<input type="button" value="' . t('Bicycle Info !t', array('!t' => ($getdirections_misc['bicycleinfo_state'] ? t('Off') : t('On')))) . '" title="' . t('Limited Availability') . '" id="getdirections_toggleBicycle_' . $mapid . '" class="form-submit" />';
  }
  if ($getdirections_misc['transitinfo']) {
    $buttons[] = '<input type="button" value="' . t('Transit Info !t', array('!t' => ($getdirections_misc['transitinfo_state'] ? t('Off') : t('On')))) . '" title="' . t('Limited Availability') . '" id="getdirections_toggleTransit_' . $mapid . '" class="form-submit" />';
  }
  if ($getdirections_misc['panoramio_use'] && $getdirections_misc['panoramio_show']) {
    $buttons[] = '<input type="button" value="' . t('Panoramio !t', array('!t' => ($getdirections_misc['panoramio_state'] ? t('Off') : t('On')))) . '" id="getdirections_togglePanoramio_' . $mapid . '" class="form-submit" />';
  }
  if ($getdirections_misc['weather_use']) {
    if ($getdirections_misc['weather_use'] && $getdirections_misc['weather_show']) {
      $buttons[] = '<input type="button" value="' . t('Weather !t', array('!t' => ($getdirections_misc['weather_state'] ? t('Off') : t('On')))) . '" id="getdirections_toggleWeather_' . $mapid . '" class="form-submit" />';
    }
    if ($getdirections_misc['weather_cloud']) {
      $buttons[] = '<input type="button" value="' . t('Clouds !t', array('!t' => ($getdirections_misc['weather_cloud_state'] ? t('Off') : t('On')))) . '" id="getdirections_toggleCloud_' . $mapid . '" class="form-submit" />';
    }
  }
  if (count($buttons)) {
    $output_buttons .= '<div class="getdirections_map_buttons container-inline">';
    $output_buttons .= implode('&nbsp;', $buttons);
    $output_buttons .= '</div>';
  }
  $output .= $output_buttons;
  return $output;
}

 
function gastro_preprocess_maintenance_page(&$vars, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  // mortgagebase_preprocess_html($variables, $hook);
  // mortgagebase_preprocess_page($variables, $hook);

  // This preprocessor will also be used if the db is inactive. To ensure your
  // theme is used, add the following line to your settings.php file:
  // $conf['maintenance_theme'] = 'mortgagebase';
  // Also, check $vars['db_is_active'] before doing any db queries.
}

/**
 * Implements hook_modernizr_load_alter().
 *
 * @return
 *   An array to be output as yepnope testObjects.
 */
/* -- Delete this line if you want to use this function
function mortgagebase_modernizr_load_alter(&$load) {

}

/**
 * Implements hook_preprocess_html()
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function mortgagebase_preprocess_html(&$vars) {

}

/**
 * Override or insert variables into the page template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function mortgagebase_preprocess_page(&$vars) {

}

/**
 * Override or insert variables into the region templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function mortgagebase_preprocess_region(&$vars, $hook) {

}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function mortgagebase_preprocess_block(&$vars, $hook) {

}
// */

/**
 * Override or insert variables into the entity template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("entity" in this case.)
 */
/* -- Delete this line if you want to use this function
function mortgagebase_preprocess_entity(&$vars, $hook) {

}
// */

/**
 * Override or insert variables into the node template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function mortgagebase_preprocess_node(&$vars, $hook) {
  $node = $vars['node'];
}
// */

/**
 * Override or insert variables into the field template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("field" in this case.)
 */
/* -- Delete this line if you want to use this function
function mortgagebase_preprocess_field(&$vars, $hook) {

}
// */

/**
 * Override or insert variables into the comment template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function mortgagebase_preprocess_comment(&$vars, $hook) {
  $comment = $vars['comment'];
}
// */

/**
 * Override or insert variables into the views template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 */
/* -- Delete this line if you want to use this function
function mortgagebase_preprocess_views_view(&$vars) {
  $view = $vars['view'];
}
// */


/**
 * Override or insert css on the site.
 *
 * @param $css
 *   An array of all CSS items being requested on the page.
 */
/* -- Delete this line if you want to use this function
function mortgagebase_css_alter(&$css) {

}
// */

/**
 * Override or insert javascript on the site.
 *
 * @param $js
 *   An array of all JavaScript being presented on the page.
 */
/* -- Delete this line if you want to use this function
function mortgagebase_js_alter(&$js) {

}
// */
