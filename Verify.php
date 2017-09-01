<?php
$access_token = '7eowgZxpltnVD2SrM/VxvNyOYmZ5FiJD1dghIWJoS4eLp48oWwaG48Wd76uZsEQN1GNU8NvJ109COxatExDibCHstzjdLvdPCJo1x2i1ok4io60b9MQVa7a38HxqwmzNKKZNFbrzWfNj3R9m+GnUXAdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
