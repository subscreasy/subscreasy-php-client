# Swagger\Client\OrderItemResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderItemUsingPOST**](OrderItemResourceApi.md#createOrderItemUsingPOST) | **POST** /api/order-items | createOrderItem
[**deleteOrderItemUsingDELETE**](OrderItemResourceApi.md#deleteOrderItemUsingDELETE) | **DELETE** /api/order-items/{id} | deleteOrderItem
[**getAllOrderItemsUsingGET**](OrderItemResourceApi.md#getAllOrderItemsUsingGET) | **GET** /api/order-items | getAllOrderItems
[**getOrderItemUsingGET**](OrderItemResourceApi.md#getOrderItemUsingGET) | **GET** /api/order-items/{id} | getOrderItem
[**updateOrderItemUsingPUT**](OrderItemResourceApi.md#updateOrderItemUsingPUT) | **PUT** /api/order-items | updateOrderItem


# **createOrderItemUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem createOrderItemUsingPOST($order_item)

createOrderItem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrderItemResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item = new \Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem | orderItem

try {
    $result = $apiInstance->createOrderItemUsingPOST($order_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemResourceApi->createOrderItemUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_item** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem**](../Model/OrderItem.md)| orderItem |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem**](../Model/OrderItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderItemUsingDELETE**
> deleteOrderItemUsingDELETE($id)

deleteOrderItem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrderItemResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteOrderItemUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemResourceApi->deleteOrderItemUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllOrderItemsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem[] getAllOrderItemsUsingGET()

getAllOrderItems

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrderItemResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllOrderItemsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemResourceApi->getAllOrderItemsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem[]**](../Model/OrderItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderItemUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem getOrderItemUsingGET($id)

getOrderItem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrderItemResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getOrderItemUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemResourceApi->getOrderItemUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem**](../Model/OrderItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderItemUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem updateOrderItemUsingPUT($order_item)

updateOrderItem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrderItemResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item = new \Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem | orderItem

try {
    $result = $apiInstance->updateOrderItemUsingPUT($order_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemResourceApi->updateOrderItemUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_item** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem**](../Model/OrderItem.md)| orderItem |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\OrderItem**](../Model/OrderItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

