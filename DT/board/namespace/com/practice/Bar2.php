<?php	
/*	
* ファイルパス：C:\xampp\htdocs\DT\namespace\com\practice\Bar2.php	
* ファイル名：Bar2.php	
* アクセスURL：http://localhost/DT/namespace/com/practice/Bar2.php	
*/	
namespace Com\Practice;	
require_once '../sample/Hoge.php';	
use Com\sample\Hoge;	
// 名前空間が違うが、useをつかっているため呼び出すことができる	
// cf.Bar.php	
$hoge = new Hoge();	
class Bar	
{	
public function __construct()	
{	
echo "this is bar class<br>";	
}	
}