<?php
// Get current active host path
$site['host'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

// Decode dependency management setup
$composer = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/composer.json'), true);

// Set language variables for site
$site['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($site['lang'] != 'fr') {
  $site['lang'] = 'en';
}

// Prepare variables based on decoded data
$site['name'] = ucfirst(substr($composer['name'], -9));
$site['nick'] = substr($composer['name'], 0, 9);

// Set language variables for page
if (empty($page['lang'])) {
  $page['lang'] = $site['lang'];
}

// Decode requisite glossary based on language variable
$glossary = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/record/content/' . $page['lang'] . '/glossary.json'), true);

// Prepare page name based on page case
if (isset($page['case'])) {
  $page['name'] = ucfirst($glossary['body'][$page['body']][$page['case']]);
}

// Define content page path based on page language
$page['path'] = $_SERVER['DOCUMENT_ROOT'] . '/record/content/' . $page['lang'] . '/';

// Define page title based on page body
switch ($page['body']) {
  case 'basis':
    $meta['title'] = $site['name'] . ' — ' . $page['name'];
    break;
  case 'index':
    $meta['title'] = $site['name'];
    break;
  default:
    $meta['title'] = $page['name'] . ' - ' . $site['name'];
}

// Define page description based on page body
switch ($page['body']) {
  case 'basis':
    $meta['blurb'] = $page['name'];
    break;
  case 'index':
    $meta['blurb'] = $site['name'] . ' — ' . ucfirst($glossary['site']['motto']);
    break;
  default:
    $meta['blurb'] = $site['name'];
}

// Define canonical link based on page body
switch ($page['body']) {
  case 'basis':
    $meta['canon'] = $site['host'] . $page['case'];
    break;
  case 'index':
    $meta['canon'] = $site['host'];
    break;
  default:
    $meta['canon'] = $site['host'];
}

// End of file ./layout/required/variables.php
