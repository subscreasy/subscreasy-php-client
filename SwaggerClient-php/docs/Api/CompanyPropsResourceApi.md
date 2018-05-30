# Swagger\Client\CompanyPropsResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCompanyPropsUsingPOST**](CompanyPropsResourceApi.md#createCompanyPropsUsingPOST) | **POST** /api/company-props | createCompanyProps
[**deleteCompanyPropsUsingDELETE**](CompanyPropsResourceApi.md#deleteCompanyPropsUsingDELETE) | **DELETE** /api/company-props/{id} | deleteCompanyProps
[**getAllCompanyPropsUsingGET**](CompanyPropsResourceApi.md#getAllCompanyPropsUsingGET) | **GET** /api/company-props | getAllCompanyProps
[**getCompanyPropsByCompanyIdUsingGET**](CompanyPropsResourceApi.md#getCompanyPropsByCompanyIdUsingGET) | **GET** /api/company-props/company/{companyId} | getCompanyPropsByCompanyId
[**updateCompanyPropsUsingPUT**](CompanyPropsResourceApi.md#updateCompanyPropsUsingPUT) | **PUT** /api/company-props | updateCompanyProps


# **createCompanyPropsUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps createCompanyPropsUsingPOST($company_props)

createCompanyProps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyPropsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_props = new \Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps | companyProps

try {
    $result = $apiInstance->createCompanyPropsUsingPOST($company_props);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyPropsResourceApi->createCompanyPropsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_props** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps**](../Model/CompanyProps.md)| companyProps |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps**](../Model/CompanyProps.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCompanyPropsUsingDELETE**
> deleteCompanyPropsUsingDELETE($id)

deleteCompanyProps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyPropsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteCompanyPropsUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling CompanyPropsResourceApi->deleteCompanyPropsUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllCompanyPropsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps[] getAllCompanyPropsUsingGET()

getAllCompanyProps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyPropsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllCompanyPropsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyPropsResourceApi->getAllCompanyPropsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps[]**](../Model/CompanyProps.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyPropsByCompanyIdUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps getCompanyPropsByCompanyIdUsingGET($company_id)

getCompanyPropsByCompanyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyPropsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 789; // int | companyId

try {
    $result = $apiInstance->getCompanyPropsByCompanyIdUsingGET($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyPropsResourceApi->getCompanyPropsByCompanyIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| companyId |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps**](../Model/CompanyProps.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCompanyPropsUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps updateCompanyPropsUsingPUT($company_props)

updateCompanyProps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyPropsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_props = new \Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps | companyProps

try {
    $result = $apiInstance->updateCompanyPropsUsingPUT($company_props);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyPropsResourceApi->updateCompanyPropsUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_props** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps**](../Model/CompanyProps.md)| companyProps |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\CompanyProps**](../Model/CompanyProps.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

