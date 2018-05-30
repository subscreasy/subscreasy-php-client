# Swagger\Client\ServiceResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServiceUsingPOST**](ServiceResourceApi.md#createServiceUsingPOST) | **POST** /api/services | createService
[**deleteServiceUsingDELETE**](ServiceResourceApi.md#deleteServiceUsingDELETE) | **DELETE** /api/services/{id} | deleteService
[**getAllServicesUsingGET**](ServiceResourceApi.md#getAllServicesUsingGET) | **GET** /api/services | getAllServices
[**getServiceUsingGET**](ServiceResourceApi.md#getServiceUsingGET) | **GET** /api/services/{id} | getService
[**updateServiceUsingPUT**](ServiceResourceApi.md#updateServiceUsingPUT) | **PUT** /api/services | updateService


# **createServiceUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Service createServiceUsingPOST($service)

createService

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Service(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Service | service

try {
    $result = $apiInstance->createServiceUsingPOST($service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceResourceApi->createServiceUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Service**](../Model/Service.md)| service |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Service**](../Model/Service.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteServiceUsingDELETE**
> deleteServiceUsingDELETE($id)

deleteService

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteServiceUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceResourceApi->deleteServiceUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllServicesUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Service[] getAllServicesUsingGET()

getAllServices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllServicesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceResourceApi->getAllServicesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Service[]**](../Model/Service.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServiceUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Service getServiceUsingGET($id)

getService

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getServiceUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceResourceApi->getServiceUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Service**](../Model/Service.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateServiceUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Service updateServiceUsingPUT($service)

updateService

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Service(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Service | service

try {
    $result = $apiInstance->updateServiceUsingPUT($service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceResourceApi->updateServiceUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Service**](../Model/Service.md)| service |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Service**](../Model/Service.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

