<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use Swagger\Client\Model\GetAddressPreferenceListRequest;
use Swagger\Client\Model\GetAddressPreferenceListRequestData;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;

/**
 * @desc 获取地址信息列表
 * @author Jack.Xu1
 *
 */
class GetAddressPreferenceList
{
    function index(){
        try {
 
            $url='https://sandbox.edisebay.com/v1/api';
            $authorization="TGT-16-ibrFue4aM0rdqQGAxRteMa9x2NdOP9Jd1MzNA2G4dMyGrST1Yc-sbpassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new GetAddressPreferenceListRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('22');
            $data=new GetAddressPreferenceListRequestData();
            $data->setPageSize(50);
            $data->setPageNumber(1);
            $req->setData($data);
            $rep =$client->execute($req);
            $result=$rep->getData()->getAddressList();
            dump($result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

