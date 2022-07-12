<h3><?php echo ucfirst($glossary['body']['index']['showcase']) ;?></h3>
<div class="showcase">
  <?php
  // Define showcase content in index layout
  $file = 'record/catalog/report.csv';
  $data = new SplFileObject($file);
  $data->setFlags(
    SplFileObject::READ_CSV | SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE
  );
  $line = 0;
  foreach ($data as $item) {
    if (($line > 0) && ($line < 7)) {
      $path = 'record/catalog/' . $item[1] . '/' . $item[2] . '/';
      $main = $path . $item[2] . '.md';
      $data = pmf_yaml_data($main);
      $head = pmf_part_text(pmf_body_text($main, $data['idiom']));
      $href = $data['refer'];
  ?>
      <article lang="<?php echo $data['idiom'] ?>">
        <figure role="group">
          <img src="<?php echo pmf_last_pict($path); ?>" alt="<?php echo pmf_typo_text($data['title'], $data['idiom']); ?>" />
        </figure>
        <div>
          <h4><a href="<?php echo $href; ?>"><?php echo pmf_typo_text($data['title'], $data['idiom']); ?></a></h4>
          <?php echo $head[1]; ?>
        </div>
      </article>
  <?php
    } elseif ($line >= 8) {
      break;
    }
    $line++;
  }
  ?>
</div>
