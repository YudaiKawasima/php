<?php	
/*	
* ファイルパス(Win)：C:\xampp\htdocs\DT\board\board2.php	
* ファイルパス(Mac)：/Applications/MAMP/htdocs/DT/board/board2.php	
* ファイル名：board2.php	
* アクセスURL(Win)：http://localhost/DT/board/board2.php	
* アクセスURL(Mac)：http://localhost:8888/DT/board/board2.php	
*	
* 今回の学習内容	
* ・全体の流れ(投稿があったか確認→投稿があれば入力チェックして書き込み→配列への格納→多次元連想配列の表示)	
* ・配列	
* ・while、foreach	
*/	
var_dump($_POST);	
// 先に書き込みを行う	
if (isset($_POST['send']) === true) {	
//var_dump($_POST);	
$name = $_POST['name'];	
$comment = $_POST['comment'];	
if ($name !== '' && $comment !== '') {	
$fp = fopen('data2.txt', 'a');	
if (flock($fp, LOCK_EX) === true) {	
fwrite($fp, $name . "\t" . $comment . "\n");	
flock($fp, LOCK_UN);	
}	
} else {	
echo '名前もしくは、コメントが記入されていません';	
}	
}	
// ファイルに書き込まれれたデータを読み込む	
$fp = fopen('data2.txt', 'r');	
$lineArray3 = [];	
while ($res = fgets($fp)) { //trueの意。読み込み終わるとfalse	
// 一行の書き込みを配列に分割	
$lineArray = explode("\t", $res); //"\t"はtab。tabごとに区切っている	
// $lineArray = ['鹿児山','貴史'];	
// var_dump($lineArray);	
// 配列の個々の部分にアクセス　echo $lineArray[0];	
// 配列を連想配列にする。ラベル付き	
if (isset($lineArray[0]) && isset($lineArray[1])) {	
$lineArray2 = [	
'name' => $lineArray[0],	
'comment' => $lineArray[1]	
];	
} else {	
$lineArray2 = null;	
}	
// var_dump($lineArray2); //lineArray2は1個ずつの連想配列	
// 連想配列を多次元配列に入れる(エクセルのイメージをもつとわかりやすい)	
// 個々の連想配列$lineArray2を１つの多次元配列にまとめる	
$lineArray3[] = $lineArray2;	
}	
// var_dump($lineArray3);	
// echo '<br><br>';	
fclose($fp);	
?>	
<html>	
<head>	
<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
<title>掲示板2</title>	
</head>	
<body>	
<form method="post" action="">	
名前 <input type="text" name="name" value="" > コメント	
<textarea name="comment" rows="4" cols="20"></textarea>	
<input type="submit" name="send" value="書き込む" >	
</form>	
<!-- $_POST['name'] = '打ち込まれた値' -->	
<!-- $_POST['comment'] = '打ち込まれた値' -->	
<!-- $_POST['send'] = '書き込む' -->	
<!-- ここに、書き込まれたデータを表示する -->	
<?php	
// txtファイルが未書き込み場合、エラー出力(offset)	
// while_foreach_forのforを説明した後、foreachを説明	
// １行目がnullの場合、その後も表示されない	
if ($lineArray3[0] !== null) {	
// var_dump($lineArray3); echo '<br>';	
foreach ($lineArray3 as $value) {	
// var_dump($value); echo '<br>';	
echo "名前 :" . $value["name"] . "<br>";	
echo "コメント：" . $value["comment"] . "<br><br>";	
}	
}	
?>	
</body>	
</html>