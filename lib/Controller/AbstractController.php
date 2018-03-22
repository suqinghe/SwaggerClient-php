<?php
namespace Swagger\Client\Controller;

use Swagger\Client\Api\OpenApiApi;

class AbstractController
{
    function fetchToken(){
        $api=new OpenApiApi();
        $authorization="Basic ".base64_encode('56368199:b5b4acbb5b204d84b5a5f44442c8f4805636');
        $accessToken=$api->fetchToken($authorization);
        return $accessToken->getToken();
    }
    
    function getAccessToken($flag=true){
        session_start();
        if(!empty($_SESSION['token'] && $flag)
            && !empty($_SESSION['expire'])
            && 31536000> time() - $_SESSION['expire']
            ){
                return 'Bearer '.$_SESSION['token'];
        }else{
            $token=$this->fetchToken();
            $_SESSION['token']=$token;
            $_SESSION['expire']=time();
            return 'Bearer '.$token;
        }
    }
    
    function getMessage(\Exception $e){
        $message=$e->getMessage();
        echo $message;
        if(strpos($message,'{')!==false && strpos($message,'}')!==false){
            $jsonString=trim(strstr($message,'{'));
            $error = json_decode($jsonString, true);
            dump($error);
        }
    }
    
    function show($template,$vars=array()){
        if(!empty($vars) && is_array($vars))  extract( $vars, EXTR_OVERWRITE);
        extract(get_object_vars($this), EXTR_OVERWRITE);
        include (VIEW_DIR.$template);
    }
    
    

    

}

