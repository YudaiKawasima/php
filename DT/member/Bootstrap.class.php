<?php
/*	
* ファイルパス：C:\xampp\htdocs\DT\member\bootstrap.class.php	
* ファイル名：Bootstrap.class.php (設定に関するプログラム)	
*/

namespace member;

require_once dirname(__FILE__) . './../vendor/autoload.php';
class Bootstrap
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'member_db';
    const DB_USER = 'board_user';
    const DB_PASS = 'board_pass';
    //macユーザーは下段	
    // const APP_DIR = '/Applications/MAMP/htdocs/DT/';
    const APP_DIR = '/Applications/MAMP/htdocs/DT/';
    const TEMPLATE_DIR = self::APP_DIR . '/templates/member/';
    // const CACHE_DIR = false;
    const CACHE_DIR = false;
    // self::APP_DIR . '/templates/member/';
    const APP_URL = 'http://localhost/DT/';
    const ENTRY_URL = self::APP_URL . 'member/';
    public static function loadClass($class)
    {
        $path = str_replace('\\', '/', self::APP_DIR . $class . '.class.php');
        require_once $path;
    }
}
// これを実行しないとオートローダーとして動かない	
spl_autoload_register([
    'member\Bootstrap',
    'loadClass'
]);
