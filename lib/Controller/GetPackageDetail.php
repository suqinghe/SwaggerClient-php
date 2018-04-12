<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\GetPackageDetailRequest;
use Swagger\Client\Model\GetPackageDetailRequestData;

/**
 * @desc 获取包裹详情
 * @author Jack.Xu1
 *
 */
class GetPackageDetail
{
    function index(){
        try {
 
            $url='https://istslb01.eastasia.cloudapp.azure.com/v1.5/api';
            $authorization="TGT-16-95IUOO5EflttkMNeT2p7bMxhBeRyiErVFYWt1byThbd0HKAjje-qapassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new GetPackageDetailRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('wilzhan-60');
            $data= new GetPackageDetailRequestData();
            $data->setPackageId('2642150011895948');
            $req->setData($data);
            
            $rep =$client->execute($req);
            $result=$rep->getData();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

