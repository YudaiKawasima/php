<?php


// csvファイルの読み込みは　php５、１以上だと　クラス　を利用するといい
// fopen+fgetcsvより処理が最速　ただ最終行に

//array(1){
// [0]=>
// null
// }
// こんなのがでるから処理がひつよう
// サンプルでは、if($line[0] === null)continue;としていますが
//if (is_null($line[0]))continue;とかでもok 後　fgetcsvのサンプル内のpeg_matchの正規表現で
// [0-9][1]$となっていますが、[0-9]が一文字を表しているので[1]いらないです説明として残っています
// 
//クラスについては四日目の講座でご説明します
//オブジェクトからインスタンス生成
//Sp|fileObject: ファイルを読み込む定義ずみクラス
// Sp|FileObject::READ_CSV:定義済みの定数　CSV 列として行を読み込む
// 
$file = new SplFileObject('read.csv');//勝手に区切ってくれる
$file->setFlags(SplFileObject::READ_CSV);//setFlgs:SplFileObject内の関数　フラグをセットする

$i = 1;
$flg = true;
foreach($file as $line){
    // var_dump($file);
    // var_dump($line);
}
// exit

if ($line[0] === null)
    // continue;
$divDate = explode('-', $line[1]);
    //preg_match:正規表現によるマッチングを行う
// trim:文字列の先頭および末尾にあるスペーすを取り除く
//checkdate:　月　　日　　年　　の順番
if(preg_match('/^[0-9]{4}$/',trim($line[0])) === 0|| //preg_matchはマッチした回数を返す
    checkdate($divDate[1],$divDate[2],$divDate[0])===false ||
preg_match('/^[0-9]$/',$line[2])===0){
    echo $i . '行目にエラーがあります<br>';
    $flg = false;
}
$i++;
{
    if($flg === true){
        echo '正常に終了しました';
    }
}
// $fp =fopen("read.csv","r");
// $i = 1;
// $flg =true;
// while($res = fgetcsv($fp."1024")){
//     $divDate = explode("-", $res[1]);
//     if (preg_match(('/^[0-9]{4}$/'trim($res[0]))===0
//     checkdate($divDate[1],$divDate[2],$divDate[0])=== false||
//     preg_match('/^[0-9]{1}$/'$res[2]){
//         echo $i "行目にエラーがああります<br>";
//         $flg = false;
//     }
//     )
// }
// 
// 正規表現
// なんでもいい一文字を表す
// キャレット　先頭を意味する
// アスタリスク直前の文字がなし。または１つ以上連続する
// 直前の文字が最低でも１つ以上連続する
// 直前の文字がなし　また一つだけ
// ｜｜で区切られた文字列のいずれか
// [][]内の文字のいずれか
// [abc] aかbかc
// (グループ化する)
// abc+
