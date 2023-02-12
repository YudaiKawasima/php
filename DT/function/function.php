<?php
// 今回の学習内容
// 関数　(何度も行う面倒くさい処理はこれで一括で行う、リモコンのスイッチみたいなもの)
// メリット
// 同じような処理を一括で行うためソースコードが読みやすくなる
// 修正があった時に関数内部の修正を行えば全ての処理に反映させることができる
// 可読性、保守性の向上
// 引数、戻り値、スコープ

// const TAX = 1.08;
$arr = [
    'saito',
    'tomohiko',
    'chiba',
    'PHP'
];
// echo(),var_dump() count()も関数です！
// $num = count($arr);
// $var_dump($num);
// 定数を定義(作成)する関数もあります！
// define(定数名、設定する値)：定数の定義
define('TAX', 1.08);
    // Qプログラムは上から下に走るから　関数の定義は　上でやらないとダメなんじゃないの？
    // A　phpはコンパイルを行う　一旦上から下まで全部読み込んで　その後で関数を呼び出すのでエラーにならない
    // 利点
    // １　同じ処理を使い回せる
    // 2 描き間違いの可能性が減らせる
    // ３修正の対応が簡単
say_hello('matumoto');
say_hello('tanaka');
say_hello('watanabe');
say_hello('katou');
say_hello2();
say_hello2('kazuma');
say_hello3('matumoto', 34);
// グローバル変数、ローカル関数の違いのために用意
$price = 1000;
echo $price . '<br>';
// 仮引数が入口、戻り値が出口
$price2 = calc($price);
echo $price2;
echo '<br>';
// echo calc ($price).'<br>';
// echo $price2;
// $price = $price * 2;
echo $price . '<br>';
// 関数の定義方法
// function 関数名(引数){
// 処理内容
// }
// 関数の外の$priceは変わらないことに注意
// 関数の中と外では、別の変数。関数の中　ローカル関数　外　グローバル関数
function say_hello($name){
    echo 'hi  ' . $name . '<br>';
    echo 'you name is' . $name . '<br>';
    echo '<br>';
}
function say_hello2($name = 'hoge'){
// 初期値は　hoge 変数があればその値を使う
echo 'hi  ' . $name . '<br>';
echo 'you name is' . $name . '<br>';
echo '<br>';
}
function say_hello3($name,$age){
    echo $name . 'is' . $age . 'years old' . '<br>';
    echo '<br>';
}
// 引数はなくてもいいパターンもある
// function say_hoge(){
// echo 'hoge';
// }
// say_hoge();
// 
// 参考問題　引数２つ　$name, $fine_flg
// 晴れ(true)なら　＄name さんいい天気ですね。
// 雨なら(false)なら　$nameさん今日は雨ですね。
function say_weather($fine_flg){

}
// function say_wether($name,$fine_flg){
// if($fine_flg === true){
// echo $name.'さんいい天気ですね。'；
// }else{
// echo $name.'さん今日は雨ですね。'；
// }
// }
// say_weather('かご山’,true);

function calc ($price){
    $price = 1.2 * $price;
    $price2 = $price * TAX;
    return $price2;
    // 戻る変数がある場合はreturnを使う
}
?>