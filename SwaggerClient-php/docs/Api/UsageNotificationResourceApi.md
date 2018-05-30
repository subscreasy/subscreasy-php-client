# Swagger\Client\UsageNotificationResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUsageNotificationUsingPOST**](UsageNotificationResourceApi.md#createUsageNotificationUsingPOST) | **POST** /api/usage-notifications | createUsageNotification
[**deleteUsageNotificationUsingDELETE**](UsageNotificationResourceApi.md#deleteUsageNotificationUsingDELETE) | **DELETE** /api/usage-notifications/{id} | deleteUsageNotification
[**getAllUsageNotificationsUsingGET**](UsageNotificationResourceApi.md#getAllUsageNotificationsUsingGET) | **GET** /api/usage-notifications | getAllUsageNotifications
[**getUsageNotificationUsingGET**](UsageNotificationResourceApi.md#getUsageNotificationUsingGET) | **GET** /api/usage-notifications/{id} | getUsageNotification
[**updateUsageNotificationUsingPUT**](UsageNotificationResourceApi.md#updateUsageNotificationUsingPUT) | **PUT** /api/usage-notifications | updateUsageNotification


# **createUsageNotificationUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification createUsageNotificationUsingPOST($usage_notification)

createUsageNotification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\UsageNotificationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usage_notification = new \Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification | usageNotification

try {
    $result = $apiInstance->createUsageNotificationUsingPOST($usage_notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageNotificationResourceApi->createUsageNotificationUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usage_notification** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification**](../Model/UsageNotification.md)| usageNotification |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification**](../Model/UsageNotification.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUsageNotificationUsingDELETE**
> deleteUsageNotificationUsingDELETE($id)

deleteUsageNotification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\UsageNotificationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteUsageNotificationUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling UsageNotificationResourceApi->deleteUsageNotificationUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllUsageNotificationsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification[] getAllUsageNotificationsUsingGET()

getAllUsageNotifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\UsageNotificationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllUsageNotificationsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageNotificationResourceApi->getAllUsageNotificationsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification[]**](../Model/UsageNotification.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageNotificationUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification getUsageNotificationUsingGET($id)

getUsageNotification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\UsageNotificationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getUsageNotificationUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageNotificationResourceApi->getUsageNotificationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification**](../Model/UsageNotification.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUsageNotificationUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification updateUsageNotificationUsingPUT($usage_notification)

updateUsageNotification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\UsageNotificationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usage_notification = new \Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification | usageNotification

try {
    $result = $apiInstance->updateUsageNotificationUsingPUT($usage_notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageNotificationResourceApi->updateUsageNotificationUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usage_notification** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification**](../Model/UsageNotification.md)| usageNotification |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\UsageNotification**](../Model/UsageNotification.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

