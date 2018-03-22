<?php
namespace Swagger\Client\Controller;

use Swagger\Client\ApiException;

class AbstractController
{
    
    function getMessage(ApiException $e){
        dump(json_decode($e->getResponseBody(),true));
    }
    
    function show($template,$vars=array()){
        if(!empty($vars) && is_array($vars))  extract( $vars, EXTR_OVERWRITE);
        extract(get_object_vars($this), EXTR_OVERWRITE);
        include (VIEW_DIR.$template);
    }
    
    

    

}

