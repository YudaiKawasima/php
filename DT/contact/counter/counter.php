<?php
// 今回の学習内容
// 全体の流れ(ファイルの存在確認　値の取得　インクリメントしてからファイルに書き込み)
// file_put_contents,file_get_contents

// 今までの書き方
// $fp =fopen("count.txt","r");
// $res = fgets($fp)

// //file_get_counts ファイルの読み込み専用の関数
// $res = file_get_contents("count.txt");

// 改行関係なく読み込んでくれる

// $data = file_get_contents("hoge.txt");
// var_dump($data);
// exit;

// fwrite($fp, $data);
// file_put_contents("ファイル名","書き込みデータ")
// ファイルがなければ　countかtxtを作って０を入れてみてくださいという処理
//is_file 指定したファイルが通常ファイルか調べる
//file_put_contents ファイル読み込み関数　fopen/fwrite/fcloseの合わせ技　指定したファイルが存在しない場合は作成して書き込む
//Look_EX のみ可　(file_put_contents('count.txt'));//intval　変数($sum)の整数としての値を返す
//文字の場合０になる
//$font = intval('font');
//var_dump($font);
//exit();
//'0' => 0
$num++;
file_put_contents('count.txt', $num);
//2回目はファイルの中身を確認してから進める
echo 'count:' . $num;
?>