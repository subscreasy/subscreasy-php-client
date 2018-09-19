# Swagger\Client\ProductResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductUsingPOST**](ProductResourceApi.md#createProductUsingPOST) | **POST** /api/products | createProduct
[**getAllCompanyProductUsingGET**](ProductResourceApi.md#getAllCompanyProductUsingGET) | **GET** /api/na/products2/{companyName} | getAllCompanyProduct
[**getAllProductsUsingGET**](ProductResourceApi.md#getAllProductsUsingGET) | **GET** /api/products | getAllProducts
[**getCompanyProductUsingGET**](ProductResourceApi.md#getCompanyProductUsingGET) | **GET** /api/na/products/{companyName}/{id} | getCompanyProduct
[**getProductUsingGET**](ProductResourceApi.md#getProductUsingGET) | **GET** /api/products/{id} | getProduct
[**updateProductUsingPUT**](ProductResourceApi.md#updateProductUsingPUT) | **PUT** /api/products | updateProduct


# **createProductUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Product createProductUsingPOST($product)

createProduct

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Product(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Product | product

try {
    $result = $apiInstance->createProductUsingPOST($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductResourceApi->createProductUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Product**](../Model/Product.md)| product |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Product**](../Model/Product.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCompanyProductUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Product[] getAllCompanyProductUsingGET($company_name)

getAllCompanyProduct

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_name = "company_name_example"; // string | companyName

try {
    $result = $apiInstance->getAllCompanyProductUsingGET($company_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductResourceApi->getAllCompanyProductUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_name** | **string**| companyName |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Product[]**](../Model/Product.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllProductsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Product[] getAllProductsUsingGET()

getAllProducts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllProductsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductResourceApi->getAllProductsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Product[]**](../Model/Product.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyProductUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Product getCompanyProductUsingGET($company_name, $id)

getCompanyProduct

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_name = "company_name_example"; // string | companyName
$id = 789; // int | id

try {
    $result = $apiInstance->getCompanyProductUsingGET($company_name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductResourceApi->getCompanyProductUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_name** | **string**| companyName |
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Product**](../Model/Product.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Product getProductUsingGET($id)

getProduct

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getProductUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductResourceApi->getProductUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Product**](../Model/Product.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Product updateProductUsingPUT($product)

updateProduct

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Product(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Product | product

try {
    $result = $apiInstance->updateProductUsingPUT($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductResourceApi->updateProductUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Product**](../Model/Product.md)| product |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Product**](../Model/Product.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

