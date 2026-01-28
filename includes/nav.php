<?php
$currentLang = $lang;
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav>
  <a href="/<?= $lang ?>/index.php"><?= $L['nav.home'] ?></a>
  <a href="/<?= $lang ?>/about.php"><?= $L['nav.about'] ?></a>

  <span class="lang" style="float:right">
    <a href="/hu/<?= $currentPage ?>" class="<?= $currentLang === 'hu' ? 'active' : '' ?>">HU</a>
    |
    <a href="/en/<?= $currentPage ?>" class="<?= $currentLang === 'en' ? 'active' : '' ?>">EN</a>
  </span>
</nav>
<hr>
