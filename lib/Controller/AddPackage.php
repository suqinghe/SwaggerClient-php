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

/**
 * @desc 指定物流服务上传包裹
 * @author Jack.Xu1
 *
 */
class AddPackage
{
    function index(){
        try {
 
            $url='https://istslb01.eastasia.cloudapp.azure.com/v1.5/api';
            $authorization="TGT-16-95IUOO5EflttkMNeT2p7bMxhBeRyiErVFYWt1byThbd0HKAjje-qapassport.eis.cn";
            $client = new DefaultEbayClient($url,$authorization);
            
            $req= new AddPackageRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('wilzhan-60');
            $data=new PackageInfoRequest();
            $ship_to_address=new ShipToAddressRequest();
            $ship_to_address->setStreet1('No. 17, 108 Boxing Road, Pudong 401');
            $ship_to_address->setProvince('310000');//上海
            $ship_to_address->setCity('310100');     //上海
            $ship_to_address->setDistrict('310115'); //浦东
            $ship_to_address->setMobile('13300001111');
            $ship_to_address->setCountryCode('US'); //US、GB、DE
            $ship_to_address->setCountryName('China');
            $ship_to_address->setContact('jackxu');
            $ship_to_address->setPostcode('20000');
            $data->setShipToAddress($ship_to_address);
            $item_list=new ItemRequest();
            $itemid='112275864244';
            $transactionid='1735911797001';
            $orderlineitem=$itemid."-".$transactionid;
            $item_list->setItemId($itemid);
            $item_list->setTransactionId($transactionid);
            $item_list->setOrderLineItem($orderlineitem);
            $item_list->setSoldQty(1);
            $item_list->setSoldPrice(1);
            $item_list->setSoldDate('2018-04-12T08:08:04+0800');
            $item_list->setPostedQty(1);
            $item_list->setPaymentDate('2018-04-12T08:08:04+0800');
            $item_list->setBuyerId(1);
            $sku=new SkuRequest();
            $sku->setWeight(1);
            $sku->setPrice(1);
            $sku->setOrigin('CN');
            $sku->setNameEn('demo');
            $sku->setNameZh('测试');
           // $sku->setIsLiBattery(false);
            $sku->setLiBatteryType(0);
            $item_list->setSku($sku);
            
            $data->setItemList([$item_list]);
            
            $data->setShipFromAddressId('80003064');
            $data->setServiceId('ES');
            $data->setPackageWidth(66);
            $data->setPackageWeight(66);
            $data->setPackageLength(66);
            $data->setPackageHeight(66);
            $data->setConsignPreferenceId('324');
            $req->setData($data);
            
            $rep =$client->execute($req);
            
            //2642130466635916
            $result=$rep->getData()->getPackageId();
            dump($result);
            
            
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

