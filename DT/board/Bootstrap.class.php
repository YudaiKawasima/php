<?php
/*	
* ファイルパス：C:\xampp\htdocs\DT\board\bootstrap.class.php	
* ファイル名：Bootstrap.class.php (設定に関するプログラム)	
*/

namespace board;

require_once dirname(__FILE__) . './../vendor/autoload.php';
class Bootstrap
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'board_db';
    const DB_USER = 'board_user';
    const DB_PASS = 'board_pass';
    //macユーザーは下段	

    const APP_DIR = '/Applications/MAMP/htdocs/DT/';
    const TEMPLATE_DIR = self::APP_DIR . 'templates/board/';

    const CACHE_DIR = self::APP_DIR . 'templates_c/board/';
    public static function loadClass($class)
    {
        $path = str_replace('\\', '/', self::APP_DIR . $class . '.class.php');
        require_once $path;
    }
}
// これを実行しないとオートローダーとして動かない	
spl_autoload_register([
    'board\Bootstrap',
    'loadClass'
]);
