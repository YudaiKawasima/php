<?php
var_dump($_GET);
//$_GET:スーパーグローバル変数の一つ　連想配列として使用使用する
$data = [
    '渡辺',
    '佐藤',
    '田中'

];
$id = (isset($_GET['id']) === true) ? $_GET['id'] : '';
if ($id !== '')
    echo $data[$id];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>getテスト</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <p>
        <a href="http://localhost/DT/get/get.php?id=0">
            クリックすると渡辺さんが表示されます
        </a>
    </p>
    <p>
        <a href="http://localhost/DT/get/get.php?id=1">
            クリックすると佐藤さんが表示されます
        </a>
    </p>
    <p>
        <a href="http://localhost/DT/get/get.php?id=2">
            クリックすると田中さんが表示されます
        </a>
    </p>

</body>

</html>