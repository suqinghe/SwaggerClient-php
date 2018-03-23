<?php
ini_set("display_errors",1);
ini_set("error_reporting",E_ALL);
ini_set("log_errors",1);
ini_set("max_execution_time",300);
ini_set("memory_limit",'512M');
ini_set("error_log",__DIR__."/error.log");
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('Asia/Shanghai');

require './vendor/autoload.php';


function dump($var, $echo=true, $label=null, $strict=true) {
    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return null;
    }else
        return $output;
}

if(!defined('DS')) define('DS',DIRECTORY_SEPARATOR );
if(!defined('ROOT')) define('ROOT', dirname(__FILE__));
if(!defined('VIEW_DIR')) define('VIEW_DIR', ROOT.DS.'lib'.DS.'Template'.DS);

spl_autoload_register(function ($class)
{
    
    $prefix = 'Swagger\\Client';
    
    $base_dir =  './lib/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    
    $relative_class = substr($class, $len);
    
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
    
    if (file_exists($file)) {
        require $file;
    }else{
        throw new Exception($class.' not find.');
        exit;
    }
});
$pathInfo="";
if(isset($_SERVER['PATH_INFO']) && !empty($_SERVER['PATH_INFO'])){
    $pathInfo=explode('/',trim($_SERVER['PATH_INFO'],'/'));
}elseif(isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])){
	$pathInfo=explode('/',trim(str_replace('/index.php','',$_SERVER['REQUEST_URI']),'/'));
}
if($pathInfo && is_array($pathInfo) && count($pathInfo)>0){
    if(count($pathInfo)==1){
        $controller=trim($pathInfo[0]);
        $action='index';
    }elseif(count($pathInfo)==2){
        $controller=ucfirst(trim($pathInfo[0]));
        $action=trim($pathInfo[1]);
    }
}else{
    $controller='Index';
    $action=trim('index');
}




if(isset($_GET['a'])){
    $action=strtolower(trim($_GET['a']));
}
if(isset($_GET['c'])){
    $controller=ucfirst(trim($_GET['c']));
}
$className='Swagger\\Client\\Controller'.'\\'.$controller;

try {
    class_exists($className);
} catch (Exception $e) {
    $className='Swagger\\Client\\Controller\\Index';
}
$obj=new  $className();
$obj->$action();

