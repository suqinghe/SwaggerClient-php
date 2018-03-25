<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\GetServiceListRequest;
use Swagger\Client\Model\GetServiceListRequestRequestData;
use Swagger\Client\Model\UpdateAddressPreferenceRequest;
use Swagger\Client\Model\UpdateAddressPreferenceRequestData;
use Swagger\Client\Model\UpdateConsignPreferenceRequest;
use Swagger\Client\Model\UpdateConsignPreferenceRequestData;
use Swagger\Client\Model\PickupAddressRequest;

/**
 * @desc 更新交运偏好
 * @author Jack.Xu1
 *
 */
class UpdateConsignPreference
{
    function index(){
        try {
 
            $url='https://sandbox.edisebay.com/v1/api';
            $authorization="TGT-16-ibrFue4aM0rdqQGAxRteMa9x2NdOP9Jd1MzNA2G4dMyGrST1Yc-sbpassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new updateConsignPreferenceRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('22');
            $data=new UpdateConsignPreferenceRequestData();
            $data->setType(0);
            $data->setPickupTime(2);
            $data->setName('name_'.time());
            $data->setConsignPreferenceId(11);
            $pickup_address=new PickupAddressRequest();
            $pickup_address->setStreet1('No. 17, 108 Boxing Road, Pudong 401');
            $pickup_address->setStreet2('No. 17, 108 Boxing Road, Pudong 402');
            $pickup_address->setStreet3('No. 17, 108 Boxing Road, Pudong 403');
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
            
            
            $rep =$client->execute($req);
            $result=$rep->getStatus();
            dump( $result);
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

