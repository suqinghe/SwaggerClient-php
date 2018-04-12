<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\GetHandoverSheetRequest;
use Swagger\Client\Model\GetHandoverSheetRequestData;

/**
 * @desc 获取交接单打印详情
 * @author Jack.Xu1
 *
 */
class GetHandoverSheet
{
    function index(){
        try {
 
            $url='https://istslb01.eastasia.cloudapp.azure.com/v1.5/api';
            $authorization="TGT-16-95IUOO5EflttkMNeT2p7bMxhBeRyiErVFYWt1byThbd0HKAjje-qapassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new GetHandoverSheetRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('wilzhan-60');
            $data= new GetHandoverSheetRequestData();
            $data->setTrackingNumbers(['6bf6e6cf68ac47789a9938fd36efdebe']);
            $req->setData($data);
            
            
            $rep =$client->execute($req);
            $result=$rep->getData();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

