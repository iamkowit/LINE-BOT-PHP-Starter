<?php
$access_token = 'TOW4YNTmRkyAclv+CqHOQZWwTC9pYN+TeljKbAIYLL+rLp9szOKEc79EM78Ug1eiR988A4NB1gf5KLIqyqBCG4VdGpGjm23nnh1cX9TE9HwQgvw6tz75lrwQIiKaNuocPtQq2jFQBBr5+IVVXi/QpAdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v2/bot/profile/1519664504';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
