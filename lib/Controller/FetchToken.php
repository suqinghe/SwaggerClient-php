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


}

