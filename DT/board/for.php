<?php

use JetBrains\PhpStorm\Language;

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHPスクール1日目〜while_foreach_for</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <html lang="ja">
    <script src='main.js'></script>
</head>

<body>
    <?php
    // 繰り返し処理：whileの場合
    $i = 1;
    while ($i <= 10) {
        echo $i;
        $i++;
        // インクリメント(加算子)プラス＋１しろ！($1 = $+1)
        // デクリメント　(減算子)$i--;
        // 加算代入(+=),減算代入(-=),乗算代入(*=),除算代入(/=),余(%=)、連結代入(.=)

    }
    echo '<br><br>';
    // forが出来て、何が嬉しいか
    // まとめることによって列挙したり　数を変えたりできる
    $arr = [
        'saito',
        'tomohiko',
        'chiba',
        'PHP'
    ];
    // echo $arr[0];
    // echo $arr[1];
    // echo $arr[2];
    // echo $arr[3];
    echo '*******************<br>';
    // count():引数内のカウント　元々ある関数
    $num = count($arr);

    echo count($arr);
    echo '<br>';
    // var_dump($num);
    for ($i = 0; $i < $num; $i++) {
        echo $arr[$i] . '<br>';
    }
    echo '<br><br>';
    // 上記のforと一緒だが初期値の設定や配列の数を数える必要がなく
    // 一気に展開ができる
    // 通常　配列のループ処理にほとんどこちらを使う
    foreach ($arr as $key => $value) {
        echo $key;
        echo $value . '<br>';
    }
    echo '<br><br>';
    $label_arr = [
        'family_name' => 'saito',
        'first_name' => 'tomohiko',
        'pref' => 'chiba',
        'language' => 'PHP'
    ];
    foreach ($label_arr as $label => $data) {
        echo $label;
        echo '      ';
        echo $data . '<br>';
    }
    echo '<br><br>';
    // **********************************
    $excel_arr = [
        [
            'family_name' => 'saito',
            'first_name' => 'tomohiko',
            'pref' => 'chiba',
            'age' => '33',
            'language' => 'PHP'
        ],
        [
            'family_name' => 'tanaka',
            'first_name' => 'youhei',
            'pref' => 'tokyo',
            'age' => '19',
            'language' => 'C'
        ],
        [
            'family_name' => 'sato',
            'first_name' => 'ichiro',
            'pref' => 'kanagawa',
            'age' => '28',
            'language' => 'Java'
        ],
    ];
    foreach ($excel_arr as $data => $member_data) {

        // var_dump($member_data);
        echo   $member_data['family_name'] . '<br>';
        echo $member_data['first_name'] . '<br>';
        echo $member_data['pref'] . '<br>';
        echo $member_data['age'] . '<br>';
        echo $member_data['language'] . '<br>';
    }
    echo '<br><br>';
    // while
    $j = 1;
    $flg = true;
    // true => false(on off)
    while ($flg === true) {
        if ($j === 10)
            $flg = false;
        echo $j;
        $j++;
    }
    echo '<br><br>';
    // 二日目の授業に説明します　ファイルポインタ　本のしおり
    $fp = fopen('sample_text.txt', 'r');
    // リソース型の変数
    // 'r':読み取り専用　'w': 書き込み(ファイルポインタ先頭) 'a':　(ファイルポインタ終端、追記)
    $flg = true;
    while ($flg === true) {
        // fgets  データの情報を取ってくる
        $res = fgets($fp);
        // fgetsが終点に到達するとfalseを返します。
        if ($res === false)
            $flg = false;
        echo $res . '<br>';
    }
    fclose($fp);
    echo '<br><br>';

    foreach ($excel_arr as $member_data) {
        // var_dump($excel_data);
        if ($member_data['age'] >= 30) {
            echo $member_data['family_name'] . 'さんは３０代です。<br>';
        } elseif ($member_data['age'] >= 20) {
            echo $member_data['family_name'] . 'さんは２０代です。<br>';
        } else {
            echo $member_data['family_name'] . 'さんは１０代です。<br>';
        }
    }
    // *************************************

    echo '<table border = "1px">';
    echo '<tr>';
    echo '<td>family_name</td>';
    echo '<td>first_name</td>';
    echo '<td>pref</td>';
    echo '<td>age</td>';
    echo '<td>language</td>';
    echo '</tr>';

    foreach ($excel_arr as $member) {
        echo '<tr>';
        echo '<td>' . $member['family_name'] . '</td>';
        echo '<td>' . $member['first_name'] . '</td>';
        echo '<td>' . $member['pref'] . '</td>';
        echo '<td>' . $member['age'] . '</td>';
        echo '<td>' . $member['language'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    ?>

</body>

</html>