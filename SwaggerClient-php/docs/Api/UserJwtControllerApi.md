# Swagger\Client\UserJwtControllerApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorizeUsingPOST**](UserJwtControllerApi.md#authorizeUsingPOST) | **POST** /api/authenticate | authorize


# **authorizeUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ResponseEntity authorizeUsingPOST($login_vm)

authorize

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\UserJwtControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_vm = new \Swagger\Client\com.kodfarki.subscreasy.client.model\LoginVM(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\LoginVM | loginVM

try {
    $result = $apiInstance->authorizeUsingPOST($login_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserJwtControllerApi->authorizeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_vm** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\LoginVM**](../Model/LoginVM.md)| loginVM |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

