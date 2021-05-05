<?php
$loginheader[] = "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36";
// $loginheader[] = "accept-encoding: gzip, deflate, br";
$loginheader[] = "cookie: ds_user_id=" . rand(111111, 999999999) . "; sessionid=39290487029%3A2OakCP2fwwJZmx%3A7; rur=FTW";

$login = curl_init();
curl_setopt($login, CURLOPT_URL, "https://www.instagram.com/most_igtv_videos/?__a=1");
curl_setopt($login, CURLOPT_HTTPHEADER, $loginheader);
curl_setopt($login, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($login, CURLOPT_HEADER, 0);
$wow = curl_exec($login);
echo $wow
?>