<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // CSVファイルにデータを保存
    $file = fopen('data.csv', 'a');
    fputcsv($file, [$name, $age, $feedback]);
    fclose($file);

    // リダイレクト
    header("Location: read.php");
    exit();
}
?>
