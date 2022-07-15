<aside>
  <p>
    <?php echo file_get_contents('design/assets/bi/exclamation-circle-fill.svg'); ?>
    <strong><?php echo $glossary['body']['aside']['redesign']; ?></strong>
  </p>
  <?php
  $hasp = $page['path'] . 'redesign.md';
  echo pmf_body_text($hasp, $page['lang']);
  unset($hasp);
  ?>
</aside>

<?php
unset($text);

// End of file ./layout/embedded/aside-redesign.php
