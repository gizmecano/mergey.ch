<?php
// Require autoload information
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

// Involve general namespaces
use Michelf\MarkdownExtra;
use Michelf\SmartyPantsTypographer;
use Spatie\YamlFrontMatter\YamlFrontMatter;

// Textual content processing
// Parse and format body text set in a targeted file

function q_parse_txt($path, $lang)
{
  // Parse targeted file content
  $file = YamlFrontMatter::parse(file_get_contents($path));
  // Return body text to be formatted
  $body = MarkdownExtra::defaultTransform($file->body());
  // Define typographic rules based on page language
  // Configuration options based on:
  // https://michelf.ca/projects/php-smartypants/configuration/
  switch ($lang) {
    case 'en':
      $rule = "qDe";
      break;
    case 'fr':
      $rule = "qDe:+;+m+f+";
      break;
  }
  // Format text based on defined rules
  $text = SmartyPantsTypographer::defaultTransform($body, $rule);
  return $text;
  unset($path, $lang, $file, $body, $rule, $text);
}

// End of file ./layout/required/functions.php
