<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
<div class="header">
<div class="header_nav_container">
  <a href="index.php" class="lol logo">SX</a>
<nav class="header_nav">
  <ul class="ul">
    <?php
    include'active.php'
    ?>
    <li <?=active("horde.php") ?>><a href="horde.php" class="link_nav">Horde</a></li>
    <li <?=active("alliance.php") ?>><a href="alliance.php" class="link_nav">Alliance</a></li>
    <li <?=active("pvp.php") ?>><a href="pvp.php" class="link_nav">The battle</a></li>
  </ul>
</nav>
</div>
<span class="header_lineLink"><span class="header_lineLink_active"></span></span>
</div>
<div class="container">
