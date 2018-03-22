<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use Swagger\Client\ApiException;
use Swagger\Client\Model\AddConsignPreferenceRequest;
use Swagger\Client\Model\AddConsignPreferenceRequestData;
use Swagger\Client\Model\PickupAddressRequest;

/**
 * @desc 新增交运偏好
 * @author Jack.Xu1
 *
 */
class AddConsignPreference extends AbstractController
{
    function index(){
        try {
            $url='https://sandbox.edisebay.com/v1/api';
            $authorization="Bearer TGT-16-ibrFue4aM0rdqQGAxRteMa9x2NdOP9Jd1MzNA2G4dMyGrST1Yc-sbpassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new AddConsignPreferenceRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('22');
            $data=new AddConsignPreferenceRequestData();
            $data->setType(0); //上门揽收
            $data->setPickupTime(1); //揽收时间段:1 - 14:00-16:00; 2 - 16:00-18:00;当交运方式为上门揽收时必填
            $data->setName('test Name'.time());
            $pickup_address=new PickupAddressRequest();
            $pickup_address->setStreet1('No. 17, 108 Boxing Road, Pudong 401');
            $pickup_address->setName('test Name'.time());
            $pickup_address->setProvince('310000');//上海
            $pickup_address->setCity('310100');     //上海
            $pickup_address->setDistrict('310115'); //浦东
            $pickup_address->setMobile('13300001111');
            $pickup_address->setCountryCode('CN');
            $pickup_address->setContact('jackxu');
            $pickup_address->setPostcode('20000');
            $data->setPickupAddress($pickup_address);
            $req->setData($data);
            $rep =$client->addConsignPreference($req);
            
            $result=$rep->getData()->getConsignPreferenceId();
            dump($result);
            
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

