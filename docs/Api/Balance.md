# Yeepay\Yop\Sdk\Balance

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountQuery**](Balance.md#accountQuery) | **POST** /rest/v1.0/balance/account-query | 提现一一余额查询
[**queryCustomerAmount**](Balance.md#queryCustomerAmount) | **POST** /rest/v1.0/balance/query_customer_amount | 代付代发--可用余额查询
[**transferBatchSend**](Balance.md#transferBatchSend) | **POST** /rest/v1.0/balance/transfer_batch_send | 代付代发--批次出款请求
[**transferSend**](Balance.md#transferSend) | **POST** /rest/v1.0/balance/transfer_send | 代付代发--单笔出款请求
[**yopSimpleRemitDownloadElectronicReceipt**](Balance.md#yopSimpleRemitDownloadElectronicReceipt) | **GET** /yos/v1.0/balance/yop-simple-remit/download-electronic-receipt | 代付代发--单笔电子回单下载


# **accountQuery**
AccountQueryResponse accountQuery(AccountQueryRequest request)

提现一一余额查询

<p>可用余额查询接口</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Balance\BalanceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Balance\Model\AccountQueryRequest();
$request->setCustomerNumber("customerNumber_example");

try {
    $response = $api_client->accountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling BalanceClient->accountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNumber** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Balance\Model\BalanceValidAmountResDto**](../Model/BalanceValidAmountResDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryCustomerAmount**
QueryCustomerAmountResponse queryCustomerAmount(QueryCustomerAmountRequest request)

代付代发--可用余额查询

<p>查询账户可用余额、代付代发可用余额、日结通可用余额</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Balance\BalanceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Balance\Model\QueryCustomerAmountRequest();

try {
    $response = $api_client->queryCustomerAmount($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling BalanceClient->queryCustomerAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type
[**\Yeepay\Yop\Sdk\Service\Balance\Model\YopQueryAmountRespDTO**](../Model/YopQueryAmountRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferBatchSend**
TransferBatchSendResponse transferBatchSend(TransferBatchSendRequest request)

代付代发--批次出款请求

<p>调用该接口发起批量代付出款请求，每笔出款结果&nbsp;<a href=\"https://open.yeepay.com/docs/v2/products/opr/others/5e941bf8a8e9ea001ac6d0e3/index.html\" target=\"_blank\" rel=\"noopener\">异步回调通知商户</a></p> <p>重要说明，不明确订单状态时请采取如下方法：</p> <p>1、补发的时候一定是原订单号补发；</p> <p>2、接口超时一定不能当做失败处理，要结合查询，查询也要有一定滞后，如果查不到可能是订单在处理中或订单处理失败导致订单没有写入查询库，该情况请联系客服确认出款情况（客服电话：4001500800）；</p> <p>3、接口错误码一定要判断清楚，系统错误不能当作失败处理，要判断订单状态判断方式参考如上方法；</p> <p>4、如果商户误把还在付款处理中的订单直接当付款失败处理，商户应当自行承担因此产生的所有损失和责任。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Balance\BalanceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Balance\Model\TransferBatchSendRequest();
$request->setProduct("product_example");
$request->setTotalAmount(1.2);
$request->setTotalCount(56);
$request->setDetailJson("detailJson_example");

try {
    $response = $api_client->transferBatchSend($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling BalanceClient->transferBatchSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  | [optional]
 **totalAmount** | **float**|  | [optional]
 **totalCount** | **int**|  | [optional]
 **detailJson** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Balance\Model\YopBatchTransferParamRespDTO**](../Model/YopBatchTransferParamRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferSend**
TransferSendResponse transferSend(TransferSendRequest request)

代付代发--单笔出款请求

<p>调用该接口发起单笔代付出款请求，出款结果&nbsp;<a href=\"https://open.yeepay.com/docs/v2/products/opr/others/5e941bf8a8e9ea001ac6d0e3/index.html\" target=\"_blank\" rel=\"noopener\">异步回调通知商户</a></p> <p>重要说明，不明确订单状态时请采取如下方法：</p> <p>1、补发的时候一定是原订单号补发；</p> <p>2、接口超时一定不能当做失败处理，要结合查询，查询也要有一定滞后，如果查不到可能是订单在处理中或订单处理失败导致订单没有写入查询库，该情况请联系客服确认出款情况（客服电话：4001500800）；</p> <p>3、接口错误码一定要判断清楚，系统错误不能当作失败处理，要判断订单状态判断方式参考如上方法；</p> <p>4、如果商户误把还在付款处理中的订单直接当付款失败处理，商户应当自行承担因此产生的所有损失和责任。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Balance\BalanceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Balance\Model\TransferSendRequest();
$request->setBatchNo("batchNo_example");
$request->setOrderId("orderId_example");
$request->setAmount(1.2);
$request->setAccountName("accountName_example");
$request->setAccountNumber("accountNumber_example");
$request->setBankCode("bankCode_example");
$request->setBankName("bankName_example");
$request->setBankBranchName("bankBranchName_example");
$request->setProvinceCode("provinceCode_example");
$request->setCityCode("cityCode_example");
$request->setAbstractInfo("abstractInfo_example");
$request->setProduct("product_example");
$request->setFeeType("feeType_example");
$request->setUrgency(true);
$request->setDesc("desc_example");
$request->setLeaveWord("leaveWord_example");
$request->setBankAccountType("bankAccountType_example");

try {
    $response = $api_client->transferSend($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling BalanceClient->transferSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **accountName** | **string**|  | [optional]
 **accountNumber** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **bankName** | **string**|  | [optional]
 **bankBranchName** | **string**|  | [optional]
 **provinceCode** | **string**|  | [optional]
 **cityCode** | **string**|  | [optional]
 **abstractInfo** | **string**|  | [optional]
 **product** | **string**|  | [optional]
 **feeType** | **string**|  | [optional]
 **urgency** | **bool**|  | [optional]
 **desc** | **string**|  | [optional]
 **leaveWord** | **string**|  | [optional]
 **bankAccountType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Balance\Model\YopTransferParamRespDTO**](../Model/YopTransferParamRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **yopSimpleRemitDownloadElectronicReceipt**
YosDownloadResponse yopSimpleRemitDownloadElectronicReceipt(YopSimpleRemitDownloadElectronicReceiptRequest request)

代付代发--单笔电子回单下载

<p>该接口用于下载电子版出款证明文件，对应的出款交易状态必须为成功（打款状态：已汇出，银行状态：成功）。该接口可下载近6个月交易的出款证明文件。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Balance\BalanceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Balance\Model\YopSimpleRemitDownloadElectronicReceiptRequest();
$request->setBatchNo("batchNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->yopSimpleRemitDownloadElectronicReceipt($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling BalanceClient->yopSimpleRemitDownloadElectronicReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchNo** | **string**| 需下载电子回单的批次号 |
 **orderId** | **string**| 需下载电子回单的订单号 |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

