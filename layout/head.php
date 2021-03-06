<head>
  <base href="/" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $meta['title'] ?></title>
  <meta name="description" content="<?php echo $meta['blurb']; ?>">
  <link rel="canonical" href="<?php echo $meta['canon']; ?>">
  <?php include_once('required/meta-data.php'); ?>
  <!-- Implement independent components -->
  <link rel="stylesheet" href="assets/knacss/knacss.css?version=7.1.3" media="all">
  <link rel="stylesheet" href="assets/inter/inter.css?version=3.15" media="all">
  <link rel="stylesheet" href="assets/lora-cyrillic/lora-cyrillic.css?version=2.210" media="all">
  <!-- Design custom stylesheets -->
  <link rel="stylesheet" href="design/styling/bedrock.css" media="all">
  <!-- Combine various sizes of shortcut icons -->
  <?php include_once('required/icon-data.php'); ?>
</head>
