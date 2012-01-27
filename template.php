<?php

function manatibase_feed_icon($url, $title) {
  if ($image = theme('image', 'sites/all/themes/manatibase/images/feed-icon.png', t('Syndicate content'), $title)) {
    return '<a href="'. check_url($url) .'" class="feed-icon">'. $image .'</a>';
  }
}

function manatibase_preprocess_page(&$vars, $hook) {
  $vars['right'] = theme('blocks', 'right');
  // Add per content type pages - ejemplo page-article.tpl.php
  if(isset($vars['node'])) {
    // Add template naming suggestion. It should alway use hyphens.
    $vars['template_files'][] = 'page-'. str_replace('_', '-', $vars['node']->type);
  }
}


function manatibase_preprocess_node(&$vars, $hook) {
  $vars['right'] = theme('blocks', 'right');
}

