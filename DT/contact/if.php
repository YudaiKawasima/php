<!DOCTYPE HTML PUBLIC //W3c//DTD HTML 4.01 Transitional//EN""http://www.w3.org/RT/html4/loose.dtd>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UFT-8">
    <title>PHPスクール1日目〜if.php</title>
</head>

<body>

    <?php
    echo '斎藤　智彦';
    echo '<br>';
    echo 'サイトウ　トモヒコ';
    echo '<br>';

    $x = '10';
    $name = '斎藤智彦';
    echo '<br>';
    echo 'サイトウ　トモヒコ';
    echo '<br>';

    $x = '10';
    $name = '斎藤 智彦';
    echo $name;
    $name = 'Pスク 太郎';
    echo $name;

    const CONST_NAME = '斎藤　智彦';
    echo CONST_NAME;

    $test_bool = true;
    $test_int = 10;

    $test_float = 3.14;

    $test_string = '文字列';
    $test_string_alphabet = 'abc';

    echo '<br>';

    $id = 0;
    if ($id === '') {
        echo 'empty';
    } else {
        echo 'not empty';
    }
    echo '<br>';

    if ($x === 10) {
        echo '10';
    } else {
        echo 'not 10';
    }
    '<br><br>';

    $my_score = 70;

    if ($my_score >= 80) {
        echo '頑張りましたね';
    } elseif ($my_score >= 60) {
        echo 'もう一歩です';
    } elseif ($my_score >= 40) {
        echo '頑張りましょう';
    } else {
        echo 'ダメダメです';
    }
    echo '<br>';
    $a = 10;
    $c = 7;

    if ($a === 10 && $c === 8) {
        echo 'OK';
    } else {
        echo 'NG';
    }
    echo '<br>';

    $a = '0';
    if (empty($a) === true) {
        echo '空です';
    }
    echo '<br>';

    if ($a !== '') {
        echo '値が入っています';
    } else {
        echo '空白です';
    };


    function factorial($num)
    {
        if ($num !== 0) {
            return $num * factorial($num - 1);
        }
    }
    echo factorial(5);

    ?>