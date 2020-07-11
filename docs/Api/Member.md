# Yeepay\Yop\Sdk\Member

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**commonBinding**](Member.md#commonBinding) | **POST** /rest/v1.1/member/common/binding | 会员绑卡
[**commonBindingconfirm**](Member.md#commonBindingconfirm) | **POST** /rest/v1.1/member/common/bindingConfirm | 钱包会员绑卡确认
[**commonQueryaccount**](Member.md#commonQueryaccount) | **POST** /rest/v1.0/member/common/queryAccount | 会员查询
[**commonRecharge**](Member.md#commonRecharge) | **POST** /rest/v1.0/member/common/recharge | 会员充值
[**commonRegister**](Member.md#commonRegister) | **POST** /rest/v1.0/member/common/register | 通用会员注册
[**commonSendsms**](Member.md#commonSendsms) | **POST** /rest/v1.1/member/common/sendSms | 发送短验
[**commonTransferList**](Member.md#commonTransferList) | **POST** /rest/v1.0/member/common/transfer/list | 通用转账查询接口
[**commonTransferPublic**](Member.md#commonTransferPublic) | **POST** /rest/v1.0/member/common/transfer/public | 会员通用B2C转账发起接口
[**commonUnbinding**](Member.md#commonUnbinding) | **POST** /rest/v1.0/member/common/unbinding | 通用解绑卡接口
[**commonVerify**](Member.md#commonVerify) | **POST** /rest/v1.1/member/common/verify | 会员实名
[**commonVerifyconfirm**](Member.md#commonVerifyconfirm) | **POST** /rest/v1.1/member/common/verifyConfirm | 会员实名确认


# **commonBinding**
CommonBindingResponse commonBinding(CommonBindingRequest request)

会员绑卡



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonBindingRequest();
$request->setCustomerNo("customerNo_example");
$request->setRequestId("requestId_example");
$request->setPlatformUserNo("platformUserNo_example");
$request->setBusinessNo("businessNo_example");
$request->setMobilePhone("mobilePhone_example");
$request->setBankCardNum("bankCardNum_example");
$request->setCvv2("cvv2_example");
$request->setBindvalidthru("bindvalidthru_example");
$request->setIsSmsVerify("isSmsVerify_example");
$request->setPageNotifyUrl("pageNotifyUrl_example");
$request->setSaleProductCode("saleProductCode_example");
$request->setSmsTemplateId("smsTemplateId_example");

try {
    $response = $api_client->commonBinding($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNo** | **string**|  | [optional]
 **requestId** | **string**|  | [optional]
 **platformUserNo** | **string**|  | [optional]
 **businessNo** | **string**|  | [optional]
 **mobilePhone** | **string**|  | [optional]
 **bankCardNum** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **bindvalidthru** | **string**|  | [optional]
 **isSmsVerify** | **string**|  | [optional]
 **pageNotifyUrl** | **string**|  | [optional]
 **saleProductCode** | **string**|  | [optional]
 **smsTemplateId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\BindCardResponseDTO**](../Model/BindCardResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **commonBindingconfirm**
CommonBindingconfirmResponse commonBindingconfirm(CommonBindingconfirmRequest request)

钱包会员绑卡确认



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonBindingconfirmRequest();
$request->setCustomerNo("customerNo_example");
$request->setRequestId("requestId_example");
$request->setBusinessNo("businessNo_example");
$request->setValidateCode("validateCode_example");
$request->setPlatformUserNo("platformUserNo_example");

try {
    $response = $api_client->commonBindingconfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonBindingconfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNo** | **string**|  | [optional]
 **requestId** | **string**|  | [optional]
 **businessNo** | **string**|  | [optional]
 **validateCode** | **string**|  | [optional]
 **platformUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\BindCardResponseDTO**](../Model/BindCardResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **commonQueryaccount**
CommonQueryaccountResponse commonQueryaccount(CommonQueryaccountRequest request)

会员查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonQueryaccountRequest();
$request->setCustomerNo("customerNo_example");
$request->setRequestId("requestId_example");
$request->setPlatformUserNo("platformUserNo_example");

try {
    $response = $api_client->commonQueryaccount($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonQueryaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNo** | **string**|  | [optional]
 **requestId** | **string**|  | [optional]
 **platformUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\MemberBaseResponse**](../Model/MemberBaseResponse.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **commonRecharge**
CommonRechargeResponse commonRecharge(CommonRechargeRequest request)

会员充值



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonRechargeRequest();
$request->setCustomerNo("customerNo_example");
$request->setRequestId("requestId_example");
$request->setPlatformUserNo("platformUserNo_example");
$request->setOrderNo("orderNo_example");
$request->setBindId("bindId_example");
$request->setAmount("amount_example");
$request->setExtendRiskInfo("extendRiskInfo_example");
$request->setDirectPayType("directPayType_example");
$request->setProductName("productName_example");
$request->setSaleProductCode("saleProductCode_example");
$request->setNotifyURL("notifyURL_example");
$request->setFrontCallBackUrl("frontCallBackUrl_example");
$request->setPlatformName("platformName_example");
$request->setIsYeepayCheck("isYeepayCheck_example");

try {
    $response = $api_client->commonRecharge($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonRecharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNo** | **string**|  | [optional]
 **requestId** | **string**|  | [optional]
 **platformUserNo** | **string**|  | [optional]
 **orderNo** | **string**|  | [optional]
 **bindId** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **extendRiskInfo** | **string**|  | [optional]
 **directPayType** | **string**|  | [optional]
 **productName** | **string**|  | [optional]
 **saleProductCode** | **string**|  | [optional]
 **notifyURL** | **string**|  | [optional]
 **frontCallBackUrl** | **string**|  | [optional]
 **platformName** | **string**|  | [optional]
 **isYeepayCheck** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\MemberBaseResponse**](../Model/MemberBaseResponse.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **commonRegister**
CommonRegisterResponse commonRegister(CommonRegisterRequest request)

通用会员注册



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonRegisterRequest();
$request->setCustomerNo("customerNo_example");
$request->setPlatformUserNo("platformUserNo_example");
$request->setRegType("regType_example");
$request->setLoginName("loginName_example");
$request->setLoginPassword("loginPassword_example");
$request->setEmail("email_example");
$request->setRegIp("regIp_example");
$request->setMemberType("memberType_example");
$request->setTradePassword("tradePassword_example");
$request->setMobile("mobile_example");

try {
    $response = $api_client->commonRegister($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNo** | **string**|  | [optional]
 **platformUserNo** | **string**|  | [optional]
 **regType** | **string**|  | [optional]
 **loginName** | **string**|  | [optional]
 **loginPassword** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **regIp** | **string**|  | [optional]
 **memberType** | **string**|  | [optional]
 **tradePassword** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\MemberBaseResponse**](../Model/MemberBaseResponse.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **commonSendsms**
CommonSendsmsResponse commonSendsms(CommonSendsmsRequest request)

发送短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonSendsmsRequest();
$request->setBusinessNo("businessNo_example");

try {
    $response = $api_client->commonSendsms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonSendsms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\SendSmsResponseDTO**](../Model/SendSmsResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **commonTransferList**
CommonTransferListResponse commonTransferList(CommonTransferListRequest request)

通用转账查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonTransferListRequest();
$request->setPlatformUserNo("platformUserNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->commonTransferList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonTransferList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platformUserNo** | **string**|  | [optional]
 **orderNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\MemberBaseResponse**](../Model/MemberBaseResponse.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **commonTransferPublic**
CommonTransferPublicResponse commonTransferPublic(CommonTransferPublicRequest request)

会员通用B2C转账发起接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonTransferPublicRequest();
$request->setCustomerNo("customerNo_example");
$request->setOrderNo("orderNo_example");
$request->setPlatformUserNo("platformUserNo_example");
$request->setTargetPlatformUserNo("targetPlatformUserNo_example");
$request->setAmount("amount_example");
$request->setNeedCalFee(true);

try {
    $response = $api_client->commonTransferPublic($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonTransferPublic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNo** | **string**|  | [optional]
 **orderNo** | **string**|  | [optional]
 **platformUserNo** | **string**|  | [optional]
 **targetPlatformUserNo** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **needCalFee** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\MemberBaseResponse**](../Model/MemberBaseResponse.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **commonUnbinding**
CommonUnbindingResponse commonUnbinding(CommonUnbindingRequest request)

通用解绑卡接口



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonUnbindingRequest();
$request->setCustomerNo("customerNo_example");
$request->setRequestId("requestId_example");
$request->setPlatformUserNo("platformUserNo_example");
$request->setBindId(789);

try {
    $response = $api_client->commonUnbinding($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonUnbinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNo** | **string**|  | [optional]
 **requestId** | **string**|  | [optional]
 **platformUserNo** | **string**|  | [optional]
 **bindId** | **int**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\MemberBaseResponse**](../Model/MemberBaseResponse.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **commonVerify**
CommonVerifyResponse commonVerify(CommonVerifyRequest request)

会员实名

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonVerifyRequest();
$request->setBusinessNo("businessNo_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCredentialsNo("credentialsNo_example");
$request->setMobilePhone("mobilePhone_example");
$request->setBankCardNum("bankCardNum_example");
$request->setCvv2("cvv2_example");
$request->setBindvalidthru("bindvalidthru_example");
$request->setIsBind("isBind_example");
$request->setPoliceAuth(true);
$request->setOperatorAuth(true);
$request->setPageNotifyUrl("pageNotifyUrl_example");
$request->setIsSmsVerify("isSmsVerify_example");
$request->setCustomerNo("customerNo_example");
$request->setRequestId("requestId_example");
$request->setPlatformUserNo("platformUserNo_example");
$request->setSaleProductCode("saleProductCode_example");

try {
    $response = $api_client->commonVerify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **credentialsNo** | **string**|  | [optional]
 **mobilePhone** | **string**|  | [optional]
 **bankCardNum** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **bindvalidthru** | **string**|  | [optional]
 **isBind** | **string**|  | [optional]
 **policeAuth** | **bool**|  | [optional]
 **operatorAuth** | **bool**|  | [optional]
 **pageNotifyUrl** | **string**|  | [optional]
 **isSmsVerify** | **string**|  | [optional]
 **customerNo** | **string**|  | [optional]
 **requestId** | **string**|  | [optional]
 **platformUserNo** | **string**|  | [optional]
 **saleProductCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\VerifyResponseDTO**](../Model/VerifyResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **commonVerifyconfirm**
CommonVerifyconfirmResponse commonVerifyconfirm(CommonVerifyconfirmRequest request)

会员实名确认



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Member\MemberClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Member\Model\CommonVerifyconfirmRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Member\Model\VerifyRequestConfirmDTO());

try {
    $response = $api_client->commonVerifyconfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MemberClient->commonVerifyconfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Member\Model\VerifyRequestConfirmDTO**](../Model/VerifyRequestConfirmDTO.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Member\Model\VerifyResponseDTO**](../Model/VerifyResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

