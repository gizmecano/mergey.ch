<footer>
  <nav>
    <ul>
      <li><a href="/contact"><?php echo ucfirst($glossary['body']['basis']['contact']); ?></a></li>
      <li><a href="/imprint"><?php echo ucfirst($glossary['body']['basis']['imprint']); ?></a></li>
    </ul>
  </nav>
  <ul>
    <li><a href="https://twitter.com/<?php echo $site['nick']; ?>">Twitter</a></li>
    <li><a href="https://github.com/<?php echo $site['nick']; ?>">GitHub</a></li>
    <li><a href="https://dribbble.com/<?php echo $site['nick']; ?>">Dribbble</a></li>
  </ul>
  <ul>
    <li>©&#160;2010&#8211;<?php echo date('Y'); ?>&#160;<a href="/"><?php echo $composer['authors'][0]['name']; ?></a></li>
  </ul>
</footer>
