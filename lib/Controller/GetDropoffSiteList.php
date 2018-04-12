<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\GetDropoffSiteListRequestData;
use Swagger\Client\Model\GetDropoffSiteListRequest;

/**
 * @desc 获取自送站点列表
 * @author Jack.Xu1
 *
 */
class GetDropoffSiteList
{
    function index(){
        try {
 
            $url='https://istslb01.eastasia.cloudapp.azure.com/v1.5/api';
            $authorization="TGT-16-95IUOO5EflttkMNeT2p7bMxhBeRyiErVFYWt1byThbd0HKAjje-qapassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new GetDropoffSiteListRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('wilzhan-60');
            $data=new GetDropoffSiteListRequestData();
            $data->setPageSize(50);
            $data->setPageNumber(1);
            $req->setData($data);
            $rep =$client->execute($req);
            $result=$rep->getData()->getDropoffSiteList();
            dump($result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

