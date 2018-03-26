<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\GetItemPackageIdRequest;
use Swagger\Client\Model\GetItemPackageIdRequestData;

/**
 * @desc 查询物品包裹ID
 * @author Jack.Xu1
 *
 */
class GetItemPackageId
{
    function index(){
        try {
 
            $url='https://sandbox.edisebay.com/v1/api';
            $authorization="TGT-16-ibrFue4aM0rdqQGAxRteMa9x2NdOP9Jd1MzNA2G4dMyGrST1Yc-sbpassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new GetItemPackageIdRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('22');
            $data= new GetItemPackageIdRequestData();
            $data->setItemId('1234567');
            $data->setTransactionId('67890');
            $req->setData($data);
            
            $rep =$client->execute($req);
            $result=$rep->getData();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

