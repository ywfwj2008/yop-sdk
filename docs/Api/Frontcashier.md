# Yeepay\Yop\Sdk\Frontcashier

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bindcardConfirm**](Frontcashier.md#bindcardConfirm) | **POST** /rest/v1.0/frontcashier/bindcard/confirm | 绑卡短验确认
[**bindcardGetcardbin**](Frontcashier.md#bindcardGetcardbin) | **POST** /rest/v1.0/frontcashier/bindcard/getcardbin | 【NOP】鉴权绑卡查询卡BIN（不校验）
[**bindcardPayerrequest**](Frontcashier.md#bindcardPayerrequest) | **POST** /rest/v1.0/frontcashier/bindcard/payerrequest | 【NOP】付款方鉴权绑卡请求下单
[**bindcardQueryorder**](Frontcashier.md#bindcardQueryorder) | **POST** /rest/v1.0/frontcashier/bindcard/queryorder | 鉴权绑卡订单查询
[**bindcardRequest**](Frontcashier.md#bindcardRequest) | **POST** /rest/v1.0/frontcashier/bindcard/request | 鉴权绑卡请求
[**bindpayConfirm**](Frontcashier.md#bindpayConfirm) | **POST** /rest/v1.0/frontcashier/bindpay/confirm | 绑卡支付短验确认
[**bindpayRequest**](Frontcashier.md#bindpayRequest) | **POST** /rest/v1.0/frontcashier/bindpay/request | 绑卡支付
[**bindpaySendsms**](Frontcashier.md#bindpaySendsms) | **POST** /rest/v1.0/frontcashier/bindpay/sendsms | 绑卡支付短验获取
[**entrustConfirm**](Frontcashier.md#entrustConfirm) | **POST** /rest/v1.0/frontcashier/entrust/confirm | 【NOP】商业委托确认
[**entrustPay**](Frontcashier.md#entrustPay) | **POST** /rest/v1.0/frontcashier/entrust/pay | 商业委托支付
[**entrustQuery**](Frontcashier.md#entrustQuery) | **GET** /rest/v1.0/frontcashier/entrust/query | 【NOP】商业委托查询
[**entrustRequest**](Frontcashier.md#entrustRequest) | **POST** /rest/v1.0/frontcashier/entrust/request | 【NOP】商业委托请求


# **bindcardConfirm**
BindcardConfirmResponse bindcardConfirm(BindcardConfirmRequest request)

绑卡短验确认

<p>该接口提供鉴权绑卡请求短信验证</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setEmpower(true);
$request->setSmsCode("smsCode_example");

try {
    $response = $api_client->bindcardConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **empower** | **bool**|  | [optional]
 **smsCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenAuthBindCardConfirmResponseDTO**](../Model/OpenAuthBindCardConfirmResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardGetcardbin**
BindcardGetcardbinResponse bindcardGetcardbin(BindcardGetcardbinRequest request)

【NOP】鉴权绑卡查询卡BIN（不校验）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardGetcardbinRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCardNo("bankCardNo_example");
$request->setCardType("cardType_example");

try {
    $response = $api_client->bindcardGetcardbin($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardGetcardbin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenQueryCardbinResponseDTO**](../Model/OpenQueryCardbinResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardPayerrequest**
BindcardPayerrequestResponse bindcardPayerrequest(BindcardPayerrequestRequest request)

【NOP】付款方鉴权绑卡请求下单

【NOP】付款方鉴权绑卡请求下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardPayerrequestRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenPayerAuthBindCardRequestDTO());

try {
    $response = $api_client->bindcardPayerrequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardPayerrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenPayerAuthBindCardRequestDTO**](../Model/OpenPayerAuthBindCardRequestDTO.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenPayerAuthBindCardResponseDTO**](../Model/OpenPayerAuthBindCardResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bindcardQueryorder**
BindcardQueryorderResponse bindcardQueryorder(BindcardQueryorderRequest request)

鉴权绑卡订单查询

<p>鉴权绑卡订单查询接口</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardQueryorderRequest();
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setNopOrderId("nopOrderId_example");

try {
    $response = $api_client->bindcardQueryorder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardQueryorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **nopOrderId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenQueryOrderResponseDTO**](../Model/OpenQueryOrderResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardRequest**
BindcardRequestResponse bindcardRequest(BindcardRequestRequest request)

鉴权绑卡请求

<p>该接口提供绑卡请求,该接口请求成功后需调求短验确认接口完成整个绑卡动作</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setBankCardNo("bankCardNo_example");
$request->setUserName("userName_example");
$request->setIdCardNo("idCardNo_example");
$request->setPhone("phone_example");
$request->setCvv2("cvv2_example");
$request->setValidthru("validthru_example");
$request->setRiskParamExt("riskParamExt_example");
$request->setOrderValidate(56);
$request->setAuthType("authType_example");
$request->setEmpower(true);
$request->setCardType("cardType_example");
$request->setIsSMS(true);

try {
    $response = $api_client->bindcardRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **validthru** | **string**|  | [optional]
 **riskParamExt** | **string**|  | [optional]
 **orderValidate** | **int**|  | [optional]
 **authType** | **string**|  | [optional]
 **empower** | **bool**|  | [optional]
 **cardType** | **string**|  | [optional]
 **isSMS** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenAuthBindCardResponseDTO**](../Model/OpenAuthBindCardResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindpayConfirm**
BindpayConfirmResponse bindpayConfirm(BindpayConfirmRequest request)

绑卡支付短验确认

<p>API收银台，绑卡支付，确认支付</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayConfirmRequest();
$request->setToken("token_example");
$request->setVersion("version_example");
$request->setVerifyCode("verifyCode_example");
$request->setCardno("cardno_example");
$request->setOwner("owner_example");
$request->setIdno("idno_example");
$request->setPhoneNo("phoneNo_example");
$request->setYpMobile("ypMobile_example");
$request->setAvlidDate("avlidDate_example");
$request->setCvv2("cvv2_example");
$request->setIdCardType("idCardType_example");
$request->setBankPWD("bankPWD_example");

try {
    $response = $api_client->bindpayConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindpayConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **verifyCode** | **string**|  | [optional]
 **cardno** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idno** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **ypMobile** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **bankPWD** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\ApiBindPayConfirmResponseDTO**](../Model/ApiBindPayConfirmResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindpayRequest**
BindpayRequestResponse bindpayRequest(BindpayRequestRequest request)

绑卡支付



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayRequestRequest();
$request->setPayMerchantNo("payMerchantNo_example");
$request->setToken("token_example");
$request->setBindId("bindId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setUserIp("userIp_example");
$request->setVersion("version_example");
$request->setExtParamMap("extParamMap_example");

try {
    $response = $api_client->bindpayRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindpayRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payMerchantNo** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **bindId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **extParamMap** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\ApiBindPayPaymentResponseDTO**](../Model/ApiBindPayPaymentResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindpaySendsms**
BindpaySendsmsResponse bindpaySendsms(BindpaySendsmsRequest request)

绑卡支付短验获取

<p>API收银台，绑卡支付，请求发送验证码</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpaySendsmsRequest();
$request->setToken("token_example");
$request->setVersion("version_example");
$request->setCardno("cardno_example");
$request->setOwner("owner_example");
$request->setIdno("idno_example");
$request->setPhoneNo("phoneNo_example");
$request->setYpMobile("ypMobile_example");
$request->setAvlidDate("avlidDate_example");
$request->setCvv2("cvv2_example");
$request->setIdCardType("idCardType_example");
$request->setBankPWD("bankPWD_example");

try {
    $response = $api_client->bindpaySendsms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindpaySendsms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **cardno** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idno** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **ypMobile** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **bankPWD** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\ApiBindPaySendSmsResponseDTO**](../Model/ApiBindPaySendSmsResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **entrustConfirm**
EntrustConfirmResponse entrustConfirm(EntrustConfirmRequest request)

【NOP】商业委托确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\EntrustConfirmRequest();
$request->setSmsCode("smsCode_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setOrderValidate(56);

try {
    $response = $api_client->entrustConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->entrustConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smsCode** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **orderValidate** | **int**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenEntrustConfirmResponseDTO**](../Model/OpenEntrustConfirmResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **entrustPay**
EntrustPayResponse entrustPay(EntrustPayRequest request)

商业委托支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\EntrustPayRequest();
$request->setBindId("bindId_example");
$request->setCardNo("cardNo_example");
$request->setUserIp("userIp_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setEntrustProtocolId("entrustProtocolId_example");
$request->setToken("token_example");
$request->setVersion("version_example");
$request->setMarketActivityNo("marketActivityNo_example");
$request->setAttendActivity(true);

try {
    $response = $api_client->entrustPay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->entrustPay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bindId** | **string**|  | [optional]
 **cardNo** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **entrustProtocolId** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **marketActivityNo** | **string**|  | [optional]
 **attendActivity** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\APIEntrustPaymentResponseDTO**](../Model/APIEntrustPaymentResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **entrustQuery**
EntrustQueryResponse entrustQuery(EntrustQueryRequest request)

【NOP】商业委托查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\EntrustQueryRequest();
$request->setEntrustProtocolId("entrustProtocolId_example");

try {
    $response = $api_client->entrustQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->entrustQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entrustProtocolId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\NcEntrustQueryResponseDTO**](../Model/NcEntrustQueryResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **entrustRequest**
EntrustRequestResponse entrustRequest(EntrustRequestRequest request)

【NOP】商业委托请求

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\EntrustRequestRequest();
$request->setSignType("signType_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setBankCardNo("bankCardNo_example");
$request->setUserName("userName_example");
$request->setIdCardNo("idCardNo_example");
$request->setPhone("phone_example");
$request->setIdCardType("idCardType_example");
$request->setSignSuccessNotifyUrl("signSuccessNotifyUrl_example");
$request->setCollectAmount(1.2);
$request->setCollectBeginDate("collectBeginDate_example");
$request->setCollectEndDate("collectEndDate_example");
$request->setCycleFrequency(56);
$request->setCycleStepUnit("cycleStepUnit_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setOrderValidate(56);

try {
    $response = $api_client->entrustRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->entrustRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signType** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **signSuccessNotifyUrl** | **string**|  | [optional]
 **collectAmount** | **float**|  | [optional]
 **collectBeginDate** | **string**|  | [optional]
 **collectEndDate** | **string**|  | [optional]
 **cycleFrequency** | **int**|  | [optional]
 **cycleStepUnit** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **orderValidate** | **int**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenEntrustResponseDTO**](../Model/OpenEntrustResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

