# Swagger\Client\CardResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saveCardUsingPOST**](CardResourceApi.md#saveCardUsingPOST) | **POST** /api/card | saveCard


# **saveCardUsingPOST**
> object saveCardUsingPOST($request)

saveCard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\com.kodfarki.subscreasy.client.model\SaveCardRequest(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\SaveCardRequest | request

try {
    $result = $apiInstance->saveCardUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardResourceApi->saveCardUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\SaveCardRequest**](../Model/SaveCardRequest.md)| request |

### Return type

**object**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

