<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\GetConsignPreferenceListRequest;
use Swagger\Client\Model\GetConsignPreferenceListRequestData;

/**
 * @desc 获取交运偏好列表
 * @author Jack.Xu1
 *
 */
class GetConsignPreferenceList
{
    function index(){
        try {
 
            $url='https://istslb01.eastasia.cloudapp.azure.com/v1.5/api';
            $authorization="TGT-16-95IUOO5EflttkMNeT2p7bMxhBeRyiErVFYWt1byThbd0HKAjje-qapassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new GetConsignPreferenceListRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('wilzhan-60');
            $data=new GetConsignPreferenceListRequestData();
            $data->setPageSize(50);
            $data->setPageNumber(1);
            $req->setData($data);
            $rep =$client->execute($req);
            /**
             * 
             * @var \Swagger\Client\Model\GetConsignPreferenceListResponsesData $result
             */
            $result=$rep->getData()->getConsignPreferenceList();
            dump($result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

