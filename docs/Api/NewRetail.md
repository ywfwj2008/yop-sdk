# Yeepay\Yop\Sdk\NewRetail

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketingApplyPublic**](NewRetail.md#marketingApplyPublic) | **POST** /rest/v1.0/new-retail/marketing/apply/public | 蓝海绿洲通用版接口
[**marketingQueryOpenId**](NewRetail.md#marketingQueryOpenId) | **POST** /rest/v1.0/new-retail/marketing/query-open-id | openid查询
[**marketingQueryresultPublic**](NewRetail.md#marketingQueryresultPublic) | **POST** /rest/v1.0/new-retail/marketing/queryresult/public | 蓝海绿洲报名查询公共版


# **marketingApplyPublic**
MarketingApplyPublicResponse marketingApplyPublic(MarketingApplyPublicRequest request)

蓝海绿洲通用版接口

<p>蓝海绿洲报名接口</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\New-retail\NewRetailClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\New-retail\Model\MarketingApplyPublicRequest();
$request->setMerchantNo("merchantNo_example");
$request->setChannelNo("channelNo_example");
$request->setRequestNo("requestNo_example");
$request->setCallBackUrl("callBackUrl_example");
$request->setPromotionType("promotionType_example");
$request->setMerAccNo("merAccNo_example");
$request->setMerAccName("merAccName_example");
$request->setMerAccBankName("merAccBankName_example");
$request->setMerAccBankCode("merAccBankCode_example");
$request->setMerAccPhone("merAccPhone_example");
$request->setMerAccBankProvince("merAccBankProvince_example");
$request->setMerAccBankCity("merAccBankCity_example");
$request->setPicPerWithId("picPerWithId_example");
$request->setPicOpenPermit("picOpenPermit_example");
$request->setPicSupplement("picSupplement_example");
$request->setPicShopInside("picShopInside_example");
$request->setPicCashier("picCashier_example");
$request->setPicPlatform("picPlatform_example");
$request->setPicAtaMaterial("picAtaMaterial_example");
$request->setMerchantLicensePicUrl("merchantLicensePicUrl_example");
$request->setMerchantLicenseNo("merchantLicenseNo_example");
$request->setMerchantShopPicUrl("merchantShopPicUrl_example");
$request->setExternalId("externalId_example");
$request->setAppKey("appKey_example");
$request->setReportMerchantName("reportMerchantName_example");
$request->setReportMerchantAlias("reportMerchantAlias_example");
$request->setMerchantAddress("merchantAddress_example");
$request->setMerchantProvince("merchantProvince_example");
$request->setMerchantCity("merchantCity_example");
$request->setMerchantDistrict("merchantDistrict_example");
$request->setSecondCategoryCode("secondCategoryCode_example");
$request->setContactType("contactType_example");
$request->setMerchantType("merchantType_example");
$request->setPicCertificateFile("picCertificateFile_example");
$request->setPicDiplomaticNote("picDiplomaticNote_example");
$request->setPicPrivateNonenterpriseUnits("picPrivateNonenterpriseUnits_example");
$request->setPicChargeSample("picChargeSample_example");
$request->setPicMedicalInstrumentPracticeLicense("picMedicalInstrumentPracticeLicense_example");
$request->setPicLegalPersonRegistration("picLegalPersonRegistration_example");
$request->setPicOrgCert("picOrgCert_example");
$request->setPicRunSchoolLicense("picRunSchoolLicense_example");
$request->setPicLegalPerson("picLegalPerson_example");
$request->setPicInstitutionalOrganization("picInstitutionalOrganization_example");

try {
    $response = $api_client->marketingApplyPublic($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NewRetailClient->marketingApplyPublic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **channelNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **callBackUrl** | **string**|  | [optional]
 **promotionType** | **string**|  | [optional]
 **merAccNo** | **string**|  | [optional]
 **merAccName** | **string**|  | [optional]
 **merAccBankName** | **string**|  | [optional]
 **merAccBankCode** | **string**|  | [optional]
 **merAccPhone** | **string**|  | [optional]
 **merAccBankProvince** | **string**|  | [optional]
 **merAccBankCity** | **string**|  | [optional]
 **picPerWithId** | **string**|  | [optional]
 **picOpenPermit** | **string**|  | [optional]
 **picSupplement** | **string**|  | [optional]
 **picShopInside** | **string**|  | [optional]
 **picCashier** | **string**|  | [optional]
 **picPlatform** | **string**|  | [optional]
 **picAtaMaterial** | **string**|  | [optional]
 **merchantLicensePicUrl** | **string**|  | [optional]
 **merchantLicenseNo** | **string**|  | [optional]
 **merchantShopPicUrl** | **string**|  | [optional]
 **externalId** | **string**|  | [optional]
 **appKey** | **string**|  | [optional]
 **reportMerchantName** | **string**|  | [optional]
 **reportMerchantAlias** | **string**|  | [optional]
 **merchantAddress** | **string**|  | [optional]
 **merchantProvince** | **string**|  | [optional]
 **merchantCity** | **string**|  | [optional]
 **merchantDistrict** | **string**|  | [optional]
 **secondCategoryCode** | **string**|  | [optional]
 **contactType** | **string**|  | [optional]
 **merchantType** | **string**|  | [optional]
 **picCertificateFile** | **string**|  | [optional]
 **picDiplomaticNote** | **string**|  | [optional]
 **picPrivateNonenterpriseUnits** | **string**|  | [optional]
 **picChargeSample** | **string**|  | [optional]
 **picMedicalInstrumentPracticeLicense** | **string**|  | [optional]
 **picLegalPersonRegistration** | **string**|  | [optional]
 **picOrgCert** | **string**|  | [optional]
 **picRunSchoolLicense** | **string**|  | [optional]
 **picLegalPerson** | **string**|  | [optional]
 **picInstitutionalOrganization** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\New-retail\Model\MarketingRespDTO**](../Model/MarketingRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **marketingQueryOpenId**
MarketingQueryOpenIdResponse marketingQueryOpenId(MarketingQueryOpenIdRequest request)

openid查询

<p>用户扫码场景下使用，如果商户希望获取该用户在微信的用户标识（openid）可调用本接口获取</p> <p>本接口只适用于商户扫码场景，其余场景无效</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\New-retail\NewRetailClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\New-retail\Model\MarketingQueryOpenIdRequest();
$request->setMerNo("merNo_example");
$request->setAppId("appId_example");
$request->setAuthCode("authCode_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->marketingQueryOpenId($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NewRetailClient->marketingQueryOpenId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merNo** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **authCode** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\New-retail\Model\MarketingOpenIdRespDTO**](../Model/MarketingOpenIdRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **marketingQueryresultPublic**
MarketingQueryresultPublicResponse marketingQueryresultPublic(MarketingQueryresultPublicRequest request)

蓝海绿洲报名查询公共版

<p>蓝海绿洲报备查询接口</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\New-retail\NewRetailClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\New-retail\Model\MarketingQueryresultPublicRequest();
$request->setMerchantNos(array("merchantNos_example"));
$request->setSceneTypes(array("sceneTypes_example"));
$request->setPromotionTypes(array("promotionTypes_example"));
$request->setBankCodes(array("bankCodes_example"));
$request->setReportFees(array("reportFees_example"));
$request->setAppKey("appKey_example");

try {
    $response = $api_client->marketingQueryresultPublic($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NewRetailClient->marketingQueryresultPublic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNos** | [**string[]**](../Model/string.md)|  | [optional]
 **sceneTypes** | [**string[]**](../Model/string.md)|  | [optional]
 **promotionTypes** | [**string[]**](../Model/string.md)|  | [optional]
 **bankCodes** | [**string[]**](../Model/string.md)|  | [optional]
 **reportFees** | [**string[]**](../Model/string.md)|  | [optional]
 **appKey** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\New-retail\Model\PrepareQueryRespDTO**](../Model/PrepareQueryRespDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

