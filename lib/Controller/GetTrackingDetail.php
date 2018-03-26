<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\GetTrackingDetailRequest;
use Swagger\Client\Model\GetTrackingDetailRequestData;

/**
 * @desc 获取包裹物流跟踪信息
 * @author Jack.Xu1
 *
 */
class GetTrackingDetail
{
    function index(){
        try {
 
            $url='https://sandbox.edisebay.com/v1/api';
            $authorization="TGT-16-ibrFue4aM0rdqQGAxRteMa9x2NdOP9Jd1MzNA2G4dMyGrST1Yc-sbpassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new GetTrackingDetailRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('22');
            $data= new GetTrackingDetailRequestData();
            $data->setTrackingNumber('6bf6e6cf68ac47789a9938fd36efdebe');
            $req->setData($data);
            
            $rep =$client->execute($req);
            $result=$rep->getData();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

