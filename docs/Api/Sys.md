# Yeepay\Yop\Sdk\Sys

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**merchantQuaInfoSupplement**](Sys.md#merchantQuaInfoSupplement) | **POST** /rest/v1.0/sys/merchant/qua-info-supplement | 子商户入网——资质信息补充
[**merchantQualUpload**](Sys.md#merchantQualUpload) | **POST** /yos/v1.0/sys/merchant/qual/upload | 子商户入网资质文件上传
[**merchantQueryBankCardBinInfo**](Sys.md#merchantQueryBankCardBinInfo) | **POST** /rest/v1.0/sys/merchant/query-bank-card-bin-info | 查询银行卡卡bin信息
[**subcompanyTradeOrder**](Sys.md#subcompanyTradeOrder) | **POST** /rest/v1.0/sys/subcompany/trade/order | (子公司)订单处理器——创建订单
[**subcompanyTradeOrderquery**](Sys.md#subcompanyTradeOrderquery) | **POST** /rest/v1.0/sys/subcompany/trade/orderquery | (子公司)订单处理器——查询订单
[**subcompanyTradeSettlementsquery**](Sys.md#subcompanyTradeSettlementsquery) | **POST** /rest/v1.0/sys/subcompany/trade/settlementsquery | (子公司)订单处理器——结算查询
[**tradeDivideback**](Sys.md#tradeDivideback) | **POST** /rest/v1.0/sys/trade/divideback | 订单处理器-分账退回
[**tradeEnddivide**](Sys.md#tradeEnddivide) | **POST** /rest/v1.0/sys/trade/enddivide | 订单处理器-完结分账
[**tradeMultiorderquery**](Sys.md#tradeMultiorderquery) | **POST** /rest/v1.0/sys/trade/multiorderquery | 订单处理器——批量查询订单
[**tradeOrder**](Sys.md#tradeOrder) | **POST** /rest/v1.0/sys/trade/order | 订单处理器——创建订单
[**tradeOrderclose**](Sys.md#tradeOrderclose) | **POST** /rest/v1.0/sys/trade/orderclose | 订单处理器——关闭订单
[**tradeOrderquery**](Sys.md#tradeOrderquery) | **POST** /rest/v1.0/sys/trade/orderquery | 订单处理器——查询订单
[**tradeQuerydivideback**](Sys.md#tradeQuerydivideback) | **POST** /rest/v1.0/sys/trade/querydivideback | 订单处理器-分账退回查询
[**tradeRefund**](Sys.md#tradeRefund) | **POST** /rest/v1.0/sys/trade/refund | 订单处理器——退款请求
[**tradeRefundquery**](Sys.md#tradeRefundquery) | **POST** /rest/v1.0/sys/trade/refundquery | 订单处理器——退款查询
[**tradeSettlementsquery**](Sys.md#tradeSettlementsquery) | **POST** /rest/v1.0/sys/trade/settlementsquery | 订单处理器——结算查询


# **merchantQuaInfoSupplement**
MerchantQuaInfoSupplementResponse merchantQuaInfoSupplement(MerchantQuaInfoSupplementRequest request)

子商户入网——资质信息补充

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\MerchantQuaInfoSupplementRequest();
$request->setFileInfo("fileInfo_example");
$request->setMerNo("merNo_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->merchantQuaInfoSupplement($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->merchantQuaInfoSupplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileInfo** | **string**|  | [optional]
 **merNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\MerRespBaseDto**](../Model/MerRespBaseDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantQualUpload**
MerchantQualUploadResponse merchantQualUpload(MerchantQualUploadRequest request)

子商户入网资质文件上传

<p>子商户入网资质文件上传，程序实现方式请参考，<a href=\" \">文件上传程序实现样例</a ></p > <p>银行卡图片、身份证正反面不能超过1M</p > <p class=\"p1\">营业执照图片 不能超过4M</p > <p class=\"p1\">格式为 JPG（JPEG），BMP，PNG，GIF，TIFF，PDF</p >

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\MerchantQualUploadRequest();
$request->setMerQual(fopen("merQual_example"));
$request->setMerQualOriginalFileName("merQualOriginalFileName_example");
$request->setMerQualFileSize("merQualFileSize_example");
$request->setMerQualMd5("merQualMd5_example");

try {
    $response = $api_client->merchantQualUpload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->merchantQualUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merQual** | **Resource****Resource**|  | [optional]
 **merQualOriginalFileName** | **string**|  | [optional]
 **merQualFileSize** | **string**|  | [optional]
 **merQualMd5** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\MerFileUploadRespDto**](../Model/MerFileUploadRespDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

# **merchantQueryBankCardBinInfo**
MerchantQueryBankCardBinInfoResponse merchantQueryBankCardBinInfo(MerchantQueryBankCardBinInfoRequest request)

查询银行卡卡bin信息

查询银行卡卡bin信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\MerchantQueryBankCardBinInfoRequest();
$request->setBankCardNo("bankCardNo_example");

try {
    $response = $api_client->merchantQueryBankCardBinInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->merchantQueryBankCardBinInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankCardNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\MerBankCardBinRespDto**](../Model/MerBankCardBinRespDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subcompanyTradeOrder**
SubcompanyTradeOrderResponse subcompanyTradeOrder(SubcompanyTradeOrderRequest request)

(子公司)订单处理器——创建订单

子公司调用，创建订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\SubcompanyTradeOrderRequest();
$request->setBizSystemNo("bizSystemNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount("orderAmount_example");
$request->setTimeoutExpress(56);
$request->setTimeoutExpressType("timeoutExpressType_example");
$request->setRequestDate("requestDate_example");
$request->setRedirectUrl("redirectUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setAssureType("assureType_example");
$request->setAssurePeriod("assurePeriod_example");
$request->setGoodsParamExt("goodsParamExt_example");
$request->setPaymentParamExt("paymentParamExt_example");
$request->setMemo("memo_example");
$request->setIndustryParamExt("industryParamExt_example");
$request->setRiskParamExt("riskParamExt_example");
$request->setCsUrl("csUrl_example");
$request->setFundProcessType("fundProcessType_example");
$request->setSettleProcessType("settleProcessType_example");
$request->setDivideDetail("divideDetail_example");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setTimeoutNotifyUrl("timeoutNotifyUrl_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->subcompanyTradeOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->subcompanyTradeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bizSystemNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **timeoutExpress** | **int**|  | [optional]
 **timeoutExpressType** | **string**|  | [optional]
 **requestDate** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **assureType** | **string**|  | [optional]
 **assurePeriod** | **string**|  | [optional]
 **goodsParamExt** | **string**|  | [optional]
 **paymentParamExt** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **industryParamExt** | **string**|  | [optional]
 **riskParamExt** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **settleProcessType** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **timeoutNotifyUrl** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\YopCreateOrderResDTO**](../Model/YopCreateOrderResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subcompanyTradeOrderquery**
SubcompanyTradeOrderqueryResponse subcompanyTradeOrderquery(SubcompanyTradeOrderqueryRequest request)

(子公司)订单处理器——查询订单

子公司使用该接口，调用订单处理器——查询订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\SubcompanyTradeOrderqueryRequest();
$request->setBizSystemNo("bizSystemNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->subcompanyTradeOrderquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->subcompanyTradeOrderquery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bizSystemNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\YopQueryOrderResDTO**](../Model/YopQueryOrderResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subcompanyTradeSettlementsquery**
SubcompanyTradeSettlementsqueryResponse subcompanyTradeSettlementsquery(SubcompanyTradeSettlementsqueryRequest request)

(子公司)订单处理器——结算查询

子公司调用，订单处理器——结算查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\SubcompanyTradeSettlementsqueryRequest();
$request->setStartSettleDate("startSettleDate_example");
$request->setEndSettleDate("endSettleDate_example");
$request->setBizSystemNo("bizSystemNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->subcompanyTradeSettlementsquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->subcompanyTradeSettlementsquery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startSettleDate** | **string**|  | [optional]
 **endSettleDate** | **string**|  | [optional]
 **bizSystemNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\YopQuerySettleRecordResDTO**](../Model/YopQuerySettleRecordResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeDivideback**
TradeDividebackResponse tradeDivideback(TradeDividebackRequest request)

订单处理器-分账退回



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeDividebackRequest();
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideRequestId("divideRequestId_example");
$request->setDivideBackRequestId("divideBackRequestId_example");
$request->setDivideBackDetail("divideBackDetail_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->tradeDivideback($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeDivideback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **divideRequestId** | **string**|  | [optional]
 **divideBackRequestId** | **string**|  | [optional]
 **divideBackDetail** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\YopDivideBackResDTO**](../Model/YopDivideBackResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeEnddivide**
TradeEnddivideResponse tradeEnddivide(TradeEnddivideRequest request)

订单处理器-完结分账

<p>订单处理器-完结分账</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeEnddivideRequest();
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setEndDivideUrl("endDivideUrl_example");
$request->setEndDivideRequestId("endDivideRequestId_example");
$request->setEndDivideDesc("endDivideDesc_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->tradeEnddivide($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeEnddivide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **endDivideUrl** | **string**|  | [optional]
 **endDivideRequestId** | **string**|  | [optional]
 **endDivideDesc** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\YopOrderEndDivideResDTO**](../Model/YopOrderEndDivideResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeMultiorderquery**
TradeMultiorderqueryResponse tradeMultiorderquery(TradeMultiorderqueryRequest request)

订单处理器——批量查询订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeMultiorderqueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setStatus("status_example");
$request->setRequestDateBegin("requestDateBegin_example");
$request->setRequestDateEnd("requestDateEnd_example");
$request->setPageNo("pageNo_example");
$request->setPageSize("pageSize_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->tradeMultiorderquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeMultiorderquery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **requestDateBegin** | **string**|  | [optional]
 **requestDateEnd** | **string**|  | [optional]
 **pageNo** | **string**|  | [optional]
 **pageSize** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\YopBatchQueryOrderResDTO**](../Model/YopBatchQueryOrderResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrder**
TradeOrderResponse tradeOrder(TradeOrderRequest request)

订单处理器——创建订单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount("orderAmount_example");
$request->setTimeoutExpress(56);
$request->setTimeoutExpressType("timeoutExpressType_example");
$request->setRequestDate("requestDate_example");
$request->setRedirectUrl("redirectUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setAssureType("assureType_example");
$request->setAssurePeriod("assurePeriod_example");
$request->setGoodsParamExt("goodsParamExt_example");
$request->setPaymentParamExt("paymentParamExt_example");
$request->setIndustryParamExt("industryParamExt_example");
$request->setRiskParamExt("riskParamExt_example");
$request->setMemo("memo_example");
$request->setFundProcessType("fundProcessType_example");
$request->setHmac("hmac_example");
$request->setDivideDetail("divideDetail_example");
$request->setCsUrl("csUrl_example");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setTimeoutNotifyUrl("timeoutNotifyUrl_example");
$request->setSiSubsidyMerchantAmout("siSubsidyMerchantAmout_example");
$request->setQueryParamsExt("queryParamsExt_example");

try {
    $response = $api_client->tradeOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **timeoutExpress** | **int**|  | [optional]
 **timeoutExpressType** | **string**|  | [optional]
 **requestDate** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **assureType** | **string**|  | [optional]
 **assurePeriod** | **string**|  | [optional]
 **goodsParamExt** | **string**|  | [optional]
 **paymentParamExt** | **string**|  | [optional]
 **industryParamExt** | **string**|  | [optional]
 **riskParamExt** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **timeoutNotifyUrl** | **string**|  | [optional]
 **siSubsidyMerchantAmout** | **string**|  | [optional]
 **queryParamsExt** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\YopCreateOrderResDTO**](../Model/YopCreateOrderResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrderclose**
TradeOrdercloseResponse tradeOrderclose(TradeOrdercloseRequest request)

订单处理器——关闭订单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeOrdercloseRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDescription("description_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->tradeOrderclose($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeOrderclose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\ResponseOrderCloseDTO**](../Model/ResponseOrderCloseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrderquery**
TradeOrderqueryResponse tradeOrderquery(TradeOrderqueryRequest request)

订单处理器——查询订单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeOrderqueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->tradeOrderquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeOrderquery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\YopQueryOrderResDTO**](../Model/YopQueryOrderResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeQuerydivideback**
TradeQuerydividebackResponse tradeQuerydivideback(TradeQuerydividebackRequest request)

订单处理器-分账退回查询

<p>分账退回查询</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeQuerydividebackRequest();
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideBackRequestId("divideBackRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->tradeQuerydivideback($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeQuerydivideback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **divideBackRequestId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\YopQueryDivideBackResDTO**](../Model/YopQueryDivideBackResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeRefund**
TradeRefundResponse tradeRefund(TradeRefundRequest request)

订单处理器——退款请求



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setRefundAmount("refundAmount_example");
$request->setAccountDivided("accountDivided_example");
$request->setDescription("description_example");
$request->setMemo("memo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setHmac("hmac_example");
$request->setMerchantSideMarketingRefundDetails("merchantSideMarketingRefundDetails_example");

try {
    $response = $api_client->tradeRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **refundAmount** | **string**|  | [optional]
 **accountDivided** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]
 **merchantSideMarketingRefundDetails** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\ResponseRefundDTO**](../Model/ResponseRefundDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeRefundquery**
TradeRefundqueryResponse tradeRefundquery(TradeRefundqueryRequest request)

订单处理器——退款查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundqueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setUniqueRefundNo("uniqueRefundNo_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->tradeRefundquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeRefundquery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **uniqueRefundNo** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\QueryRefundResponseDTO**](../Model/QueryRefundResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeSettlementsquery**
TradeSettlementsqueryResponse tradeSettlementsquery(TradeSettlementsqueryRequest request)

订单处理器——结算查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeSettlementsqueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setStartSettleDate("startSettleDate_example");
$request->setEndSettleDate("endSettleDate_example");
$request->setHmac("hmac_example");
$request->setSettleMerchantNo("settleMerchantNo_example");

try {
    $response = $api_client->tradeSettlementsquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeSettlementsquery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **startSettleDate** | **string**|  | [optional]
 **endSettleDate** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]
 **settleMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\YopQuerySettleRecordResDTO**](../Model/YopQuerySettleRecordResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

