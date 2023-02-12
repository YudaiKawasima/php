<!-- 今回の学習内容
フローチャート
POSTがあった時とない時、POSTを受け取る変数の用意、チェック
エラーメッセージの用意と表示
formへの変数の用意
初期状態での変数の用意

エラー処理
インデント
変数と命名
if構文　三項演算子
&& ||構文
スーパーグローバル変数定義済みの変数
$POST(HTTP POST変数)$_GET(HTTP get変数)$_FILES(HTTP ファイルアップロード変数)など
空とnullの違い
変数の宣言(空を入れる) 最初に変数を定義しておかないとエラーになる -->
<?php
$err_msg1 = '';
$err_msg2 = '';

// 投稿がある場合は投稿されたでーたをそうでなければ空白で定義する　三項演算子を使う
// 定義しておかないとエラーになる
//三項演算子は以下のように書ける
if (isset($POST['family_name']) === true) {
    $family_name = $_POST['family_name'];
} else {
    $family_name = '';
}
//三項演算子
//値＝（条件式）?trueの時の値 falseの値
// $age = 30;
// $message = ($age >= 20) ? '大人です' : '子供です';
// var_dump(isset($x));
// var_dump(isset($y));
// isset():定義されてるか
$family_name = (isset($_POST['family_name']) === true) ? $_POST['family_name'] : '';
$first_name = (isset($POST['family_name']) === true) ? $_POST['first_name'] : '';

//php5.3以降はこんな書き方もある　(配列はだめ　変数のみ)
//$a = 10;
//$c = $a ?5; //$c ?$a:5; と同じ
// echo $c
var_dump($_POST);
// 投稿がある場合のみ処理を行う
if (isset($_POST['send']) === true) {
    if ($family_name === '') {
        $arr_msg1 = '氏を入力してください';
        //if ($first_name ==='')$err_msg1 ='氏を入力してください; //else $err_msg1 = '入力';

        if ($family_name === '')
            $err_msg2 = '名を入力してください';
        //if($age < 20)$err_msg3 ='20歳未満の方は参加できません'

        if ($family_name !== '' && $first_name !== '')
            if ($err_msg1 === '' && $err_msg2 === '' /*&& $err_msg3 === ''*/) {
                echo 'mail send!<br>';
                exit('this task stop');
                //exit ()処理を止める　なので送信後はformが出なくなる
            }
    }
}
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>お問合せフォーム</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <!-- フォームタグで囲った中の情報が送信される -->
    <!-- メソッド属性　送信方法を指定　action 属性送信先のページ指定 -->
    <form method="post" action="">
        <!-- インプットタグで情報を入力
        タイプ属性　入力方法の指定　name属性 keyを設定 value属性 送信する値
        valueを書くことでエラーが出た どちらかが空　の場合　postした値が残る -->

        氏<input type="text" name="family_name" value="<?php echo $family_name ?>">

        <?php echo $err_msg; ?><br>名:<input type="text" name="first_name" value="<?php echo $err_msg2; ?>"><br><input type="submit" name="send" value="クリック">
    </form>
</body>

</html>