<?php 
echo 'Done';
$ch = curl_init("http://192.168.43.104/LED1=ON");
curl_exec($ch);