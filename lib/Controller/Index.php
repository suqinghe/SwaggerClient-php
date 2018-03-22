<?php
namespace Swagger\Client\Controller;

use Swagger\Client\Api\OpenApiApi;

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
    
    function getToken (){
        $api=new OpenApiApi();
        $authorization="Basic ".base64_encode('56368199:b5b4acbb5b204d84b5a5f44442c8f4805636');
        $accessToken=$api->fetchToken($authorization);
        dump($accessToken);
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

