<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\CancelPackagesRequest;
use Swagger\Client\Model\CancelPackagesRequestData;
use Swagger\Client\Model\DeletePackagesRequest;
use Swagger\Client\Model\DeletePackagesRequestData;

/**
 * @desc 删除包裹信息
 * @author Jack.Xu1
 *
 */
class DeletePackages
{
    function index(){
        try {
 
            $url='https://istslb01.eastasia.cloudapp.azure.com/v1.5/api';
            $authorization="TGT-16-95IUOO5EflttkMNeT2p7bMxhBeRyiErVFYWt1byThbd0HKAjje-qapassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new DeletePackagesRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('wilzhan-60');
            $data= new DeletePackagesRequestData();
            $data->setPackageIds(['2551641742246035']);
            $req->setData($data);
            
            
            $rep =$client->execute($req);
            $result=$rep->getData();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

