<?php
/**
 * @file
 * Write your theme logic here.
 */

/**
 * Implements hook_preprocess_node().
 */
function papio_preprocess_node(&$vars) {
  if($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';  
  }
}
