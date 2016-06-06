<meta charset="UTF-8">
<?php
/*
Парсер сайтов с авторизацией для вытаскивания любых данных
Кротов Роман
*/
$start = microtime(true);

set_include_path(get_include_path().PATH_SEPARATOR.'library/');
set_include_path(get_include_path().PATH_SEPARATOR.'phpQuery/');

require('config.php');

function __autoload( $className ) {require_once( "$className.php" );}


echo "<br>".date('H:i:s')." Начинаем парсинг ".URL;

$pageText =new Curl();
$page=$pageText->get_page(URL);/*это тот сайт который будет парситя он есть в config*/

$cat_page = phpQuery::newDocument($page); 

$paginator = $cat_page->find('.row');
print ($paginator);

//////////////////////////////////////////////////////////////////////////
$time = microtime(true) - $start;
printf("<br>".date('H:i:s').' Готово! Процесс выполнялся %.4F сек.', $time);