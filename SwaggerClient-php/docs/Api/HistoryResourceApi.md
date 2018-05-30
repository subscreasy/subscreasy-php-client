# Swagger\Client\HistoryResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createHistoryUsingPOST**](HistoryResourceApi.md#createHistoryUsingPOST) | **POST** /api/histories | createHistory
[**deleteHistoryUsingDELETE**](HistoryResourceApi.md#deleteHistoryUsingDELETE) | **DELETE** /api/histories/{id} | deleteHistory
[**getAllHistoriesUsingGET**](HistoryResourceApi.md#getAllHistoriesUsingGET) | **GET** /api/histories | getAllHistories
[**getHistoryUsingGET**](HistoryResourceApi.md#getHistoryUsingGET) | **GET** /api/histories/{id} | getHistory
[**updateHistoryUsingPUT**](HistoryResourceApi.md#updateHistoryUsingPUT) | **PUT** /api/histories | updateHistory


# **createHistoryUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\History createHistoryUsingPOST($history)

createHistory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\HistoryResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$history = new \Swagger\Client\com.kodfarki.subscreasy.client.model\History(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\History | history

try {
    $result = $apiInstance->createHistoryUsingPOST($history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryResourceApi->createHistoryUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **history** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\History**](../Model/History.md)| history |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\History**](../Model/History.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHistoryUsingDELETE**
> deleteHistoryUsingDELETE($id)

deleteHistory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\HistoryResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteHistoryUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling HistoryResourceApi->deleteHistoryUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllHistoriesUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\History[] getAllHistoriesUsingGET()

getAllHistories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\HistoryResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllHistoriesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryResourceApi->getAllHistoriesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\History[]**](../Model/History.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoryUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\History getHistoryUsingGET($id)

getHistory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\HistoryResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getHistoryUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryResourceApi->getHistoryUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\History**](../Model/History.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHistoryUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\History updateHistoryUsingPUT($history)

updateHistory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\HistoryResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$history = new \Swagger\Client\com.kodfarki.subscreasy.client.model\History(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\History | history

try {
    $result = $apiInstance->updateHistoryUsingPUT($history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryResourceApi->updateHistoryUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **history** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\History**](../Model/History.md)| history |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\History**](../Model/History.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

