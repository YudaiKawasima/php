<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <html lang="ja">
</head>

<body>
    <?php



    $arr = array('name' => '松本', 'age' => '33', 'pref' => '千葉', 'sex' => '男');
    $arr['language'] = 'PHP';
    foreach ($arr as $key => $data) {


        echo $key . '  ';
        echo $data . '  ';
        echo '<br>';
    }


    $arr2 = [
        [
            'name' => '田中',
            'age' => '22',
            'pref' => '千葉',
            'sex' => '男',
            'language' => 'C'

        ],
        [
            'name' => '鈴木',
            'age' => '19',
            'pref' => '東京',
            'sex' => '女',
            'language' => 'Java'

        ],
        [
            'name' => '吉田',
            'age' => '27',
            'pref' => '神奈川',
            'sex' => '男',
            'language' => 'C++'

        ]

    ];
    $arr2[3] = [
        'name' => '渡辺',
        'age' => '26',
        'pref' => '大阪',
        'sex' => '男',
        'language' => 'Perl'
    ];

    echo '<table border= "1px">';
    echo '<tr>';
    echo '<td>name</td>';
    echo '<td>age</td>';
    echo '<td>pref</td>';
    echo '<td>sex</td>';
    echo '<td>language</td>';
    echo '</tr>';

    foreach ($arr2 as $key) {
        echo '<tr>';
        echo '<td>' . $key['name'] . '</td>';
        echo '<td>' . $key['age'] . '</td>';
        echo '<td>' . $key['pref'] . '</td>';
        echo '<td>' . $key['sex'] . '</td>';
        echo '<td>' . $key['language'] . '</td>';


        echo '<br><br>';
    }
    $arr3 = [
        ['code' => 'A0001', 'product' => '白菜(一玉)', 'price' => '298'],
        ['code' => 'K0001', 'product' => 'いわし(一尾)', 'price' => '240'],
        ['code' => 'A0002', 'product' => '(１パック)', 'price' => '258'],
        ['code' => 'A0003', 'product' => 'サツマイモ(一袋)', 'price' => '180'],
        ['code' => 'A0002', 'product' => 'きびなご(一皿)', 'price' => '180']
    ];
    echo '<table border = "1px" >';
    echo '<tr>';
    echo '<td> code</td>';
    echo '<td> product</td>';
    echo '<td> price</td>';
    echo '</tr>';

    echo '<br><br>';

    foreach ($arr3 as $key) {
        echo '<tr>';
        echo '<td>' . $key['code'] . '</td>';
        echo '<td>' . $key['product'] . '</td>';
        echo '<td>' . $key['price'] . '</td>';
        echo '</tr>';
    }
    $num = count($arr3);
    for ($i = 0; $i < $num; $i++) {
        // わからないので保留
    }

    $dataArr = array(
        array('name' => '山田', 'age' => '19', 'sex' => '1'),
        array('name' => '鈴木', 'age' => '22', 'sex' => '0'),
        array('name' => '田中', 'age' => '18', 'sex' => '1'),
        array('name' => '渡辺', 'age' => '25', 'sex' => '0'),
        array('name' => '佐藤', 'age' => '33', 'sex' => '1')

    );
    echo '<table border ="1px">';
    echo '<tr>';
    echo '<td>name</td>';
    echo '<td>age</td>';
    echo '<td>sex</td>';
    echo '</tr>';

    foreach ($dataArr as $key) {
        echo '<tr>';
        echo '<td>' . $key['name'] . '</td>';
        echo '<td>' . $key['age'] . '</td>';
        echo '<td>' . $key['sex'] . '</td>';

        echo '</tr>';
    }
    if ($dataArr['age']<20){
        echo $dataArr['name'] . 'さんは未成年なのでまだお酒は飲めません';
    }else{
        echo $dataArr['name'] . 'さん、飲み過ぎに注意しましょう。';
        // わからないので保留
    }


    ?>

</body>

</html>