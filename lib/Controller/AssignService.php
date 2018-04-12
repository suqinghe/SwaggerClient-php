<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\AssignServiceRequest;
use Swagger\Client\Model\AssignServiceRequestData;

/**
 * @desc 指定包裹物流服务
 * @author Jack.Xu1
 *
 */
class AssignService
{
    function index(){
        try {
 
            $url='https://istslb01.eastasia.cloudapp.azure.com/v1.5/api';
            $authorization="TGT-16-95IUOO5EflttkMNeT2p7bMxhBeRyiErVFYWt1byThbd0HKAjje-qapassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new AssignServiceRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('wilzhan-60');
            $data = new AssignServiceRequestData();
            $data->setServiceId('EBCNUSPN2');
            $data->setPackageId('2545498342031507');
            $req->setData([$data]);
            
            
            $rep =$client->execute($req);
            $result=$rep->getData();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

