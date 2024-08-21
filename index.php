<!DOCTYPE html>
<html>
<head>
    <title>アンケートフォーム</title>
</head>
<body>
    <h1>アンケート</h1>
    <form action="write.php" method="post">
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">年齢:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <label for="feedback">自由記述欄:</label><br>
        <textarea id="feedback" name="feedback" required></textarea><br><br>

        <input type="submit" value="送信">
    </form>
</body>
</html>
