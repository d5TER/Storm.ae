<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>نموذج التقديم</title>
</head>
<body>
    <h2>قدم الآن</h2>
    <form action="submit_application.php" method="POST">
        <input type="text" name="name" placeholder="اسمك داخل اللعبة" required><br>
        <input type="text" name="discord" placeholder="اسمك في الديسكورد" required><br>
        <textarea name="reason" placeholder="ليش تبغى تقدم؟" required></textarea><br>
        <button type="submit">إرسال</button>
    </form>
</body>
</html>
