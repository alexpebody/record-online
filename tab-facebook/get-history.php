<?
$link = 'http://history.radiorecord.ru/index-flat-facebook.php?station='.$_GET['station'];
if(isset($_GET['day'])) { $link .= '&day='.$_GET['day']; }
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
?>