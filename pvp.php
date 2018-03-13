<?php
include 'include/header.php';

?>
  <h1 class="container_title"><?= $page['title']?></h1>
  <span class="category <?= $page['spanClass']?>"><?= $page['spanText']?></span>
  <div class="container_content">
  <?= $page['text']?>
  </div>
  <img class="content-bg"src="<?= $page['imgSrc']?>" alt="<?= $page['imgAlt']?>">
  <?php
  include 'include/footer.php'
  ?>
