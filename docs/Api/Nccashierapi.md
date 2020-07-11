# Yeepay\Yop\Sdk\Nccashierapi

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiOrderpay**](Nccashierapi.md#apiOrderpay) | **POST** /rest/v1.0/nccashierapi/api/orderpay | API收银台聚合下单支付一体化
[**apiPay**](Nccashierapi.md#apiPay) | **POST** /rest/v1.0/nccashierapi/api/pay | 聚合API收银台


# **apiOrderpay**
ApiOrderpayResponse apiOrderpay(ApiOrderpayRequest request)

API收银台聚合下单支付一体化



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Nccashierapi\NccashierapiClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Nccashierapi\Model\ApiOrderpayRequest();
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount("orderAmount_example");
$request->setTimeoutExpress("timeoutExpress_example");
$request->setTimeoutExpressType("timeoutExpressType_example");
$request->setRequestDate("requestDate_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setGoodsParamExt("goodsParamExt_example");
$request->setIndustryParamExt("industryParamExt_example");
$request->setRiskParamExt("riskParamExt_example");
$request->setMemo("memo_example");
$request->setFundProcessType("fundProcessType_example");
$request->setHmac("hmac_example");
$request->setDivideDetail("divideDetail_example");
$request->setCsUrl("csUrl_example");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setTimeoutNotifyUrl("timeoutNotifyUrl_example");
$request->setPayTool("payTool_example");
$request->setPayType("payType_example");
$request->setAppId("appId_example");
$request->setOpenId("openId_example");
$request->setMerchantTerminalId("merchantTerminalId_example");
$request->setPayEmpowerNo("payEmpowerNo_example");
$request->setMerchantStoreNo("merchantStoreNo_example");
$request->setUserIp("userIp_example");
$request->setExtParamMap("extParamMap_example");

try {
    $response = $api_client->apiOrderpay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NccashierapiClient->apiOrderpay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **timeoutExpress** | **string**|  | [optional]
 **timeoutExpressType** | **string**|  | [optional]
 **requestDate** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **goodsParamExt** | **string**|  | [optional]
 **industryParamExt** | **string**|  | [optional]
 **riskParamExt** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **timeoutNotifyUrl** | **string**|  | [optional]
 **payTool** | **string**|  | [optional]
 **payType** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **openId** | **string**|  | [optional]
 **merchantTerminalId** | **string**|  | [optional]
 **payEmpowerNo** | **string**|  | [optional]
 **merchantStoreNo** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **extParamMap** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\UnifiedAPICashierResponseDTO**](../Model/UnifiedAPICashierResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **apiPay**
ApiPayResponse apiPay(ApiPayRequest request)

聚合API收银台

<p>API收银台统一支付接口，支持主扫支付(微信/支付宝/京东)、被扫支付(微信/支付宝/京东)、微信公众号、小程序支付、微信SDK支付</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Nccashierapi\NccashierapiClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Nccashierapi\Model\ApiPayRequest();
$request->setPayTool("payTool_example");
$request->setPayType("payType_example");
$request->setToken("token_example");
$request->setAppId("appId_example");
$request->setOpenId("openId_example");
$request->setVersion("version_example");
$request->setPayEmpowerNo("payEmpowerNo_example");
$request->setMerchantTerminalId("merchantTerminalId_example");
$request->setMerchantStoreNo("merchantStoreNo_example");
$request->setUserIp("userIp_example");
$request->setExtParamMap("extParamMap_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");

try {
    $response = $api_client->apiPay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NccashierapiClient->apiPay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payTool** | **string**|  | [optional]
 **payType** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **openId** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **payEmpowerNo** | **string**|  | [optional]
 **merchantTerminalId** | **string**|  | [optional]
 **merchantStoreNo** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **extParamMap** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\UnifiedAPICashierResponseDTO**](../Model/UnifiedAPICashierResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

