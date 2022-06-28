<?php
// Decode dependency management setup

$composer = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/composer.json'), true);

// Set language variables for site and page

$site['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($site['lang'] != 'fr') {
  $site['lang'] = 'en';
}
if (empty($page['lang'])) {
  $page['lang'] = $site['lang'];
}

// Decode requiste languages glossary based on language

$glossary = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/record/content/' . $page['lang'] . '/glossary.json'), true);

// Prepare variables based on decoded data

$site['name'] = ucfirst(substr($composer['name'], -9));

// Define page title based on page body

switch ($page['body']) {
  case 'index':
    $meta['title'] = $site['name'];
    break;
  default:
    $meta['title'] = $page['name'] . ' - ' . $site['name'];
}

// Define page description based on page type

switch ($page['body']) {
  case 'index':
    $meta['blurb'] = $site['name'] . ' — ' . ucfirst($glossary['site']['motto']);
    break;
  default:
    $meta['blurb'] = $site['name'];
}

// End of file ./layout/required/variables.php
