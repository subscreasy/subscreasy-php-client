# Swagger\Client\WebHookServerApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentUpdatedUsingPOST**](WebHookServerApi.md#paymentUpdatedUsingPOST) | **POST** /subscreasy/webhook/payment-updated | paymentUpdated
[**subscriberCreatedUsingPOST**](WebHookServerApi.md#subscriberCreatedUsingPOST) | **POST** /subscreasy/webhook/subscriber-created | subscriberCreated
[**subscriberUpdatedUsingPOST**](WebHookServerApi.md#subscriberUpdatedUsingPOST) | **POST** /subscreasy/webhook/subscriber-updated | subscriberUpdated
[**subscriptionEndedUsingPOST**](WebHookServerApi.md#subscriptionEndedUsingPOST) | **POST** /subscreasy/webhook/subscription-ended | subscriptionEnded
[**subscriptionRenewalFailedUsingPOST**](WebHookServerApi.md#subscriptionRenewalFailedUsingPOST) | **POST** /subscreasy/webhook/subscription-renewal-failed | subscriptionRenewalFailed
[**subscriptionRenewedUsingPOST**](WebHookServerApi.md#subscriptionRenewedUsingPOST) | **POST** /subscreasy/webhook/subscription-renewed | subscriptionRenewed
[**subscriptionStartedUsingPOST**](WebHookServerApi.md#subscriptionStartedUsingPOST) | **POST** /subscreasy/webhook/subscription-started | subscriptionStarted


# **paymentUpdatedUsingPOST**
> object paymentUpdatedUsingPOST($r)

paymentUpdated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebHookServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$r = new \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest | r

try {
    $result = $apiInstance->paymentUpdatedUsingPOST($r);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookServerApi->paymentUpdatedUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **r** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest**](../Model/WebHookRequest.md)| r |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriberCreatedUsingPOST**
> object subscriberCreatedUsingPOST($r)

subscriberCreated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebHookServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$r = new \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest | r

try {
    $result = $apiInstance->subscriberCreatedUsingPOST($r);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookServerApi->subscriberCreatedUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **r** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest**](../Model/WebHookRequest.md)| r |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriberUpdatedUsingPOST**
> object subscriberUpdatedUsingPOST($r)

subscriberUpdated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebHookServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$r = new \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest | r

try {
    $result = $apiInstance->subscriberUpdatedUsingPOST($r);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookServerApi->subscriberUpdatedUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **r** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest**](../Model/WebHookRequest.md)| r |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionEndedUsingPOST**
> object subscriptionEndedUsingPOST($r)

subscriptionEnded

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebHookServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$r = new \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest | r

try {
    $result = $apiInstance->subscriptionEndedUsingPOST($r);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookServerApi->subscriptionEndedUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **r** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest**](../Model/WebHookRequest.md)| r |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRenewalFailedUsingPOST**
> object subscriptionRenewalFailedUsingPOST($r)

subscriptionRenewalFailed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebHookServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$r = new \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest | r

try {
    $result = $apiInstance->subscriptionRenewalFailedUsingPOST($r);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookServerApi->subscriptionRenewalFailedUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **r** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest**](../Model/WebHookRequest.md)| r |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRenewedUsingPOST**
> object subscriptionRenewedUsingPOST($r)

subscriptionRenewed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebHookServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$r = new \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest | r

try {
    $result = $apiInstance->subscriptionRenewedUsingPOST($r);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookServerApi->subscriptionRenewedUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **r** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest**](../Model/WebHookRequest.md)| r |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionStartedUsingPOST**
> object subscriptionStartedUsingPOST($r)

subscriptionStarted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebHookServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$r = new \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest | r

try {
    $result = $apiInstance->subscriptionStartedUsingPOST($r);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHookServerApi->subscriptionStartedUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **r** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\WebHookRequest**](../Model/WebHookRequest.md)| r |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

