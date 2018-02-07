<?php
$access_token = 'SF6uJyu590YHbMqKwztlzzhhyGEYLube5gh12wfsoXPnHF4PCLLrEXHM4+0o+5x2PqhAqqdBumKqsNSDt7mSzpXk/Cf9sQbFgv45uY6BRMgV7Ck5TxDnVrAVoeZfdZ2bUqnRj4ycChFeTKhyR+w1UgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>