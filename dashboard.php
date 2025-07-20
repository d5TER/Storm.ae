<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

// جلب التقديمات من ملف JSON
$applications = json_decode(file_get_contents('applications.json'), true);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>لوحة الإدارة</title>
</head>
<body>
    <h1>لوحة تحكم التقديمات</h1>
    <?php foreach ($applications as $app): ?>
        <div class="application">
            <p><strong>الاسم:</strong> <?= htmlspecialchars($app['name']) ?></p>
            <p><strong>الديسكورد:</strong> <?= htmlspecialchars($app['discord']) ?></p>
            <p><strong>السبب:</strong> <?= htmlspecialchars($app['reason']) ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>
