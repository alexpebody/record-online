<?$ch = curl_init("https://www.radiorecord.ru:82/index-flat-facebook.php?station=".$_GET['station'].'&day='.$_GET['day']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
?>