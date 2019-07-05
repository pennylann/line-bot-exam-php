<?php
$access_token = 'G8bWXTdgWpjbjWGa95ZGgwulganRY7JNjC/OAZLf6B91XWrvDlen5Eb6Iy2UmNBUHVM/AgMU65e4Ewwv69kgkuFTs5zxki/B+LFLrw+lCFfuvBX21HzeFvJUFGHu/F1CFHblx5X8YHaPOSqAvPihSwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
