# Swagger\Client\WebHookResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebHookUsingPOST**](WebHookResourceApi.md#createWebHookUsingPOST) | **POST** /api/web-hooks | createWebHook
[**deleteWebHookUsingDELETE**](WebHookResourceApi.md#deleteWebHookUsingDELETE) | **DELETE** /api/web-hooks/{id} | deleteWebHook
[**getAllWebHooksUsingGET**](WebHookResourceApi.md#getAllWebHooksUsingGET) | **GET** /api/web-hooks | getAllWebHooks
[**getWebHookUsingGET**](WebHookResourceApi.md#getWebHookUsingGET) | **GET** /api/web-hooks/{id} | getWebHook
[**updateWebHookUsingPUT**](WebHookResourceApi.md#updateWebHookUsingPUT) | **PUT** /api/web-hooks | updateWebHook


# **createWebHookUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook createWebHookUsingPOST($web_hook)

createWebHook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebHookResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_hook = new \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook | webHook

try {
    $result = $apiInstance->createWebHookUsingPOST($web_hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookResourceApi->createWebHookUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_hook** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook**](../Model/WebHook.md)| webHook |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook**](../Model/WebHook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebHookUsingDELETE**
> deleteWebHookUsingDELETE($id)

deleteWebHook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebHookResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteWebHookUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling WebHookResourceApi->deleteWebHookUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllWebHooksUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook[] getAllWebHooksUsingGET()

getAllWebHooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebHookResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllWebHooksUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookResourceApi->getAllWebHooksUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook[]**](../Model/WebHook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebHookUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook getWebHookUsingGET($id)

getWebHook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebHookResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getWebHookUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookResourceApi->getWebHookUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook**](../Model/WebHook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebHookUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook updateWebHookUsingPUT($web_hook)

updateWebHook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebHookResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_hook = new \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook | webHook

try {
    $result = $apiInstance->updateWebHookUsingPUT($web_hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookResourceApi->updateWebHookUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_hook** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook**](../Model/WebHook.md)| webHook |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHook**](../Model/WebHook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

