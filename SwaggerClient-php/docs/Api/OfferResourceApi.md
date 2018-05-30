# Swagger\Client\OfferResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOfferUsingPOST**](OfferResourceApi.md#createOfferUsingPOST) | **POST** /api/offers | createOffer
[**deleteOfferUsingDELETE**](OfferResourceApi.md#deleteOfferUsingDELETE) | **DELETE** /api/offers/{id} | deleteOffer
[**getAllOffersUsingGET**](OfferResourceApi.md#getAllOffersUsingGET) | **GET** /api/offers | getAllOffers
[**getOfferUsingGET**](OfferResourceApi.md#getOfferUsingGET) | **GET** /api/offers/{id} | getOffer
[**updateOfferUsingPUT**](OfferResourceApi.md#updateOfferUsingPUT) | **PUT** /api/offers | updateOffer


# **createOfferUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Offer createOfferUsingPOST($offer)

createOffer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OfferResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Offer(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Offer | offer

try {
    $result = $apiInstance->createOfferUsingPOST($offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferResourceApi->createOfferUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Offer**](../Model/Offer.md)| offer |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Offer**](../Model/Offer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOfferUsingDELETE**
> deleteOfferUsingDELETE($id)

deleteOffer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OfferResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteOfferUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling OfferResourceApi->deleteOfferUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllOffersUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Offer[] getAllOffersUsingGET()

getAllOffers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OfferResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllOffersUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferResourceApi->getAllOffersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Offer[]**](../Model/Offer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOfferUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Offer getOfferUsingGET($id)

getOffer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OfferResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getOfferUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferResourceApi->getOfferUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Offer**](../Model/Offer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOfferUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Offer updateOfferUsingPUT($offer)

updateOffer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OfferResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Offer(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Offer | offer

try {
    $result = $apiInstance->updateOfferUsingPUT($offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferResourceApi->updateOfferUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Offer**](../Model/Offer.md)| offer |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Offer**](../Model/Offer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

