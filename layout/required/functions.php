<?php
// Require autoload information
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

// Involve general namespaces
use Michelf\MarkdownExtra;
use Michelf\SmartyPantsTypographer;
use Spatie\YamlFrontMatter\YamlFrontMatter;

// Recover the most recent image in a specified folder
function pmf_last_pict($path)
{
  $list = array_reverse(glob($path . '*.{jpg,png}', GLOB_BRACE));
  return $list[0];
  unset($path, $list);
}

// Apply typographic rules according to specified language
function pmf_typo_text($text, $lang)
{
  switch ($lang) {
    case 'en':
      $rule = "qDe";
      break;
    case 'fr':
      $rule = "qDe:+;+m+f+";
      break;
  }
  $html = SmartyPantsTypographer::defaultTransform($text, $rule);
  return $html;
  unset($text, $lang, $rule, $html);
}

// Parse and format body text based on specified path and language
function pmf_body_text($path, $lang)
{
  $file = YamlFrontMatter::parse(file_get_contents($path));
  $body = MarkdownExtra::defaultTransform($file->body());
  $text = pmf_typo_text($body, $lang);
  return $text;
  unset($path, $lang, $file, $body, $text);
}

// End of file ./layout/required/functions.php
