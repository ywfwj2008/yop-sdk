# Yeepay\Yop\Sdk\CloudAccount

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountTransferQueryTransfer**](CloudAccount.md#accountTransferQueryTransfer) | **POST** /rest/v1.0/cloud-account/account-transfer/query-transfer | 公对公转账查询
[**accountTransferTransfer**](CloudAccount.md#accountTransferTransfer) | **POST** /rest/v1.0/cloud-account/account-transfer/transfer | 公对公转账


# **accountTransferQueryTransfer**
AccountTransferQueryTransferResponse accountTransferQueryTransfer(AccountTransferQueryTransferRequest request)

公对公转账查询

/rest/v1.0/cloud-account/account-transfer/query-transfer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cloud-account\CloudAccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cloud-account\Model\AccountTransferQueryTransferRequest();
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->accountTransferQueryTransfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CloudAccountClient->accountTransferQueryTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cloud-account\Model\TransferResultDTO**](../Model/TransferResultDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountTransferTransfer**
AccountTransferTransferResponse accountTransferTransfer(AccountTransferTransferRequest request)

公对公转账

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cloud-account\CloudAccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cloud-account\Model\AccountTransferTransferRequest();
$request->setAmount(1.2);
$request->setCreditCustomerNo("creditCustomerNo_example");
$request->setRequestNo("requestNo_example");
$request->setUsage("usage_example");

try {
    $response = $api_client->accountTransferTransfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CloudAccountClient->accountTransferTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amount** | **float**|  | [optional]
 **creditCustomerNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **usage** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cloud-account\Model\TransferResultDTO**](../Model/TransferResultDTO.md)
### Authorization

YOP-RSA2048-SHA256


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

