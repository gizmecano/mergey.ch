<aside>
  <p>
    <?php echo file_get_contents('design/assets/bi/exclamation-circle-fill.svg'); ?>
    <strong><?php echo $glossary['body']['aside']['redesign']; ?></strong>
  </p>
  <?php
  $text['path'] = $page['path'] . 'redesign.md';
  echo pmf_body_text($text['path'], $page['lang']);
  ?>
</aside>

<?php
unset($text);

// End of file ./layout/embedded/aside-redesign.php
