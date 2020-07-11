# Yeepay\Yop\Sdk\MerchantService

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**merOutInvokeSendMerSmsNotify**](MerchantService.md#merOutInvokeSendMerSmsNotify) | **POST** /rest/v1.0/merchantService/mer-out-invoke/send-mer-sms-notify | 子商户入网一发送短验
[**merProductInfoMerProductFeeUpdateForO2o**](MerchantService.md#merProductInfoMerProductFeeUpdateForO2o) | **POST** /rest/v1.0/merchantService/mer-product-info/mer-product-fee-update-for-o2o | 子商户费率修改接口


# **merOutInvokeSendMerSmsNotify**
MerOutInvokeSendMerSmsNotifyResponse merOutInvokeSendMerSmsNotify(MerOutInvokeSendMerSmsNotifyRequest request)

子商户入网一发送短验

<p>给子商户发短验，5分钟内有效，用于修改结算银行卡用户确认</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MerchantService\MerchantServiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MerchantService\Model\MerOutInvokeSendMerSmsNotifyRequest();
$request->setSourceType("sourceType_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merOutInvokeSendMerSmsNotify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerchantServiceClient->merOutInvokeSendMerSmsNotify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sourceType** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MerchantService\Model\RespBaseDto**](../Model/RespBaseDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merProductInfoMerProductFeeUpdateForO2o**
MerProductInfoMerProductFeeUpdateForO2oResponse merProductInfoMerProductFeeUpdateForO2o(MerProductInfoMerProductFeeUpdateForO2oRequest request)

子商户费率修改接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MerchantService\MerchantServiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MerchantService\Model\MerProductInfoMerProductFeeUpdateForO2oRequest();
$request->setPayProductMap("payProductMap_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merProductInfoMerProductFeeUpdateForO2o($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerchantServiceClient->merProductInfoMerProductFeeUpdateForO2o: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payProductMap** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MerchantService\Model\MerRespBaseDto**](../Model/MerRespBaseDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

