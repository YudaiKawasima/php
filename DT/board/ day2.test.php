<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>小テスト2日目</title>
    <html lang="ja">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php
    $member = [
        ['name' => '松本', 'age' => '32', 'pref' => '千葉', 'belong' => '教育'],
        ['name' => '田中', 'age' => '33', 'pref' => '兵庫', 'belong' => '経営']
    ];
    echo '<table border ="1px">';
    echo '<tr>';
    echo '<td>name</td>';
    echo '<td>age</td>';
    echo '<td>pref</td>';
    echo '<td>belong</td>';
    echo '</tr>';

    foreach ($member as $key) {
        echo '<tr>';
        echo '<td>' . $key['name'] . '</td>';
        echo '<td>' . $key['age'] . '</td>';
        echo '<td>' . $key['pref'] . '</td>';
        echo '<td>' . $key['belong'] . '</td>';
        echo '</tr>';
    }


    $shop_arr = [
        ['月' => '6月', '店舗' => 'A', '売上品数' => '123', '売上(千円)' => '345'],
        ['月' => '7月', '店舗' => 'B', '売上品数' => '23', '売上(千円)' => '67'],
        ['月' => '6月', '店舗' => 'B', '売上品数' => '111', '売上(千円)' => '765'],
        ['月' => '8月', '店舗' => 'B', '売上品数' => '435', '売上(千円)' => '1234'],
        ['月' => '7月', '店舗' => 'A', '売上品数' => '341', '売上(千円)' => '987'],
        ['月' => '6月', '店舗' => 'B', '売上品数' => '453', '売上(千円)' => '900'],
        ['月' => '6月', '店舗' => 'A', '売上品数' => '231', '売上(千円)' => '700'],
        ['月' => '7月', '店舗' => 'B', '売上品数' => '122', '売上(千円)' => '499'],
        ['月' => '7月', '店舗' => 'A', '売上品数' => '567', '売上(千円)' => '1345'],
        ['月' => '8月', '店舗' => 'A', '売上品数' => '789', '売上(千円)' => '2300'],


    ];
    // $file = new SplFileObject('sales.csv.numbers');
    // $file->setFlags(SplFileObject::READ_CSV);
    $data = '';
    $flg = true;
    $count = 0;
    $sales_array = [];


    $fp = fopen('day2.test.scv', 'r');
    while ($flg === true) {
        $res = fgets($fp);
    }
    if ($flg !== true) {
        $flg = false;
    }





    echo '<table border ="1px">';
    echo '<tr>';
    echo '<td>月</td>';
    echo '<td>店舗</td>';
    echo '<td>売上品数</td>';
    echo '<td>売上(千円)</td>';
    echo '</tr>';


    echo '<tr>';
    echo '<td></td>';
    echo '<td>店舗</td>';
    echo '<td>売上品数</td>';
    echo '<td>売上(千円)</td>';
    echo '</tr>';

    ?>

</body>

</html>