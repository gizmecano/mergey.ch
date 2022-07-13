<?php
// Decode masthead values
$masthead = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/record/content/masthead.json'), true);

// List data to be displayed
$imprint = array('o', 'h', 's');
foreach ($imprint as $item) {
?>
  <h3><?php echo ucfirst($glossary['mast'][$item]); ?></h3>
<?php
  // Embed address block
  include $_SERVER['DOCUMENT_ROOT'] . '/layout/embedded/address.php';
}
unset($masthead, $imprint, $item);

// End of file ./layout/targeted/basis-article-imprint.php
