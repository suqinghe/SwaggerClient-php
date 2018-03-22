<?php
namespace Swagger\Client\Controller;

use Swagger\Client\Api\DefaultEbayClient;

/**
 * @desc 登录认证
 * @author Jack.Xu1
 *
 */
class FetchToken
{
    function index(){
        $url='https://sandbox.edisebay.com/v1/api';
        $devId='56368199';
        $secret='b5b4acbb5b204d84b5a5f44442c8f4805636';
        $api=new DefaultEbayClient();
        $accessToken=$api->fetchToken($url,$devId,$secret);
        $authorization =  $accessToken->getToken();
        if($authorization){
            $authorization="Bearer ".$authorization;
        }
        dump($authorization);
    }

}

