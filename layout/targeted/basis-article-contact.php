<?php
// Decode masthead values
$masthead = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/record/content/masthead.json'), true);

// Define data to be displayed
$item = "o";
?>
<h3><?php echo ucfirst($glossary['mast']['c']); ?></h3>
<?php
// Embed address block
include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/embedded/address.php';
unset($masthead, $item);

// End of file ./layout/targeted/basis-article-contact.php
