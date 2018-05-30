# Swagger\Client\SubscriberResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubscriberUsingPOST**](SubscriberResourceApi.md#createSubscriberUsingPOST) | **POST** /api/subscribers | createSubscriber
[**deleteSubscriberUsingDELETE**](SubscriberResourceApi.md#deleteSubscriberUsingDELETE) | **DELETE** /api/subscribers/{id} | deleteSubscriber
[**getAllSubscribersUsingGET**](SubscriberResourceApi.md#getAllSubscribersUsingGET) | **GET** /api/subscribers | getAllSubscribers
[**getSubscriberByEmailUsingGET**](SubscriberResourceApi.md#getSubscriberByEmailUsingGET) | **GET** /api/subscribers/email/{email} | getSubscriberByEmail
[**getSubscriberByNameUsingGET**](SubscriberResourceApi.md#getSubscriberByNameUsingGET) | **GET** /api/subscribers/name/{name} | getSubscriberByName
[**getSubscriberUsingGET**](SubscriberResourceApi.md#getSubscriberUsingGET) | **GET** /api/subscribers/{id} | getSubscriber
[**updateSubscriberUsingPUT**](SubscriberResourceApi.md#updateSubscriberUsingPUT) | **PUT** /api/subscribers | updateSubscriber


# **createSubscriberUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber createSubscriberUsingPOST($subscriber)

createSubscriber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriberResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriber = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber | subscriber

try {
    $result = $apiInstance->createSubscriberUsingPOST($subscriber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberResourceApi->createSubscriberUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriber** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber**](../Model/Subscriber.md)| subscriber |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber**](../Model/Subscriber.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscriberUsingDELETE**
> deleteSubscriberUsingDELETE($id)

deleteSubscriber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriberResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteSubscriberUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberResourceApi->deleteSubscriberUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllSubscribersUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber[] getAllSubscribersUsingGET()

getAllSubscribers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriberResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllSubscribersUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberResourceApi->getAllSubscribersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber[]**](../Model/Subscriber.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriberByEmailUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber[] getSubscriberByEmailUsingGET($email)

getSubscriberByEmail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriberResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | email

try {
    $result = $apiInstance->getSubscriberByEmailUsingGET($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberResourceApi->getSubscriberByEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| email |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber[]**](../Model/Subscriber.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriberByNameUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber[] getSubscriberByNameUsingGET($name)

getSubscriberByName

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriberResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | name

try {
    $result = $apiInstance->getSubscriberByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberResourceApi->getSubscriberByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber[]**](../Model/Subscriber.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriberUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber getSubscriberUsingGET($id)

getSubscriber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriberResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getSubscriberUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberResourceApi->getSubscriberUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber**](../Model/Subscriber.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscriberUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber updateSubscriberUsingPUT($subscriber)

updateSubscriber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriberResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriber = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber | subscriber

try {
    $result = $apiInstance->updateSubscriberUsingPUT($subscriber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberResourceApi->updateSubscriberUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriber** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber**](../Model/Subscriber.md)| subscriber |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber**](../Model/Subscriber.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

