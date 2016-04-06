<?php

/***Implementshook_form_FORM_ID_alter().*/

function vs_drupal7_install_form_install_configure_form_alter(&$form,$form_state)
        {
        // Pre-populate the site name and email address.
        $form['site_information']['site_name']['#default_value']= $_SERVER['SERVER_NAME'];
        $form['site_information']['site_mail']['#default_value']='team@variantstudios.com';
        // Account information defaults
        $form['admin_account']['account']['name']['#default_value']='vsadmin';
        $form['admin_account']['account']['mail']['#default_value']='team@variantstudios.com';
        // Set a default country and timezone.
        $form['server_settings']['site_default_country']['#default_value'] = 'US';
        $form['server_settings']['date_default_timezone']['#default_value'] = 'America/Denver';
        // Unset the timezone detect stuff
        unset($form['server_settings']['date_default_timezone']['#attributes']['class']);
}