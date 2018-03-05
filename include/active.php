<?php
function active($page)
{
  if(basename($_SERVER['PHP_SELF']) === $page)
  {
    echo 'class="lol header_nav_items --active"';
  }
  else{echo 'class="lol header_nav_items"';}
}
