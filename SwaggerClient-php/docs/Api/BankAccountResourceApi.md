# Swagger\Client\BankAccountResourceApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBankAccountUsingPOST**](BankAccountResourceApi.md#createBankAccountUsingPOST) | **POST** /api/bank-accounts | createBankAccount
[**deleteBankAccountUsingDELETE**](BankAccountResourceApi.md#deleteBankAccountUsingDELETE) | **DELETE** /api/bank-accounts/{id} | deleteBankAccount
[**getAllBankAccountsUsingGET**](BankAccountResourceApi.md#getAllBankAccountsUsingGET) | **GET** /api/bank-accounts | getAllBankAccounts
[**getBankAccountUsingGET**](BankAccountResourceApi.md#getBankAccountUsingGET) | **GET** /api/bank-accounts/{id} | getBankAccount
[**updateBankAccountUsingPUT**](BankAccountResourceApi.md#updateBankAccountUsingPUT) | **PUT** /api/bank-accounts | updateBankAccount


# **createBankAccountUsingPOST**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount createBankAccountUsingPOST($bank_account)

createBankAccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BankAccountResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_account = new \Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount | bankAccount

try {
    $result = $apiInstance->createBankAccountUsingPOST($bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountResourceApi->createBankAccountUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount**](../Model/BankAccount.md)| bankAccount |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount**](../Model/BankAccount.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBankAccountUsingDELETE**
> deleteBankAccountUsingDELETE($id)

deleteBankAccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BankAccountResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $apiInstance->deleteBankAccountUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountResourceApi->deleteBankAccountUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllBankAccountsUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount[] getAllBankAccountsUsingGET()

getAllBankAccounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BankAccountResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllBankAccountsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountResourceApi->getAllBankAccountsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount[]**](../Model/BankAccount.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankAccountUsingGET**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount getBankAccountUsingGET($id)

getBankAccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BankAccountResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | id

try {
    $result = $apiInstance->getBankAccountUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountResourceApi->getBankAccountUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount**](../Model/BankAccount.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBankAccountUsingPUT**
> \Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount updateBankAccountUsingPUT($bank_account)

updateBankAccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BankAccountResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_account = new \Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount(); // \Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount | bankAccount

try {
    $result = $apiInstance->updateBankAccountUsingPUT($bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountResourceApi->updateBankAccountUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account** | [**\Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount**](../Model/BankAccount.md)| bankAccount |

### Return type

[**\Swagger\Client\com.kodfarki.subscreasy.client.model\BankAccount**](../Model/BankAccount.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

