<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\GetDropoffSiteListRequestData;
use Swagger\Client\Model\GetDropoffSiteListRequest;
use Swagger\Client\Model\GetServiceListRequest;
use Swagger\Client\Model\GetServiceListRequestRequestData;

/**
 * @desc 获取物流服务列表
 * @author Jack.Xu1
 *
 */
class GetServiceList
{
    function index(){
        try {
 
            $url='https://sandbox.edisebay.com/v1/api';
            $authorization="TGT-16-ibrFue4aM0rdqQGAxRteMa9x2NdOP9Jd1MzNA2G4dMyGrST1Yc-sbpassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new GetServiceListRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('22');
            $data=new GetServiceListRequestRequestData();
            $data->setPageSize(50);
            $data->setPageNumber(1);
            $req->setData($data);
            $rep =$client->execute($req);
            $result=$rep->getData()->getServiceList();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

