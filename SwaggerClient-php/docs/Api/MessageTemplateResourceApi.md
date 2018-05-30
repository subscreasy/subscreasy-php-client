# Swagger\Client\MessageTemplateResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMessageTemplateUsingPOST**](MessageTemplateResourceApi.md#createMessageTemplateUsingPOST) | **POST** /api/message-templates | createMessageTemplate
[**deleteMessageTemplateUsingDELETE**](MessageTemplateResourceApi.md#deleteMessageTemplateUsingDELETE) | **DELETE** /api/message-templates/{id} | deleteMessageTemplate
[**getAllMessageTemplatesUsingGET**](MessageTemplateResourceApi.md#getAllMessageTemplatesUsingGET) | **GET** /api/message-templates | getAllMessageTemplates
[**getMessageTemplateUsingGET1**](MessageTemplateResourceApi.md#getMessageTemplateUsingGET1) | **GET** /api/message-templates/{id} | getMessageTemplate
[**updateMessageTemplateUsingPUT**](MessageTemplateResourceApi.md#updateMessageTemplateUsingPUT) | **PUT** /api/message-templates | updateMessageTemplate


# **createMessageTemplateUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate createMessageTemplateUsingPOST($message_template)

createMessageTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MessageTemplateResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_template = new \Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate | messageTemplate

try {
    $result = $apiInstance->createMessageTemplateUsingPOST($message_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageTemplateResourceApi->createMessageTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_template** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate**](../Model/MessageTemplate.md)| messageTemplate |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate**](../Model/MessageTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessageTemplateUsingDELETE**
> deleteMessageTemplateUsingDELETE($id)

deleteMessageTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MessageTemplateResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteMessageTemplateUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling MessageTemplateResourceApi->deleteMessageTemplateUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllMessageTemplatesUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate[] getAllMessageTemplatesUsingGET()

getAllMessageTemplates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MessageTemplateResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllMessageTemplatesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageTemplateResourceApi->getAllMessageTemplatesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate[]**](../Model/MessageTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageTemplateUsingGET1**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate getMessageTemplateUsingGET1($id)

getMessageTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MessageTemplateResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getMessageTemplateUsingGET1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageTemplateResourceApi->getMessageTemplateUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate**](../Model/MessageTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMessageTemplateUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate updateMessageTemplateUsingPUT($message_template)

updateMessageTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MessageTemplateResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_template = new \Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate | messageTemplate

try {
    $result = $apiInstance->updateMessageTemplateUsingPUT($message_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageTemplateResourceApi->updateMessageTemplateUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_template** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate**](../Model/MessageTemplate.md)| messageTemplate |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\MessageTemplate**](../Model/MessageTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

