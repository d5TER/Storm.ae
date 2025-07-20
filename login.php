<?php
session_start();
$client_id = 'YOUR_DISCORD_CLIENT_ID';
$redirect_uri = 'https://yourdomain.com/callback.php';
$scope = 'identify guilds';
$response_type = 'code';

$auth_url = "https://discord.com/api/oauth2/authorize?client_id=$client_id&redirect_uri=$redirect_uri&response_type=$response_type&scope=$scope";
header("Location: $auth_url");
exit;
?>
