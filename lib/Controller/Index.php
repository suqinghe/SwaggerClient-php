<?php
namespace Swagger\Client\Controller;


class Index extends AbstractController
{
    function index(){
           $path=dirname(__FILE__).DIRECTORY_SEPARATOR.'*.php';
           $data=[];
           foreach(glob($path) as $file){
               $className=strstr(basename($file),'.php',true);
               if(in_array($className, ['Index','AbstractController'])) continue;
               $fullClassName=__NAMESPACE__.'\\'.$className;
               $reflector = new \ReflectionClass($fullClassName);
               $data[]=[
                   'name'=>$className,
                   'title'=>$this->getTitle($reflector->getDocComment()),
                   'path'=>$reflector->getFileName()
               ];
           }
           $this->show('index.php',['data'=>$data]);
    }
    
    function getTitle($string){
        if(empty($string)) return '';
        preg_match('/@desc(.*)/m', $string,$match);
        if(isset($match[1])){
            return trim($match[1]);
        }else{
            return '';
        }
    }
}

