<?php
$access_token = 'LaFL2L5KdcaMq8Plmgqb6zyBXyByQrEHFPBA2N7lkfMXtIsRVzC+7hrX13z+injU1LVfxAxhuTBnwuG+w+v8FgAPrZGJP69Rj1sC8itg4YYlCdCmOGa7c9B49VzOe7UUSgDtgfUliIlSuMQRp8RKSAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;