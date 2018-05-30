# Swagger\Client\CompanyResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCompanyUsingPOST**](CompanyResourceApi.md#createCompanyUsingPOST) | **POST** /api/companies | createCompany
[**deleteCompanyUsingDELETE**](CompanyResourceApi.md#deleteCompanyUsingDELETE) | **DELETE** /api/companies/{id} | deleteCompany
[**getAllCompaniesUsingGET**](CompanyResourceApi.md#getAllCompaniesUsingGET) | **GET** /api/companies | getAllCompanies
[**getCompanyUsingGET**](CompanyResourceApi.md#getCompanyUsingGET) | **GET** /api/companies/{id} | getCompany
[**updateCompanyUsingPUT**](CompanyResourceApi.md#updateCompanyUsingPUT) | **PUT** /api/companies | updateCompany


# **createCompanyUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Company createCompanyUsingPOST($company)

createCompany

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Company(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Company | company

try {
    $result = $apiInstance->createCompanyUsingPOST($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyResourceApi->createCompanyUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Company**](../Model/Company.md)| company |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Company**](../Model/Company.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCompanyUsingDELETE**
> deleteCompanyUsingDELETE($id)

deleteCompany

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteCompanyUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling CompanyResourceApi->deleteCompanyUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllCompaniesUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Company[] getAllCompaniesUsingGET()

getAllCompanies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllCompaniesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyResourceApi->getAllCompaniesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Company[]**](../Model/Company.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Company getCompanyUsingGET($id)

getCompany

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getCompanyUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyResourceApi->getCompanyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Company**](../Model/Company.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCompanyUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Company updateCompanyUsingPUT($company)

updateCompany

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Company(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Company | company

try {
    $result = $apiInstance->updateCompanyUsingPUT($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyResourceApi->updateCompanyUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Company**](../Model/Company.md)| company |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Company**](../Model/Company.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

