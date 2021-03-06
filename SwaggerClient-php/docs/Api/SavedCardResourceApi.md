# Swagger\Client\SavedCardResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCardUsingPOST**](SavedCardResourceApi.md#createCardUsingPOST) | **POST** /api/saved-cards | createCard
[**deleteCardUsingDELETE**](SavedCardResourceApi.md#deleteCardUsingDELETE) | **DELETE** /api/saved-cards/{id} | deleteCard
[**getAllCardsUsingGET**](SavedCardResourceApi.md#getAllCardsUsingGET) | **GET** /api/saved-cards | getAllCards
[**getCardUsingGET**](SavedCardResourceApi.md#getCardUsingGET) | **GET** /api/saved-cards/{id} | getCard
[**updateCardUsingPUT**](SavedCardResourceApi.md#updateCardUsingPUT) | **PUT** /api/saved-cards | updateCard


# **createCardUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard createCardUsingPOST($card)

createCard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SavedCardResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card = new \Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard | card

try {
    $result = $apiInstance->createCardUsingPOST($card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedCardResourceApi->createCardUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard**](../Model/SavedCard.md)| card |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard**](../Model/SavedCard.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCardUsingDELETE**
> deleteCardUsingDELETE($id)

deleteCard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SavedCardResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteCardUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling SavedCardResourceApi->deleteCardUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllCardsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard[] getAllCardsUsingGET()

getAllCards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SavedCardResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllCardsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedCardResourceApi->getAllCardsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard[]**](../Model/SavedCard.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCardUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard getCardUsingGET($id)

getCard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SavedCardResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getCardUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedCardResourceApi->getCardUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard**](../Model/SavedCard.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCardUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard updateCardUsingPUT($card)

updateCard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SavedCardResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card = new \Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard | card

try {
    $result = $apiInstance->updateCardUsingPUT($card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedCardResourceApi->updateCardUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard**](../Model/SavedCard.md)| card |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard**](../Model/SavedCard.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

