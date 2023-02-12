<?php
// 今回の学習内容
// 全体の流れ　(ファイル読み込み→ 投稿があったか確認　→ 投稿があれば入力チェック→ ファイルに書き込み)
// while構文
// 外部データの取り扱い、ファイル操作
// インクリメント
// データの取得を行う
$data = '';
// $fpにはfopenの戻り値(ファイルハンドル)が入っている
// ファイルポインタを開く、ファイルと読み込みか書き込みか
// 引数『　〇〇して欲しい』という依頼はファイルとモード
$fp = fopen('data.txt', 'r');
// 一行ずつファイルを読み込む。
// 読み込みが終わるまでループを繰り返す
// 新規でdata.txtと、data2.txtを作成してください。中身は空白でおっけい
$flg = true;
$count = 0;
while ($flg === true) {
    // fgets():一行取得する、whileで回して全行取得
    $res = fgets($fp);
    // var_dump($res); テキストを一行ずつ表示
    // echo '<br>';
    if ($res === false) { //ループ仕切る時false
        $flg = false;
    }
    // $data = $data (今までの書き込み全て)＋$res
    // 一回目　：　$data = $res;
    // 2回目　：　$data = $res.$res;
    // 3回目　：　$data = $res.$res.$res;
    // 4回目　：　$data = $res.$res.$res.$res;
    $data .= $res; // 連結させないとhtml のechoが何も表示されないように見える。
    // 正確には最後のnullが表示される
    // echo '<br>';
    $count++;
    if ($count % 2 === 0) { //2行分の出力ごとに<br>を末行につける
        $data .= '<br>';
    }
    // var_dump($data);//テキストが１個ずつ連結されていく
    //echo '<br>';
}
// しおりをしまう
fclose($fp);
// よりスマートな書き方はこれ
// while($res = fgets($fp)){
// $data. = $res."<br>";
// }



// 2:データの読み込みを行う
var_dump($_POST);
if (isset($_POST['send']) === true) {
    $name = $_POST['name'];
    $comment = $_POST['comment '];

    if ($name !== '' && $comment !== '') {
        // 追加書き　(追記　後ろに書き込み)の場合はモードはa、新規の上書きはw
        $fp = fopen('data.txt', 'a');

        //LOCK_SH : 共有ロック(読み込みは可) 
        // LOCK_EX : 排他的ロック　(読み込みも書き込みも不可)、LOCK_UN: ロック解除
        // ファイルロック(自分の編集中は他者が書き込めないようにする)
        // flock：自分がロックできた場合は　　LOCK_EX する
        if (flock($fp, LOCK_EX) === true) {
            //fwrite:指定したモードで書き込み
            fwrite($fp, $name . "¥n" . $comment . "¥n"); //エスケープシーケンス
            //ファイルロック解除(他ユーザーが読み込めるようになる)
            flock($fp, LOCK_UN);
        }
        fclose($fp);
    } else {
        echo '名前　またはコメントが表示されていません';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset = utf-8" />
    <title>掲示板</title>
</head>

<body>
    <form method="post" action= "">名前：
    <input type = "text" name =   "name" value= "">コメント：
<!--rows= ""(入力欄の高さを行数で指定)>-->
<!-- cols= ""(入力欄の高さを行数で指定) -->
<textarea name ="comment" rows ="8" cols ="30"><textarea>
    <input type="submit" name="send" value ="書き込む">
</form>
<!-- ここに書き込まれたデータを表示する -->
<!-- 書き込まれたデータは一個遅れて表示される -->
<!-- 一回読み込んでから表示されるため。　リロードかsubmitする -->
<?php echo $data; ?>
</body>
</html>