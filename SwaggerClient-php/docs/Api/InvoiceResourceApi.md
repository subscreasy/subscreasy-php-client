# Swagger\Client\InvoiceResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInvoiceUsingPOST**](InvoiceResourceApi.md#createInvoiceUsingPOST) | **POST** /api/invoices | createInvoice
[**deleteInvoiceUsingDELETE**](InvoiceResourceApi.md#deleteInvoiceUsingDELETE) | **DELETE** /api/invoices/{id} | deleteInvoice
[**getAllInvoicesUsingGET**](InvoiceResourceApi.md#getAllInvoicesUsingGET) | **GET** /api/invoices | getAllInvoices
[**getInvoiceBySubscriberUsingGET**](InvoiceResourceApi.md#getInvoiceBySubscriberUsingGET) | **GET** /api/invoices/subscriber/{subscriberSecureId} | getInvoiceBySubscriber
[**getInvoiceUsingGET**](InvoiceResourceApi.md#getInvoiceUsingGET) | **GET** /api/invoices/{id} | getInvoice
[**updateInvoiceUsingPUT**](InvoiceResourceApi.md#updateInvoiceUsingPUT) | **PUT** /api/invoices | updateInvoice


# **createInvoiceUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice createInvoiceUsingPOST($invoice)

createInvoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice | invoice

try {
    $result = $apiInstance->createInvoiceUsingPOST($invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceResourceApi->createInvoiceUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice**](../Model/Invoice.md)| invoice |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoiceUsingDELETE**
> deleteInvoiceUsingDELETE($id)

deleteInvoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteInvoiceUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceResourceApi->deleteInvoiceUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllInvoicesUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice[] getAllInvoicesUsingGET()

getAllInvoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllInvoicesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceResourceApi->getAllInvoicesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice[]**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceBySubscriberUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice[] getInvoiceBySubscriberUsingGET($subscriber_secure_id)

getInvoiceBySubscriber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriber_secure_id = "subscriber_secure_id_example"; // string | subscriberSecureId

try {
    $result = $apiInstance->getInvoiceBySubscriberUsingGET($subscriber_secure_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceResourceApi->getInvoiceBySubscriberUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriber_secure_id** | **string**| subscriberSecureId |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice[]**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice getInvoiceUsingGET($id)

getInvoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getInvoiceUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceResourceApi->getInvoiceUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoiceUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice updateInvoiceUsingPUT($invoice)

updateInvoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoiceResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice | invoice

try {
    $result = $apiInstance->updateInvoiceUsingPUT($invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceResourceApi->updateInvoiceUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice**](../Model/Invoice.md)| invoice |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

