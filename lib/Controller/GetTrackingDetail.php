<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\GetActualCostRequest;
use Swagger\Client\Model\GetActualCostRequestData;
use Swagger\Client\Model\GetHandoverSheetRequest;
use Swagger\Client\Model\GetHandoverSheetRequestData;
use Swagger\Client\Model\GetItemPackageIdRequest;
use Swagger\Client\Model\GetItemPackageIdRequestData;
use Swagger\Client\Model\GetLabelRequest;
use Swagger\Client\Model\GetLabelRequestData;
use Swagger\Client\Model\GetPackageDetailRequest;
use Swagger\Client\Model\GetPackageDetailRequestData;
use Swagger\Client\Model\GetPackageStatusRequest;
use Swagger\Client\Model\GetPackageStatusRequestData;
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
            $data->setTrackingNumber('123');
            $req->setData($data);
            
            $rep =$client->execute($req);
            $result=$rep->getData();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

