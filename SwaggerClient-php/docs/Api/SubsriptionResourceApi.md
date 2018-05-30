# Swagger\Client\SubsriptionResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelSubscriptionUsingPUT**](SubsriptionResourceApi.md#cancelSubscriptionUsingPUT) | **PUT** /api/subscriptions/cancel | cancelSubscription
[**getActiveSubscriptionsUsingGET**](SubsriptionResourceApi.md#getActiveSubscriptionsUsingGET) | **GET** /api/subsriptions/subscriber/{secureId} | getActiveSubscriptions
[**getAllCompanySubscriptionsUsingGET**](SubsriptionResourceApi.md#getAllCompanySubscriptionsUsingGET) | **GET** /api/subscriptions/company/{id} | getAllCompanySubscriptions
[**getSubsriptionUsingGET**](SubsriptionResourceApi.md#getSubsriptionUsingGET) | **GET** /api/subsriptions/{id} | getSubsription
[**startSubscriptionUsingPOST**](SubsriptionResourceApi.md#startSubscriptionUsingPOST) | **POST** /api/subscriptions/start | startSubscription


# **cancelSubscriptionUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription cancelSubscriptionUsingPUT($cancellation)

cancelSubscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubsriptionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancellation = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Cancellation(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Cancellation | cancellation

try {
    $result = $apiInstance->cancelSubscriptionUsingPUT($cancellation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubsriptionResourceApi->cancelSubscriptionUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancellation** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Cancellation**](../Model/Cancellation.md)| cancellation |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription**](../Model/Subsription.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActiveSubscriptionsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription[] getActiveSubscriptionsUsingGET($secure_id)

getActiveSubscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubsriptionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$secure_id = "secure_id_example"; // string | secureId

try {
    $result = $apiInstance->getActiveSubscriptionsUsingGET($secure_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubsriptionResourceApi->getActiveSubscriptionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **secure_id** | **string**| secureId |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription[]**](../Model/Subsription.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCompanySubscriptionsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription[] getAllCompanySubscriptionsUsingGET($id)

getAllCompanySubscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubsriptionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id

try {
    $result = $apiInstance->getAllCompanySubscriptionsUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubsriptionResourceApi->getAllCompanySubscriptionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription[]**](../Model/Subsription.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubsriptionUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription getSubsriptionUsingGET($id)

getSubsription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubsriptionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getSubsriptionUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubsriptionResourceApi->getSubsriptionUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription**](../Model/Subsription.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startSubscriptionUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\SubscriptionCreateResult startSubscriptionUsingPOST($request)

startSubscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubsriptionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\com.kodfarki.subscreasy.client.model\StartSubscriptionRequest(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\StartSubscriptionRequest | request

try {
    $result = $apiInstance->startSubscriptionUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubsriptionResourceApi->startSubscriptionUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\StartSubscriptionRequest**](../Model/StartSubscriptionRequest.md)| request |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\SubscriptionCreateResult**](../Model/SubscriptionCreateResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

