<?php
namespace Incos\Api;
final class Connection {
    public static function open(): \PDO {
        $c=require MVC_ROOT.'/config/database.php';
        return new \PDO('mysql:host='.$c['host'].';port='.($c['port']??3306).';dbname='.$c['database'].';charset=utf8mb4',$c['user'],$c['password'],[
            \PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION,\PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_ASSOC,\PDO::ATTR_EMULATE_PREPARES=>false
        ]);
    }
}
