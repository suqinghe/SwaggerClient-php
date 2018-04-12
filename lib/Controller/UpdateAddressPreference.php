<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\UpdateAddressPreferenceRequest;
use Swagger\Client\Model\UpdateAddressPreferenceRequestData;

/**
 * @desc 更新地址信息
 * @author Jack.Xu1
 *
 */
class UpdateAddressPreference
{
    function index(){
        try {
 
            $url='https://istslb01.eastasia.cloudapp.azure.com/v1.5/api';
            $authorization="TGT-16-95IUOO5EflttkMNeT2p7bMxhBeRyiErVFYWt1byThbd0HKAjje-qapassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new UpdateAddressPreferenceRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('wilzhan-60');
            $data=new UpdateAddressPreferenceRequestData();
            $data->setStreet1('No. 17, 108 Boxing Road, Pudong 401');
            $data->setName('test Name'.time());
            $data->setMobile('13300001111');
            $data->setDistrict('360403'); //浔阳区
            $data->setCountryCode('CN');
            $data->setContact('jackxu');
            $data->setCity('360400');     //九江
            $data->setPostcode('20000');
            $data->setProvince('360000');//江西
            $data->setAddressId(24);
            $req->setData($data);
            
            $rep =$client->execute($req);
            $result=$rep->getData()->getNewAddressId();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

