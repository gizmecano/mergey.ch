<address>
  <div itemscope itemtype="https://schema.org/<?php echo $masthead[$item]['tp']; ?>">
    <p><span itemprop="name"><?php echo $masthead[$item]['nm']; ?></span></p>
    <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
      <p><span itemprop="streetAddress"><?php echo $masthead[$item]['sa']; ?></span></p>
      <p><span itemprop="postalCode"><?php echo $masthead[$item]['pc']; ?></span> <span itemprop="addressLocality"><?php echo $masthead[$item]['al']; ?></span></p>
      <p><span itemprop="addressRegion"><?php echo $glossary['code'][$masthead[$item]['ar']]; ?></span>, <span itemprop="addressCountry"><?php echo $glossary['code'][$masthead[$item]['ac']]; ?></span></p>
    </div>
    <div itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint">
      <p><span itemprop="url"><a href="<?php echo $masthead[$item]['wl']; ?>"><?php echo $masthead[$item]['wl']; ?></a></span></p>
      <?php
      // Display email address only if it exists
      if (isset($masthead[$item]['em'])) {
        $mail =  $masthead[$item]['em'] . '@' . substr($composer['name'], -9);
      ?>
        <p><span itemprop="email"><a href="mailto:<?php echo $mail; ?>?subject=(<?php echo ucfirst($page['case']); ?>)"><?php echo $mail; ?></a></span></p>
      <?php
        unset($mail);
      }
      ?>
    </div>
  </div>
</address>
