<?php$access_token = 'LLku30nId/gX24KFEtlfxhdkobBirkG3rakCkurDhX2AGbZBtSB68HoEbvT9nqNpF8UCbQrYFx9WoIyyeLIOac6z0Q44ra2WcamS8R045DjNax4c2PbHZczAslMhbCPAUvkIp13UKo3XkMIfbeoMOQdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;
