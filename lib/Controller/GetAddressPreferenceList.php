<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\OpenApiApi;
use Swagger\Client\Model\GetAddressPreferenceListRequest;
use Swagger\Client\Model\GetAddressPreferenceListRequestData;
use function GuzzleHttp\json_decode;

/**
 * @desc 获取地址信息列表
 * @author Jack.Xu1
 *
 */
class GetAddressPreferenceList extends AbstractController
{
    function index(){
        try {
            $token=$this->getAccessToken(false);
            $client = new OpenApiApi(); 
            $req= new GetAddressPreferenceListRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('22');
            $data=new GetAddressPreferenceListRequestData();
            $data->setPageSize(50);
            $data->setPageNumber(1);
            $req->setData($data);
            $rep =$client->getAddressPreferenceList($token,$req);
            $result=$rep->getData()->getAddressList();
            dump($result);
        } catch (\Exception $e) {
            $this->getMessage($e);
        }
    }
    

}

