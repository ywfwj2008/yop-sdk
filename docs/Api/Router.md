# Yeepay\Yop\Sdk\Router

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**modifyPayProductInfo**](Router.md#modifyPayProductInfo) | **POST** /rest/v1.0/router/modify/pay-product-info | 子商户入网一修改产品
[**openPayAsyncReportConfig**](Router.md#openPayAsyncReportConfig) | **POST** /rest/v1.0/router/open-pay-async-report/config | 统一公众号配置
[**openPayAsyncReportReport**](Router.md#openPayAsyncReportReport) | **POST** /rest/v1.0/router/open-pay-async-report/report | 聚合报备——报备服务
[**openPayReportQuery**](Router.md#openPayReportQuery) | **POST** /rest/v1.0/router/open-pay-report/query | 聚合报备一一报备查询
[**queryPayProductInfo**](Router.md#queryPayProductInfo) | **POST** /rest/v1.0/router/query/pay-product-info | 子商户入网一开通产品查询


# **modifyPayProductInfo**
ModifyPayProductInfoResponse modifyPayProductInfo(ModifyPayProductInfoRequest request)

子商户入网一修改产品

<p>为子商户修改开通支付产品及修改产品费率</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Router\RouterClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Router\Model\ModifyPayProductInfoRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setPayProductInfo("payProductInfo_example");
$request->setWithdrawProductMap("withdrawProductMap_example");
$request->setSmsCode("smsCode_example");

try {
    $response = $api_client->modifyPayProductInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling RouterClient->modifyPayProductInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **payProductInfo** | **string**|  | [optional]
 **withdrawProductMap** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Router\Model\MerchantUpdatePayProductRespDTO**](../Model/MerchantUpdatePayProductRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **openPayAsyncReportConfig**
OpenPayAsyncReportConfigResponse openPayAsyncReportConfig(OpenPayAsyncReportConfigRequest request)

统一公众号配置

<p>配置公众号信息，配置成功后方可使用公众号支付</p> <p>生活号报备后即可使用，不用调用本接口</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Router\RouterClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Router\Model\OpenPayAsyncReportConfigRequest();
$request->setMerchantNo("merchantNo_example");
$request->setAppId("appId_example");
$request->setTradeAuthorizationDirectories("tradeAuthorizationDirectories_example");
$request->setWxpMerAppId("wxpMerAppId_example");
$request->setSenceType("senceType_example");
$request->setCallBackUrl("callBackUrl_example");
$request->setChannelNo("channelNo_example");
$request->setPromotionTypeEnum("promotionTypeEnum_example");
$request->setChannelIds(array("channelIds_example"));

try {
    $response = $api_client->openPayAsyncReportConfig($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling RouterClient->openPayAsyncReportConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **tradeAuthorizationDirectories** | **string**|  | [optional]
 **wxpMerAppId** | **string**|  | [optional]
 **senceType** | **string**|  | [optional]
 **callBackUrl** | **string**|  | [optional]
 **channelNo** | **string**|  | [optional]
 **promotionTypeEnum** | **string**|  | [optional]
 **channelIds** | [**string[]**](../Model/string.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Router\Model\ReportConfigRespDTO**](../Model/ReportConfigRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **openPayAsyncReportReport**
OpenPayAsyncReportReportResponse openPayAsyncReportReport(OpenPayAsyncReportReportRequest request)

聚合报备——报备服务

<p>本接口用于子商户在微信/支付宝报备，审核通过后报备开通商户扫码和用户扫码。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Router\RouterClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Router\Model\OpenPayAsyncReportReportRequest();
$request->setMerchantNo("merchantNo_example");
$request->setChannelNo("channelNo_example");
$request->setCallBackUrl("callBackUrl_example");
$request->setChannelCode("channelCode_example");
$request->setMerchantName("merchantName_example");
$request->setReportMerchantName("reportMerchantName_example");
$request->setReportMerchantAlias("reportMerchantAlias_example");
$request->setReportMerchantComment("reportMerchantComment_example");
$request->setServiceTel("serviceTel_example");
$request->setContactName("contactName_example");
$request->setContactPhone("contactPhone_example");
$request->setContactMobile("contactMobile_example");
$request->setContactEmail("contactEmail_example");
$request->setInstitutionCode("institutionCode_example");
$request->setMerchantAddress("merchantAddress_example");
$request->setMerchantProvince("merchantProvince_example");
$request->setMerchantCity("merchantCity_example");
$request->setMerchantDistrict("merchantDistrict_example");
$request->setMerchantLicenseNo("merchantLicenseNo_example");
$request->setCorporateIdCardNo("corporateIdCardNo_example");
$request->setContactType("contactType_example");
$request->setReportInfosJsonStr("reportInfosJsonStr_example");
$request->setReportFeeType("reportFeeType_example");
$request->setPromotionType(array("promotionType_example"));

try {
    $response = $api_client->openPayAsyncReportReport($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling RouterClient->openPayAsyncReportReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **channelNo** | **string**|  | [optional]
 **callBackUrl** | **string**|  | [optional]
 **channelCode** | **string**|  | [optional]
 **merchantName** | **string**|  | [optional]
 **reportMerchantName** | **string**|  | [optional]
 **reportMerchantAlias** | **string**|  | [optional]
 **reportMerchantComment** | **string**|  | [optional]
 **serviceTel** | **string**|  | [optional]
 **contactName** | **string**|  | [optional]
 **contactPhone** | **string**|  | [optional]
 **contactMobile** | **string**|  | [optional]
 **contactEmail** | **string**|  | [optional]
 **institutionCode** | **string**|  | [optional]
 **merchantAddress** | **string**|  | [optional]
 **merchantProvince** | **string**|  | [optional]
 **merchantCity** | **string**|  | [optional]
 **merchantDistrict** | **string**|  | [optional]
 **merchantLicenseNo** | **string**|  | [optional]
 **corporateIdCardNo** | **string**|  | [optional]
 **contactType** | **string**|  | [optional]
 **reportInfosJsonStr** | **string**|  | [optional]
 **reportFeeType** | **string**|  | [optional]
 **promotionType** | [**string[]**](../Model/string.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Router\Model\PrepareRespDto**](../Model/PrepareRespDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **openPayReportQuery**
OpenPayReportQueryResponse openPayReportQuery(OpenPayReportQueryRequest request)

聚合报备一一报备查询

<p>用于根据商户号批量查询报备记录，查询以场景为维度，例如查询某个商户所有用户扫码的报备情况（含微信和支付宝以及所有其他）</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Router\RouterClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Router\Model\OpenPayReportQueryRequest();
$request->setMerchantNo(array("merchantNo_example"));
$request->setSceneType(array("sceneType_example"));
$request->setReportId("reportId_example");

try {
    $response = $api_client->openPayReportQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling RouterClient->openPayReportQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | [**string[]**](../Model/string.md)|  | [optional]
 **sceneType** | [**string[]**](../Model/string.md)|  | [optional]
 **reportId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Router\Model\PrepareQueryRespDTO**](../Model/PrepareQueryRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryPayProductInfo**
QueryPayProductInfoResponse queryPayProductInfo(QueryPayProductInfoRequest request)

子商户入网一开通产品查询

<p>子商户入网一一子商户开通支付产品查询</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Router\RouterClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Router\Model\QueryPayProductInfoRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->queryPayProductInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling RouterClient->queryPayProductInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Router\Model\MerchantPayProductRespDTO**](../Model/MerchantPayProductRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

