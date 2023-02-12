<?php
/*	
* ファイルパス：C:\xampp\htdocs\DT\autoload\index.php	
* ファイル名：index.php	
* アクセスURL：http://localhost/DT/autoload/index.php	
*/
namespace Com\Sample;
class ClassLoader
{
    public static function loadClass($class)
    {

        //macユーザーは↓	
        require_once dirname(__FILE__) . '/' . $class . '.class.php';
    }
}
// これを実行しないとオートローダーとして動かない	
spl_autoload_register([
    'ClassLoader',
    'loadClass'
]);
$foo = new Foo();
$hoge = new Hoge();
