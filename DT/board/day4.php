<?php

class student
{
    public $name = '';
    public $age = '';
    public $pref = '';

    public function __construct($name, $age, $pref)
    {
        $this->name = $name;
        $this->age = $age;
        $this->pref = $pref;
    }
    public function showData($tbl_flg)
    {
        if ($tbl_flg === '1') {
            echo '<table border="1">';
            echo '<caption>' . $this->name . ' profile </caption>';
            echo '<tr><th>name</th><th>age</th><th>language</th></tr>';
            echo '<tr><td>' . $this->name . '</td><td>' . $this->age . '</td><td>' . $this->pref . '</td></tr>';
            echo '</table>';
        } else {
            echo $this->name . ' profile <br>';
            echo $this->name . 'is ' . $this->age . 'years old<br>';
            echo $this->name . 'is from' . $this->pref . '<br>';
        }
        echo '<br><br>';
    }
}
$matumoto = new student('matumoto', 34, 'chiba');

$matumoto->showData(1);
$matumoto->showData(0);

$kawashima = new student('kawashima', 27, 'kanagawa');
$kawashima->showData(1);
$kawashima->showData(2);

class superStudent extends student
{
}

?>


問1-4: 問1-1~1-3までで作ったクラスを継承し、自分で考えた表示方法を追加してください。
問2: 3日目課題の問3のエラーチェックをクラス化し、テンプレート部分をSmartyで表示させて下さい。
5日目小テスト
問1: 4日目課題の問2に、JavaScriptを使って、以下の要素を加えてください。
※ボタンを押した時未入力の場合、色をピンク表示にする
問2: 以下の内容で、パスワードを作成し、ブラウザ上に表示させてください。
・文字数は、12~16文字です。
・使う文字は、下のA~Dタイプから選んでください。
・必ず、全てのタイプの文字を、最低1回は使うようにしてください。
A "abcdefghijklmnopqrstuvwxyz";
B "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
C "0123456789";
D "!\"#$%&'()";
問3 :今までやったファイルをLinuxのサーバーに移動し、ブラウザで表示させてください。