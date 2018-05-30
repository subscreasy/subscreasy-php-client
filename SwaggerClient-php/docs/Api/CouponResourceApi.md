# Swagger\Client\CouponResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCouponUsingPOST**](CouponResourceApi.md#createCouponUsingPOST) | **POST** /api/coupons | createCoupon
[**deleteCouponUsingDELETE**](CouponResourceApi.md#deleteCouponUsingDELETE) | **DELETE** /api/coupons/{id} | deleteCoupon
[**getAllCouponsUsingGET**](CouponResourceApi.md#getAllCouponsUsingGET) | **GET** /api/coupons | getAllCoupons
[**getCouponUsingGET**](CouponResourceApi.md#getCouponUsingGET) | **GET** /api/coupons/{id} | getCoupon
[**updateCouponUsingPUT**](CouponResourceApi.md#updateCouponUsingPUT) | **PUT** /api/coupons | updateCoupon


# **createCouponUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon createCouponUsingPOST($coupon)

createCoupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CouponResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon | coupon

try {
    $result = $apiInstance->createCouponUsingPOST($coupon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponResourceApi->createCouponUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon**](../Model/Coupon.md)| coupon |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon**](../Model/Coupon.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCouponUsingDELETE**
> deleteCouponUsingDELETE($id)

deleteCoupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CouponResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteCouponUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling CouponResourceApi->deleteCouponUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllCouponsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon[] getAllCouponsUsingGET()

getAllCoupons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CouponResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllCouponsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponResourceApi->getAllCouponsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon[]**](../Model/Coupon.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon getCouponUsingGET($id)

getCoupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CouponResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getCouponUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponResourceApi->getCouponUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon**](../Model/Coupon.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCouponUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon updateCouponUsingPUT($coupon)

updateCoupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CouponResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon = new \Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon | coupon

try {
    $result = $apiInstance->updateCouponUsingPUT($coupon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponResourceApi->updateCouponUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon**](../Model/Coupon.md)| coupon |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\Coupon**](../Model/Coupon.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

