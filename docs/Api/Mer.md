# Yeepay\Yop\Sdk\Mer

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**elecSignNotify**](Mer.md#elecSignNotify) | **POST** /rest/v1.0/mer/elec/sign/notify | 电子签章重复通知
[**merchantAccountBindCard**](Mer.md#merchantAccountBindCard) | **POST** /rest/v1.0/mer/merchant/account-bind-card | 商户绑卡接口
[**merchantAccountBindCardQuery**](Mer.md#merchantAccountBindCardQuery) | **GET** /rest/v1.0/mer/merchant/account-bind-card-query | 商户绑卡查询接口
[**merchantMerchantSettleWayUpdate**](Mer.md#merchantMerchantSettleWayUpdate) | **POST** /rest/v1.0/mer/merchant/merchant-settle-way-update | 修改商户结算方式
[**merchantProductFeeModify**](Mer.md#merchantProductFeeModify) | **POST** /rest/v1.0/mer/merchant/product-fee-modify | 商户产品费率变更
[**merchantQueryMerPayProductFee**](Mer.md#merchantQueryMerPayProductFee) | **GET** /rest/v1.0/mer/merchant/query-mer-pay-product-fee | 商户开通产品费率查询
[**merchantQueryMerchantBasicInfo**](Mer.md#merchantQueryMerchantBasicInfo) | **GET** /rest/v1.0/mer/merchant/query-merchant-basic-info | 查询商户基本信息
[**merchantSettleBankCardInfoUpdate**](Mer.md#merchantSettleBankCardInfoUpdate) | **POST** /rest/v1.0/mer/merchant/settle-bank-card-info-update | 结算卡变更接口
[**merchantWechatauthCancel**](Mer.md#merchantWechatauthCancel) | **POST** /rest/v1.0/mer/merchant/wechatauth/cancel | 撤销微信实名认证申请单
[**merchantWechatauthQuery**](Mer.md#merchantWechatauthQuery) | **GET** /rest/v1.0/mer/merchant/wechatauth/query | 查询微信实名认证状态


# **elecSignNotify**
ElecSignNotifyResponse elecSignNotify(ElecSignNotifyRequest request)

电子签章重复通知

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ElecSignNotifyRequest();
$request->setMerNo("merNo_example");

try {
    $response = $api_client->elecSignNotify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->elecSignNotify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerElecSignNotifyRespDTO**](../Model/MerElecSignNotifyRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantAccountBindCard**
MerchantAccountBindCardResponse merchantAccountBindCard(MerchantAccountBindCardRequest request)

商户绑卡接口

商户绑卡接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantAccountBindCardRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCardType("bankCardType_example");
$request->setBankId("bankId_example");
$request->setBranchBankCode("branchBankCode_example");
$request->setBankActId("bankActId_example");
$request->setAccountName("accountName_example");

try {
    $response = $api_client->merchantAccountBindCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantAccountBindCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardType** | **string**|  | [optional]
 **bankId** | **string**|  | [optional]
 **branchBankCode** | **string**|  | [optional]
 **bankActId** | **string**|  | [optional]
 **accountName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BindCardRespDTO**](../Model/BindCardRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantAccountBindCardQuery**
MerchantAccountBindCardQueryResponse merchantAccountBindCardQuery(MerchantAccountBindCardQueryRequest request)

商户绑卡查询接口

商户绑卡查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantAccountBindCardQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merchantAccountBindCardQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantAccountBindCardQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BindingCardQueryRespDTO**](../Model/BindingCardQueryRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantMerchantSettleWayUpdate**
MerchantMerchantSettleWayUpdateResponse merchantMerchantSettleWayUpdate(MerchantMerchantSettleWayUpdateRequest request)

修改商户结算方式

修改商户结算方式

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantMerchantSettleWayUpdateRequest();
$request->setSelfService(true);
$request->setAutoService(true);
$request->setRequestNo("requestNo_example");
$request->setMerNo("merNo_example");
$request->setAgentNo("agentNo_example");

try {
    $response = $api_client->merchantMerchantSettleWayUpdate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantMerchantSettleWayUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **selfService** | **bool**|  | [optional]
 **autoService** | **bool**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merNo** | **string**|  | [optional]
 **agentNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RespBaseDto**](../Model/RespBaseDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantProductFeeModify**
MerchantProductFeeModifyResponse merchantProductFeeModify(MerchantProductFeeModifyRequest request)

商户产品费率变更

商户产品费率变更，支持多个产品费率同时变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantProductFeeModifyRequest();
$request->setRequestNo("requestNo_example");
$request->setMerNo("merNo_example");
$request->setProductInfo("productInfo_example");

try {
    $response = $api_client->merchantProductFeeModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantProductFeeModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merNo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerProductFeeModifyRespDto**](../Model/MerProductFeeModifyRespDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantQueryMerPayProductFee**
MerchantQueryMerPayProductFeeResponse merchantQueryMerPayProductFee(MerchantQueryMerPayProductFeeRequest request)

商户开通产品费率查询

商户开通产品费率查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantQueryMerPayProductFeeRequest();
$request->setMerNo("merNo_example");

try {
    $response = $api_client->merchantQueryMerPayProductFee($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantQueryMerPayProductFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerProductRespDto**](../Model/MerProductRespDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantQueryMerchantBasicInfo**
MerchantQueryMerchantBasicInfoResponse merchantQueryMerchantBasicInfo(MerchantQueryMerchantBasicInfoRequest request)

查询商户基本信息

查询商户基本信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantQueryMerchantBasicInfoRequest();
$request->setMerchantNo("merchantNo_example");
$request->setAgentNo("agentNo_example");

try {
    $response = $api_client->merchantQueryMerchantBasicInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantQueryMerchantBasicInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **agentNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoRespDTO**](../Model/MerchantBasicInfoRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantSettleBankCardInfoUpdate**
MerchantSettleBankCardInfoUpdateResponse merchantSettleBankCardInfoUpdate(MerchantSettleBankCardInfoUpdateRequest request)

结算卡变更接口

结算卡变更接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSettleBankCardInfoUpdateRequest();
$request->setBankcardNo("bankcardNo_example");
$request->setHeadBankName("headBankName_example");
$request->setBankName("bankName_example");
$request->setBankProvince("bankProvince_example");
$request->setBankCity("bankCity_example");
$request->setRequestNo("requestNo_example");
$request->setMerNo("merNo_example");
$request->setAgentNo("agentNo_example");

try {
    $response = $api_client->merchantSettleBankCardInfoUpdate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantSettleBankCardInfoUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankcardNo** | **string**|  | [optional]
 **headBankName** | **string**|  | [optional]
 **bankName** | **string**|  | [optional]
 **bankProvince** | **string**|  | [optional]
 **bankCity** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merNo** | **string**|  | [optional]
 **agentNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\SettleInfoUpdateRespDto**](../Model/SettleInfoUpdateRespDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthCancel**
MerchantWechatauthCancelResponse merchantWechatauthCancel(MerchantWechatauthCancelRequest request)

撤销微信实名认证申请单

撤销微信实名认证申请单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelRequest();
$request->setApplymentId("applymentId_example");
$request->setRequestNo("requestNo_example");
$request->setSubMerchantNo("subMerchantNo_example");

try {
    $response = $api_client->merchantWechatauthCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplymentCancelRespDto**](../Model/ApplymentCancelRespDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthQuery**
MerchantWechatauthQueryResponse merchantWechatauthQuery(MerchantWechatauthQueryRequest request)

查询微信实名认证状态

查询微信实名认证状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryRequest();
$request->setSubMerchantNo("subMerchantNo_example");
$request->setApplymentId("applymentId_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->merchantWechatauthQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subMerchantNo** | **string**|  |
 **applymentId** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryCertificateResultRespDto**](../Model/QueryCertificateResultRespDto.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

