<?php
define('APP_DEFAUT_PAGE', 'index');
define('APP_PAGE_PARAM', 'p');
// est-ce que j'ai le parametre p dans l'url? (isset)
if (isset($_GET[APP_PAGE_PARAM])) {
    // si oui, affectation de p dans $currentPage
    $currentPage = $_GET[APP_PAGE_PARAM];

} else {
    // si non, affectation de la page par defaut dans $currentPage
    $currentPage = APP_DEFAUT_PAGE;
}
// est-ce que ce $currentPage pointe vers une page qui existe?
if (isset($content[$_GET[APP_PAGE_PARAM]])) {
    // si oui, j'affiche la page
    $page = &$content[$_GET[APP_PAGE_PARAM]];
} else {
    // si non, response code 404 et affichage de la page par defaut
    http_response_code(404);
    $currentPage = APP_DEFAUT_PAGE;
    $page = &$content[$currentPage];
}
?>
