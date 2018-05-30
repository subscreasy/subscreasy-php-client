# Swagger\Client\ServiceInstanceResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServiceInstanceUsingPOST**](ServiceInstanceResourceApi.md#createServiceInstanceUsingPOST) | **POST** /api/service-instances | createServiceInstance
[**deleteServiceInstanceUsingDELETE**](ServiceInstanceResourceApi.md#deleteServiceInstanceUsingDELETE) | **DELETE** /api/service-instances/{id} | deleteServiceInstance
[**getAllServiceInstancesUsingGET**](ServiceInstanceResourceApi.md#getAllServiceInstancesUsingGET) | **GET** /api/service-instances | getAllServiceInstances
[**getServiceInstanceUsingGET**](ServiceInstanceResourceApi.md#getServiceInstanceUsingGET) | **GET** /api/service-instances/{id} | getServiceInstance
[**updateServiceInstanceUsingPUT**](ServiceInstanceResourceApi.md#updateServiceInstanceUsingPUT) | **PUT** /api/service-instances | updateServiceInstance


# **createServiceInstanceUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance createServiceInstanceUsingPOST($service_instance)

createServiceInstance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceInstanceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_instance = new \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance | serviceInstance

try {
    $result = $apiInstance->createServiceInstanceUsingPOST($service_instance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstanceResourceApi->createServiceInstanceUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_instance** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance**](../Model/ServiceInstance.md)| serviceInstance |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance**](../Model/ServiceInstance.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteServiceInstanceUsingDELETE**
> deleteServiceInstanceUsingDELETE($id)

deleteServiceInstance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceInstanceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteServiceInstanceUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstanceResourceApi->deleteServiceInstanceUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllServiceInstancesUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance[] getAllServiceInstancesUsingGET()

getAllServiceInstances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceInstanceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllServiceInstancesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstanceResourceApi->getAllServiceInstancesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance[]**](../Model/ServiceInstance.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServiceInstanceUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance getServiceInstanceUsingGET($id)

getServiceInstance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceInstanceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getServiceInstanceUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstanceResourceApi->getServiceInstanceUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance**](../Model/ServiceInstance.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateServiceInstanceUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance updateServiceInstanceUsingPUT($service_instance)

updateServiceInstance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceInstanceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_instance = new \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance | serviceInstance

try {
    $result = $apiInstance->updateServiceInstanceUsingPUT($service_instance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstanceResourceApi->updateServiceInstanceUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_instance** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance**](../Model/ServiceInstance.md)| serviceInstance |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstance**](../Model/ServiceInstance.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

