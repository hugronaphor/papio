<?php

/**
 * @file
 * Builds placeholder replacement tokens.
 */

/**
 * Implements hook_token_info().
 */
function twerklist_core_token_info() {
  $info['tokens']['node']['video_image_custom'] = array(
    'name' => t('Image from Video field'),
    'description' => t('Image from Video field.'),
  );

  return $info;
}

/**
 * Implements hook_tokens().
 */
function twerklist_core_tokens($type, $tokens, array $data = array(), array $options = array()) {
  $replacements = array();

  if ($type == 'node' && !empty($data['node'])) {
    $node = $data['node'];

    // Loop through the tokens and replace the elements.
    foreach ($tokens as $name => $original) {
      switch ($name) {
        case 'video_image_custom':

          $video_item = field_get_items('node', $node, 'field_video_single');

          if (isset($video_item[0]['uri']) && $video_item[0]['type'] == 'video') {
            $file = $video_item[0];
            $wrapper = file_stream_wrapper_get_instance_by_uri($file['uri']);
            $image_uri = $wrapper->getLocalThumbnailPath();
            $image_url = file_create_url($image_uri);
          }

          $replacements[$original] = !empty($image_url) ? $image_url : '';
          break;
      }
    }
  }

  return $replacements;
}
