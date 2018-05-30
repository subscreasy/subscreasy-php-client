# Swagger\Client\EndpointsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorizeUsingPUT**](EndpointsApi.md#authorizeUsingPUT) | **PUT** /api/authorize | authorize
[**deductUsingPUT**](EndpointsApi.md#deductUsingPUT) | **PUT** /api/deduct | deduct
[**getAuthorizedServicesUsingGET**](EndpointsApi.md#getAuthorizedServicesUsingGET) | **GET** /api/service/subscriber/{secureId} | getAuthorizedServices
[**getChargingLogBySubscriptionUsingGET**](EndpointsApi.md#getChargingLogBySubscriptionUsingGET) | **GET** /api/charging-logs/subscription/{id} | getChargingLogBySubscription
[**getCustomerTotalAmountUsingGET**](EndpointsApi.md#getCustomerTotalAmountUsingGET) | **GET** /api/customer-totalAmountCharge/{id} | getCustomerTotalAmount
[**getInvoiceDetailsUsingGET**](EndpointsApi.md#getInvoiceDetailsUsingGET) | **GET** /api/getInvoiceDetails | getInvoiceDetails
[**getMessageTemplateUsingGET**](EndpointsApi.md#getMessageTemplateUsingGET) | **GET** /api/message-templates/email/{lifecycleEventName} | getMessageTemplate
[**getServiceInstancesBySubscriptionUsingGET**](EndpointsApi.md#getServiceInstancesBySubscriptionUsingGET) | **GET** /api/service-instances/subscription/{id} | getServiceInstancesBySubscription
[**getServiceOfferingsBySubscriptionPlanUsingGET**](EndpointsApi.md#getServiceOfferingsBySubscriptionPlanUsingGET) | **GET** /api/service-offerings/offer/{id} | getServiceOfferingsBySubscriptionPlan
[**getTotalRevenuePerMonthUsingGET**](EndpointsApi.md#getTotalRevenuePerMonthUsingGET) | **GET** /api/charging-logs-totalamount-customer/{id} | getTotalRevenuePerMonth


# **authorizeUsingPUT**
> bool authorizeUsingPUT($authorization)

authorize

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Authorization(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Authorization | authorization

try {
    $result = $apiInstance->authorizeUsingPUT($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->authorizeUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Authorization**](../Model/Authorization.md)| authorization |

### Return type

**bool**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deductUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\DeductionResult deductUsingPUT($deduction)

deduct

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deduction = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Deduction(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Deduction | deduction

try {
    $result = $apiInstance->deductUsingPUT($deduction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->deductUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deduction** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Deduction**](../Model/Deduction.md)| deduction |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\DeductionResult**](../Model/DeductionResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizedServicesUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\AuthorizedServicesResponse getAuthorizedServicesUsingGET($secure_id)

getAuthorizedServices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$secure_id = "secure_id_example"; // string | secureId

try {
    $result = $apiInstance->getAuthorizedServicesUsingGET($secure_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getAuthorizedServicesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **secure_id** | **string**| secureId |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\AuthorizedServicesResponse**](../Model/AuthorizedServicesResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChargingLogBySubscriptionUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog[] getChargingLogBySubscriptionUsingGET($id)

getChargingLogBySubscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getChargingLogBySubscriptionUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getChargingLogBySubscriptionUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog[]**](../Model/ChargingLog.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerTotalAmountUsingGET**
> int getCustomerTotalAmountUsingGET($id)

getCustomerTotalAmount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id

try {
    $result = $apiInstance->getCustomerTotalAmountUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getCustomerTotalAmountUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

**int**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceDetailsUsingGET**
> object getInvoiceDetailsUsingGET($invoice_request)

getInvoiceDetails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_request = new \Swagger\Client\com.kodfarki.subscreasy.client.model\InvoiceRequest(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\InvoiceRequest | invoiceRequest

try {
    $result = $apiInstance->getInvoiceDetailsUsingGET($invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getInvoiceDetailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_request** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\InvoiceRequest**](../Model/InvoiceRequest.md)| invoiceRequest |

### Return type

**object**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageTemplateUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate getMessageTemplateUsingGET($lifecycle_event_name)

getMessageTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lifecycle_event_name = "lifecycle_event_name_example"; // string | lifecycleEventName

try {
    $result = $apiInstance->getMessageTemplateUsingGET($lifecycle_event_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getMessageTemplateUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lifecycle_event_name** | **string**| lifecycleEventName |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate**](../Model/MessageTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServiceInstancesBySubscriptionUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstanceResult[] getServiceInstancesBySubscriptionUsingGET($id)

getServiceInstancesBySubscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getServiceInstancesBySubscriptionUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getServiceInstancesBySubscriptionUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceInstanceResult[]**](../Model/ServiceInstanceResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServiceOfferingsBySubscriptionPlanUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOfferingResult[] getServiceOfferingsBySubscriptionPlanUsingGET($id)

getServiceOfferingsBySubscriptionPlan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getServiceOfferingsBySubscriptionPlanUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getServiceOfferingsBySubscriptionPlanUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\ServiceOfferingResult[]**](../Model/ServiceOfferingResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTotalRevenuePerMonthUsingGET**
> object[] getTotalRevenuePerMonthUsingGET($id)

getTotalRevenuePerMonth

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getTotalRevenuePerMonthUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getTotalRevenuePerMonthUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

**object[]**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

