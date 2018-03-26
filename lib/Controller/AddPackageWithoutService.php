<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\AddPackageRequest;
use Swagger\Client\Model\PackageInfoRequest;
use Swagger\Client\Model\ShipToAddressRequest;
use Swagger\Client\Model\ItemRequest;
use Swagger\Client\Model\SkuRequest;
use Swagger\Client\Model\AddPackageWithoutServiceRequest;
use Swagger\Client\Model\PackageInfoWithoutServiceRequest;

/**
 * @desc 无指定物流服务上传包裹
 * @author Jack.Xu1
 *
 */
class AddPackageWithoutService
{
    function index(){
        try {
 
            $url='https://sandbox.edisebay.com/v1/api';
            $authorization="TGT-16-ibrFue4aM0rdqQGAxRteMa9x2NdOP9Jd1MzNA2G4dMyGrST1Yc-sbpassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new AddPackageWithoutServiceRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('22');
            $data=new PackageInfoWithoutServiceRequest();
            $data->setShipFromAddressId('24');
            $data->setPackageWidth(100);
            $data->setPackageWeight(100);
            $data->setPackageLength(100);
            $data->setPackageHeight(100);
            $data->setConsignPreferenceId('14');
            $ship_to_address=new ShipToAddressRequest();
            $ship_to_address->setStreet1('No. 17, 108 Boxing Road, Pudong 401');
            $ship_to_address->setProvince('310000');//上海
            $ship_to_address->setCity('310100');     //上海
            $ship_to_address->setDistrict('310115'); //浦东
            $ship_to_address->setMobile('13300001111');
            $ship_to_address->setCountryCode('CN');
            $ship_to_address->setCountryName('China');
            $ship_to_address->setContact('jackxu');
            $ship_to_address->setPostcode('20000');
            $data->setShipToAddress($ship_to_address);
            $item_list=new ItemRequest();
            $item_list->setItemId('1234');
            $item_list->setTransactionId('1234');//
            $item_list->setOrderLineItem('1234');
            $item_list->setSoldQty(1);
            $item_list->setSoldPrice(1);
            $item_list->setSoldDate('2017-10-12T08:08:04+0800');
            $item_list->setPostedQty(1);
            $item_list->setPaymentDate('2017-10-12T08:08:04+0800');
            $item_list->setOrderLineItem(1);
            $item_list->setBuyerId(1);
            $data->setItemList([$item_list]);
            $req->setData($data);
            
            $rep =$client->execute($req);
            
            $result=$rep->getData();
            dump($result);
            
            
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

