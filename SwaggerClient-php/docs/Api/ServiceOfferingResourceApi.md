# Swagger\Client\ServiceOfferingResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServiceOfferingUsingPOST**](ServiceOfferingResourceApi.md#createServiceOfferingUsingPOST) | **POST** /api/service-offerings | createServiceOffering
[**deleteServiceOfferingUsingDELETE**](ServiceOfferingResourceApi.md#deleteServiceOfferingUsingDELETE) | **DELETE** /api/service-offerings/{id} | deleteServiceOffering
[**getAllServiceOfferingsUsingGET**](ServiceOfferingResourceApi.md#getAllServiceOfferingsUsingGET) | **GET** /api/service-offerings | getAllServiceOfferings
[**getServiceOfferingUsingGET**](ServiceOfferingResourceApi.md#getServiceOfferingUsingGET) | **GET** /api/service-offerings/{id} | getServiceOffering
[**updateServiceOfferingUsingPUT**](ServiceOfferingResourceApi.md#updateServiceOfferingUsingPUT) | **PUT** /api/service-offerings | updateServiceOffering


# **createServiceOfferingUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering createServiceOfferingUsingPOST($service_offering)

createServiceOffering

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceOfferingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_offering = new \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering | serviceOffering

try {
    $result = $apiInstance->createServiceOfferingUsingPOST($service_offering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOfferingResourceApi->createServiceOfferingUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_offering** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering**](../Model/ServiceOffering.md)| serviceOffering |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering**](../Model/ServiceOffering.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteServiceOfferingUsingDELETE**
> deleteServiceOfferingUsingDELETE($id)

deleteServiceOffering

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceOfferingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteServiceOfferingUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOfferingResourceApi->deleteServiceOfferingUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllServiceOfferingsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering[] getAllServiceOfferingsUsingGET()

getAllServiceOfferings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceOfferingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllServiceOfferingsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOfferingResourceApi->getAllServiceOfferingsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering[]**](../Model/ServiceOffering.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServiceOfferingUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering getServiceOfferingUsingGET($id)

getServiceOffering

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceOfferingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getServiceOfferingUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOfferingResourceApi->getServiceOfferingUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering**](../Model/ServiceOffering.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateServiceOfferingUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering updateServiceOfferingUsingPUT($service_offering)

updateServiceOffering

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceOfferingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_offering = new \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering | serviceOffering

try {
    $result = $apiInstance->updateServiceOfferingUsingPUT($service_offering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOfferingResourceApi->updateServiceOfferingUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_offering** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering**](../Model/ServiceOffering.md)| serviceOffering |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOffering**](../Model/ServiceOffering.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

