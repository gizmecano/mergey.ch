<?php
// Set language variables for site and page

$site['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($site['lang'] != 'fr') {
  $site['lang'] = 'en';
}
if (empty($page['lang'])) {
  $page['lang'] = $site['lang'];
}

// End of file ./layout/required/variables.php
