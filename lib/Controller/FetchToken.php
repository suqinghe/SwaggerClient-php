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
        $url='https://istslb01.eastasia.cloudapp.azure.com/v1.5/api';
        $devId='abcd';
        $secret='123456';
        $client=new DefaultEbayClient();
        $accessToken=$client->fetchToken($url,$devId,$secret);
        $authorization =  $accessToken->getToken();
        dump($authorization);
    }
//     function index(){
//         $url='https://api.edisebay.com/v1/api';
//         $devId='56368199';
//         $secret='b5b4acbb5b204d84b5a5f44442c8f4805636';
//         $client=new DefaultEbayClient();
//         $accessToken=$client->fetchToken($url,$devId,$secret);
//         $authorization =  $accessToken->getToken();
//         dump($authorization);
//     }

}

