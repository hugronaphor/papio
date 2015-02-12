<?php

/**
 * @file
 * Admin page.
 */

/**
 * Implements hook_form().
 */
function papio_core_admin_form() {

  $form['header'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header data'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['header']['header_line_1'] = array(
    '#type' => 'textfield',
    '#title' => t('Line 1'),
    '#default_value' => variable_get('header_line_1'),
  );
  $form['header']['header_line_2'] = array(
    '#type' => 'textfield',
    '#title' => t('Line 2'),
    '#default_value' => variable_get('header_line_2'),
  );
  $form['header']['count_block_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Global Bows count block title'),
    '#default_value' => variable_get('count_block_title'),
  );

  $form['footer'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer data'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['footer']['footer_line_1'] = array(
    '#type' => 'textfield',
    '#title' => t('Line 1'),
    '#default_value' => variable_get('footer_line_1'),
  );
  $form['footer']['footer_phone'] = array(
    '#type' => 'textfield',
    '#title' => t('Phone'),
    '#default_value' => variable_get('footer_phone'),
  );

  $form['footer']['footer_line_2'] = array(
    '#type' => 'textfield',
    '#title' => t('Line 2'),
    '#default_value' => variable_get('footer_line_2'),
  );

  $form['footer']['footer_facebook_site_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook Site URL'),
    '#default_value' => variable_get('footer_facebook_site_url'),
  );

  $form['footer']['footer_twitter_site_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter Site URL'),
    '#default_value' => variable_get('footer_twitter_site_url'),
  );
  $form['footer']['footer_youtube_site_url'] = array(
    '#type' => 'textfield',
    '#title' => t('YouTube Site URL'),
    '#default_value' => variable_get('footer_youtube_site_url'),
  );

  $form['footer']['footer_credits'] = array(
    '#type' => 'textarea',
    '#title' => t('Footer credits'),
    '#default_value' => variable_get('footer_credits'),
  );

  return system_settings_form($form);
}
