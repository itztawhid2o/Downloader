<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Xtreme Codes Credentials
$host = "http://starshare.live:8080";  
$username = "74998";  
$password = "74998";  

// API URL
$api_url = "$host/player_api.php?username=$username&password=$password&action=get_live_streams";

// Fetch Data
$response = file_get_contents($api_url);
echo $response;
?>
