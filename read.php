<!DOCTYPE html>
<html>
<head>
    <title>アンケート結果</title>
</head>
<body>
    <h1>アンケート結果</h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>年齢</th>
            <th>自由記述欄</th>
        </tr>

        <?php
        if (($file = fopen('data.csv', 'r')) !== FALSE) {
            while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                echo "</tr>";
            }
            fclose($file);
        }
        ?>
    </table>
</body>
</html>
