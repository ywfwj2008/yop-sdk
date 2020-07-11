# Yeepay\Yop\Sdk\Std

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billCashdaydownload**](Std.md#billCashdaydownload) | **GET** /yos/v1.0/std/bill/cashdaydownload | 提现日对账下载
[**billRemitdaydownload**](Std.md#billRemitdaydownload) | **POST** /yos/v1.0/std/bill/remitdaydownload | 出款日对账下载
[**billYfcashdaydownload**](Std.md#billYfcashdaydownload) | **GET** /yos/v1.0/std/bill/yfcashdaydownload | 易沣提现日对账下载
[**billYftradedaydownload**](Std.md#billYftradedaydownload) | **GET** /yos/v1.0/std/bill/yftradedaydownload | 易沣交易日对账下载
[**tradeMultiorderquery**](Std.md#tradeMultiorderquery) | **POST** /rest/v1.0/std/trade/multiorderquery | 订单处理器--批量查询订单
[**tradeOrder**](Std.md#tradeOrder) | **POST** /rest/v1.0/std/trade/order | 订单处理器--创建订单
[**tradeOrderclose**](Std.md#tradeOrderclose) | **POST** /rest/v1.0/std/trade/orderclose | 订单处理器--关闭订单
[**tradeOrderquery**](Std.md#tradeOrderquery) | **POST** /rest/v1.0/std/trade/orderquery | 订单处理器--查询订单
[**tradeRefund**](Std.md#tradeRefund) | **POST** /rest/v1.0/std/trade/refund | 订单处理器--退款请求
[**tradeRefundquery**](Std.md#tradeRefundquery) | **POST** /rest/v1.0/std/trade/refundquery | 订单处理器--退款查询
[**tradeSettlementsquery**](Std.md#tradeSettlementsquery) | **POST** /rest/v1.0/std/trade/settlementsquery | 订单处理器——结算查询


# **billCashdaydownload**
BillCashdaydownloadResponse billCashdaydownload(BillCashdaydownloadRequest request)

提现日对账下载

<p>强调：获取对账文件时请以行号来获取对账文件信息，后期易宝可能在后追加参表头参数<br />提现日对账下载,9点后下载前一天的对账数据，具体请参考&nbsp;&nbsp;<a href=\"https://open.yeepay.com/docs/v2/products/opr/others/5e941bf8a8e9ea001ac6d0e3/index.html\">商户对账说明</a></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillCashdaydownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setDayString("dayString_example");
$request->setDataType("dataType_example");

try {
    $response = $api_client->billCashdaydownload($request);
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billCashdaydownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 子商户编号 | [optional]
 **dayString** | **string**| eg:2018-01-01 | [optional]
 **dataType** | **string**| 数据类型  jy:按交易流水对账  zt:按状态对账 | [optional]

### Return type
void (empty response body)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

# **billRemitdaydownload**
BillRemitdaydownloadResponse billRemitdaydownload(BillRemitdaydownloadRequest request)

出款日对账下载

出款日对账下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillRemitdaydownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setDayString("dayString_example");
$request->setDataType("dataType_example");

try {
    $response = $api_client->billRemitdaydownload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billRemitdaydownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **dayString** | **string**|  | [optional]
 **dataType** | **string**|  | [optional]

### Return type
**int**
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billYfcashdaydownload**
BillYfcashdaydownloadResponse billYfcashdaydownload(BillYfcashdaydownloadRequest request)

易沣提现日对账下载

易沣提现日对账下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillYfcashdaydownloadRequest();
$request->setDayString("dayString_example");

try {
    $response = $api_client->billYfcashdaydownload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billYfcashdaydownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dayString** | **string**| &lt;span style&#x3D;\&quot;font-family: Helvetica, Arial, sans-serif; font-size: 12px;\&quot;&gt;日期的字符串格式，如：2018-07-17&lt;/span&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\InputStream**](../Model/InputStream.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billYftradedaydownload**
BillYftradedaydownloadResponse billYftradedaydownload(BillYftradedaydownloadRequest request)

易沣交易日对账下载

易沣交易日对账下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillYftradedaydownloadRequest();
$request->setDayString("dayString_example");

try {
    $response = $api_client->billYftradedaydownload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billYftradedaydownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dayString** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\InputStream**](../Model/InputStream.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeMultiorderquery**
TradeMultiorderqueryResponse tradeMultiorderquery(TradeMultiorderqueryRequest request)

订单处理器--批量查询订单

<p>调用此接口批量查询订单状态</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\TradeMultiorderqueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setStatus("status_example");
$request->setRequestDateBegin("requestDateBegin_example");
$request->setRequestDateEnd("requestDateEnd_example");
$request->setPageNo("pageNo_example");
$request->setPageSize("pageSize_example");

try {
    $response = $api_client->tradeMultiorderquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->tradeMultiorderquery: ', $e->getMessage(), PHP_EOL;
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

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopBatchQueryOrderResDTO**](../Model/YopBatchQueryOrderResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrder**
TradeOrderResponse tradeOrder(TradeOrderRequest request)

订单处理器--创建订单

<p>创建订单成功后返回订单Token，用于拼接收银台链接，详见<a href=\"http://open.yeepay.com/docs/e-commerceprotocols/5afd43472181f8275762d7da\" target=\"_blank\" rel=\"noopener\">标准收银台</a>、<a href=\"http://open.yeepay.com/docs/e-commerceprotocols/rest__v1.0__nccashierapi__api__pay\" target=\"_blank\" rel=\"noopener\">聚合API收银台</a></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\TradeOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount("orderAmount_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setGoodsParamExt("goodsParamExt_example");
$request->setTimeoutExpress(56);
$request->setTimeoutExpressType("timeoutExpressType_example");
$request->setRequestDate("requestDate_example");
$request->setRedirectUrl("redirectUrl_example");
$request->setPaymentParamExt("paymentParamExt_example");
$request->setIndustryParamExt("industryParamExt_example");
$request->setRiskParamExt("riskParamExt_example");
$request->setMemo("memo_example");
$request->setAssureType("assureType_example");
$request->setCsUrl("csUrl_example");
$request->setFundProcessType("fundProcessType_example");
$request->setDivideDetail("divideDetail_example");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setTimeoutNotifyUrl("timeoutNotifyUrl_example");
$request->setAssurePeriod("assurePeriod_example");
$request->setQueryParamsExt("queryParamsExt_example");

try {
    $response = $api_client->tradeOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->tradeOrder: ', $e->getMessage(), PHP_EOL;
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
 **notifyUrl** | **string**|  | [optional]
 **goodsParamExt** | **string**|  | [optional]
 **timeoutExpress** | **int**|  | [optional]
 **timeoutExpressType** | **string**|  | [optional]
 **requestDate** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **paymentParamExt** | **string**|  | [optional]
 **industryParamExt** | **string**|  | [optional]
 **riskParamExt** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **assureType** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **timeoutNotifyUrl** | **string**|  | [optional]
 **assurePeriod** | **string**|  | [optional]
 **queryParamsExt** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopCreateOrderResDTO**](../Model/YopCreateOrderResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrderclose**
TradeOrdercloseResponse tradeOrderclose(TradeOrdercloseRequest request)

订单处理器--关闭订单

<p>提交交易订单后，可通过调用该接口关闭订单</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\TradeOrdercloseRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDescription("description_example");

try {
    $response = $api_client->tradeOrderclose($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->tradeOrderclose: ', $e->getMessage(), PHP_EOL;
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

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\ResponseOrderCloseDTO**](../Model/ResponseOrderCloseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrderquery**
TradeOrderqueryResponse tradeOrderquery(TradeOrderqueryRequest request)

订单处理器--查询订单

<p>商户可通过该接口主动查询单笔支付订单的状态</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\TradeOrderqueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");

try {
    $response = $api_client->tradeOrderquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->tradeOrderquery: ', $e->getMessage(), PHP_EOL;
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

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryOrderResDTO**](../Model/YopQueryOrderResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeRefund**
TradeRefundResponse tradeRefund(TradeRefundRequest request)

订单处理器--退款请求

<p>退款请求成功之后，按退款规则将退款金额原路退回</p> <p>注意：</p> <p>1. 订单状态为&ldquo;SUCCESS&rdquo;时才能发起退款</p> <p>2. 退款支持单笔交易分多次退款，多次退款需要提交原支付订单的商户订单号和不同的退款单号，总退款金额不能超过用户实际支付金额</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\TradeRefundRequest();
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
$request->setRefundAccountType("refundAccountType_example");

try {
    $response = $api_client->tradeRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->tradeRefund: ', $e->getMessage(), PHP_EOL;
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
 **refundAccountType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\ResponseRefundDTO**](../Model/ResponseRefundDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeRefundquery**
TradeRefundqueryResponse tradeRefundquery(TradeRefundqueryRequest request)

订单处理器--退款查询

<p>提交退款申请后，通过调用该接口查询退款状态</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\TradeRefundqueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setUniqueRefundNo("uniqueRefundNo_example");

try {
    $response = $api_client->tradeRefundquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->tradeRefundquery: ', $e->getMessage(), PHP_EOL;
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

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\QueryRefundResponseDTO**](../Model/QueryRefundResponseDTO.md)
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

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\TradeSettlementsqueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setStartSettleDate("startSettleDate_example");
$request->setEndSettleDate("endSettleDate_example");
$request->setSettleMerchantNo("settleMerchantNo_example");

try {
    $response = $api_client->tradeSettlementsquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->tradeSettlementsquery: ', $e->getMessage(), PHP_EOL;
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
 **settleMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopQuerySettleRecordResDTO**](../Model/YopQuerySettleRecordResDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

