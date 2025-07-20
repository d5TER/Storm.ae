<?php
$data = [
    'name' => $_POST['name'],
    'discord' => $_POST['discord'],
    'reason' => $_POST['reason'],
    'time' => date('Y-m-d H:i:s')
];

$file = 'applications.json';
$existing = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
$existing[] = $data;

file_put_contents($file, json_encode($existing, JSON_PRETTY_PRINT));
header('Location: apply.php');
?>
