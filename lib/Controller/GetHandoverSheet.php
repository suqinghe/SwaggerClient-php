<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\GetActualCostRequest;
use Swagger\Client\Model\GetActualCostRequestData;
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
 
            $url='https://sandbox.edisebay.com/v1/api';
            $authorization="TGT-16-ibrFue4aM0rdqQGAxRteMa9x2NdOP9Jd1MzNA2G4dMyGrST1Yc-sbpassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new GetHandoverSheetRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('22');
            $data= new GetHandoverSheetRequestData();
            $data->setTrackingNumbers(['1234']);
            $req->setData($data);
            
            
            $rep =$client->execute($req);
            $result=$rep->getData();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

