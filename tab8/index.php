<?
$params = '';
if($_GET['from']) {
	$params = '?from='.$_GET['from'];
}
header("Location: //www.radiorecord.ru/player/".$params);
die();
