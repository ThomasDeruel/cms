<?php
require_once "content.php";
require_once "active.php";
require_once "page.php";
?>
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
  <?=addActive('index.php', "Index")?>
<nav class="header_nav">
  <ul class="ul">
  <?=addActive('horde.php', "Horde")?>
  <?=addActive('alliance.php', 'Alliance')?>
  <?=addActive('pvp.php', 'Pvp')?>
  </ul>
</nav>
</div>
<span class="header_lineLink"><span class="header_lineLink_active"></span></span>
</div>
<div class="container">
