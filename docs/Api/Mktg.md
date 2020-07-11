# Yeepay\Yop\Sdk\Mktg

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promotionCreate**](Mktg.md#promotionCreate) | **POST** /rest/v1.0/mktg/promotion/create | 创建优惠卡券规则
[**promotionList**](Mktg.md#promotionList) | **POST** /rest/v1.0/mktg/promotion/list | 查询优惠卡券规则
[**promotionUpdate**](Mktg.md#promotionUpdate) | **POST** /rest/v1.0/mktg/promotion/update | 更改优惠卡券规则


# **promotionCreate**
PromotionCreateResponse promotionCreate(PromotionCreateRequest request)

创建优惠卡券规则

主要用于微信等通道类优惠券规则的创建

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\PromotionCreateRequest();
$request->setPromotionType("promotionType_example");
$request->setActivityId("activityId_example");
$request->setSubsidySource("subsidySource_example");
$request->setSubsidyType("subsidyType_example");
$request->setStatus("status_example");
$request->setDiscountAmount("discountAmount_example");

try {
    $response = $api_client->promotionCreate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->promotionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionType** | **string**|  | [optional]
 **activityId** | **string**|  | [optional]
 **subsidySource** | **string**|  | [optional]
 **subsidyType** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **discountAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\PromotionResponseDTO**](../Model/PromotionResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **promotionList**
PromotionListResponse promotionList(PromotionListRequest request)

查询优惠卡券规则

用于查询自己商编下的卡券规则

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\PromotionListRequest();
$request->setQueryPromotionDTOList("queryPromotionDTOList_example");

try {
    $response = $api_client->promotionList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->promotionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queryPromotionDTOList** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\QueryPromotionResponseDTO**](../Model/QueryPromotionResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **promotionUpdate**
PromotionUpdateResponse promotionUpdate(PromotionUpdateRequest request)

更改优惠卡券规则

更改已有的卡券规则

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\PromotionUpdateRequest();
$request->setPromotionType("promotionType_example");
$request->setActivityId("activityId_example");
$request->setSubsidySource("subsidySource_example");
$request->setSubsidyType("subsidyType_example");
$request->setStatus("status_example");
$request->setDiscountAmount("discountAmount_example");

try {
    $response = $api_client->promotionUpdate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->promotionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionType** | **string**|  | [optional]
 **activityId** | **string**|  | [optional]
 **subsidySource** | **string**|  | [optional]
 **subsidyType** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **discountAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\PromotionResponseDTO**](../Model/PromotionResponseDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

