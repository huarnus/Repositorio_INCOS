<?php
if (!defined('INCOS_API_BRIDGE')) {
    define('INCOS_API_BRIDGE',true);
    $scriptPath=$_SERVER['SCRIPT_NAME']??'';
    $position=strpos($scriptPath,'/admRepo/');
    $basePath=$position!==false?substr($scriptPath,0,$position):rtrim(str_replace('\\','/',dirname($scriptPath)),'/');
    echo '<script defer src="'.htmlspecialchars($basePath.'/assets/js/api-rest.js',ENT_QUOTES,'UTF-8').'" data-api="'.htmlspecialchars($basePath.'/api/index.php',ENT_QUOTES,'UTF-8').'" data-base="'.htmlspecialchars($basePath,ENT_QUOTES,'UTF-8').'"></script>';
}
