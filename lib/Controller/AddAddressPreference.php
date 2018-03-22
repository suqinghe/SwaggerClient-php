<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\OpenApiApi;
use Swagger\Client\Model\GetAddressPreferenceListRequest;
use Swagger\Client\Model\GetAddressPreferenceListRequestData;
use Swagger\Client\Model\AddAddressPreferenceRequest;
use Swagger\Client\Model\AddAddressPreferenceRequestData;

/**
 * @desc 新增地址信息
 * @author Jack.Xu1
 */
class AddAddressPreference extends AbstractController
{
    function index(){
        $token=$this->getAccessToken();
        $client = new OpenApiApi();
        
        $req= new AddAddressPreferenceRequest();
        $req->setTimestamp(time());
        $req->setMessageId('11');
        $req->setEbayId('22');
        $data=new AddAddressPreferenceRequestData();
        $data->setType(0);
        $data->setStreet1('No. 17, 108 Boxing Road, Pudong 401');
        $data->setName('test Name'.time());
        $data->setMobile('13300001111');
        $data->setDistrict('360403'); //浔阳区
        $data->setCountryCode('CN');
        $data->setContact('jackxu');
        $data->setCity('360400');     //九江
        $data->setPostcode('20000');
        $data->setProvince('360000');//江西
        $req->setData($data);
        $rep =$client->addAddressPreference($token,$req);
        dump($rep->getData()->getAddressId());
        
    }
    

}

