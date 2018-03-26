<?php
namespace Swagger\Client\Controller;


use Swagger\Client\Api\DefaultEbayClient;
use function GuzzleHttp\json_decode;
use Swagger\Client\ApiException;
use Swagger\Client\Model\ShipToAddressRequest;
use Swagger\Client\Model\ItemRequest;
use Swagger\Client\Model\AddPackageWithoutServiceRequest;
use Swagger\Client\Model\PackageInfoWithoutServiceRequest;
use Swagger\Client\Model\SkuRequest;

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
            
            
            $req = new addPackageWithoutServiceRequest();
            $req->setTimestamp(time());
            $req->setMessageId('11');
            $req->setEbayId('22');
            $data = new PackageInfoWithoutServiceRequest();
            $data->setShipFromAddressId('74');
            $data->setPackageWidth(1);
            $data->setPackageWeight(1);
            $data->setPackageLength(1);
            $data->setPackageHeight(1);
            $data->setConsignPreferenceId('14');
            $ship_to_address=new ShipToAddressRequest();
            $ship_to_address->setStreet1('3287 Hillside Street');
            $ship_to_address->setProvince('310000');//上海
            $ship_to_address->setCity('310100');     //上海
            $ship_to_address->setDistrict('310115'); //浦东
            $ship_to_address->setMobile('(310)5057948');
            $ship_to_address->setCountryCode('US');
            $ship_to_address->setCountryName('United States');
            $ship_to_address->setContact('Dan Howard AR');
            $ship_to_address->setPostcode('41016');
            $data->setShipToAddress($ship_to_address);
            $item_list=new ItemRequest();
            $itemid='273125384199';
            $transactionid='12345';
            $orderlineitem=$itemid."-".$transactionid;
            $item_list->setItemId($itemid);
            $item_list->setTransactionId($transactionid);
            $item_list->setOrderLineItem($orderlineitem);
            $item_list->setSoldQty(1);
            $item_list->setSoldPrice(1);
            $item_list->setSoldDate(date("Y-m-d").'T'.date('H:i:s')."+0800");
            $item_list->setPostedQty(1);
            //'2017-10-12T08:08:04+0800'
            $item_list->setPaymentDate(date("Y-m-d").'T'.date('H:i:s')."+0800");
            $item_list->setBuyerId(22);
            $sku=new SkuRequest();
            $sku->setWeight(1);
            $sku->setPrice(1);
            $sku->setOrigin('CN1');
            $sku->setNameEn('demo1');
            $sku->setNameZh('测试1');
            $sku->setIsLiBattery(false);
            $item_list->setSku($sku);
            $data->setItemList([$item_list]);
            
            $req->setData($data);
//             dump($req->getData());exit;
            $rep =$client->execute($req);
            
            $result=$rep->getData();
            dump($result);
            
            
        } catch (ApiException $e) {
            dump(json_decode($e->getResponseBody(),true));
        }
    }
    

}

