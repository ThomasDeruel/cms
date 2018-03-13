<?php
require_once 'content.php';
require_once 'page.php';
    //var_dump($currentPage);//
function addActive($page, $text)
{
    $activeClass = '';
    if($page === basename($_SERVER['PHP_SELF'])){
        $activeClass = "--active";
    }
    if($page === 'index.php'){
?>
    <a href="<?=$page?>?p=<?=$text?>" class="lol logo <?=$activeClass?>"><?=$text?></a>
<?php
}else{
?>
    <li class="lol header_nav_items <?=$activeClass?>"><a href="<?=$page?>?p=<?=$text?>" class="link_nav"><?=$text?></a></li>
<?php
}
}
