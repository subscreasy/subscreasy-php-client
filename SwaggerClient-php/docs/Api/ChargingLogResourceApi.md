# Swagger\Client\ChargingLogResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChargingLogUsingPOST**](ChargingLogResourceApi.md#createChargingLogUsingPOST) | **POST** /api/charging-logs | createChargingLog
[**deleteChargingLogUsingDELETE**](ChargingLogResourceApi.md#deleteChargingLogUsingDELETE) | **DELETE** /api/charging-logs/{id} | deleteChargingLog
[**getAllChargingLogsUsingGET**](ChargingLogResourceApi.md#getAllChargingLogsUsingGET) | **GET** /api/charging-logs | getAllChargingLogs
[**getChargingLogUsingGET**](ChargingLogResourceApi.md#getChargingLogUsingGET) | **GET** /api/charging-logs/{id} | getChargingLog
[**refundUsingPOST**](ChargingLogResourceApi.md#refundUsingPOST) | **POST** /api/charging-logs/refund/{chargingLogId} | refund
[**updateChargingLogUsingPUT**](ChargingLogResourceApi.md#updateChargingLogUsingPUT) | **PUT** /api/charging-logs | updateChargingLog


# **createChargingLogUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog createChargingLogUsingPOST($charging_log)

createChargingLog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChargingLogResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charging_log = new \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog | chargingLog

try {
    $result = $apiInstance->createChargingLogUsingPOST($charging_log);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargingLogResourceApi->createChargingLogUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charging_log** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog**](../Model/ChargingLog.md)| chargingLog |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog**](../Model/ChargingLog.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChargingLogUsingDELETE**
> deleteChargingLogUsingDELETE($id)

deleteChargingLog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChargingLogResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteChargingLogUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling ChargingLogResourceApi->deleteChargingLogUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllChargingLogsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog[] getAllChargingLogsUsingGET($page, $size, $sort)

getAllChargingLogs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChargingLogResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number of the requested page
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.

try {
    $result = $apiInstance->getAllChargingLogsUsingGET($page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargingLogResourceApi->getAllChargingLogsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the requested page | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog[]**](../Model/ChargingLog.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChargingLogUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog getChargingLogUsingGET($id)

getChargingLog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChargingLogResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getChargingLogUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargingLogResourceApi->getChargingLogUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog**](../Model/ChargingLog.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog refundUsingPOST($charging_log_id)

refund

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChargingLogResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charging_log_id = 789; // int | chargingLogId

try {
    $result = $apiInstance->refundUsingPOST($charging_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargingLogResourceApi->refundUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charging_log_id** | **int**| chargingLogId |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog**](../Model/ChargingLog.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChargingLogUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog updateChargingLogUsingPUT($charging_log)

updateChargingLog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChargingLogResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charging_log = new \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog | chargingLog

try {
    $result = $apiInstance->updateChargingLogUsingPUT($charging_log);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargingLogResourceApi->updateChargingLogUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charging_log** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog**](../Model/ChargingLog.md)| chargingLog |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog**](../Model/ChargingLog.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

