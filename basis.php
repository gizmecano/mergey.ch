<?php
// Declare variables specific to this page
$page['body'] = basename($_SERVER['PHP_SELF'], ".php");
$page['case'] = $_GET['case'];

// Include requisite functions and variables
require_once 'layout/required/functions.php';
require_once 'layout/required/variables.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $page['lang']; ?>">
<?php require_once 'layout/anchored/head.php'; ?>

<body id="<?php echo $page['body']; ?>">
  <?php require_once 'layout/anchored/header.php'; ?>
  <main>
    <article>
      <header>
        <?php include_once 'layout/embedded/aside-redesign.php'; ?>
        <h2><?php echo $page['name']; ?></h2>
        <?php
        $hasp = $page['path'] . '/' . $page['case'] . '.md';
        echo pmf_body_text($hasp, $page['lang']);
        unset($hasp);
        ?>
      </header>
      <article>
        <?php require_once 'layout/targeted/basis-article-' . $page['case'] . '.php'; ?>
      </article>
    </article>
  </main>
  <?php require_once 'layout/anchored/footer.php'; ?>
</body>
<?php unset($page); ?>

</html>
