<?php

$access_token = 'iZoNnaTJ1SersZhobYnkptT1Vk2y1dTe4y9vT/LBPIf5WrhDJVobFBw7k0UPWcW8rp1pvCWI4L+TF78PQfn86b9/xRB8ci86Edcrqp73Kzfp7q7Mg2C4JTO8s2jiNBmymOuVa9/c14CQEZTGxloWOQdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v2/oauth/verify';
$headers = array('Content-Type: application/x-www-form-urlencoded');
$data = array('access_token:' .$access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;

?>